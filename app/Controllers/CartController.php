<?php
namespace App\Controllers;

use App\Models\CabeceraModel;
use App\Models\CartModel;
use App\Models\ProductModel;
use App\Models\FacturaModel;
use App\Models\DetalleModel;

use CodeIgniter\Controller;


class CartController extends Controller
{

    public function __construct(){
        helper(['form','url','cart']);
        $session=session();
        $cart=\Config\Services::cart();
        $cart->contents();
      
    }

    public function control(){
        $cart=\Config\Services::cart();
        $response=$cart->contents();
        $data=json_encode($response);
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
    public function addCart(){

        $cart = \Config\Services::cart();
        $request =  \Config\Services::request();
        $product = new ProductModel();

        $cart->insert(array(
            'id'      => $request->getPost('id'),
            'qty'     => 1,
            'price'   => $request->getPost('price'),
            'name'    => $request->getPost('name'),
            'options' => array(
               )
         ));

         $id=$this->request->getVar("id");
         $producto=new CartModel();
        

             
           
         
        // dd($cart->contents());
        // dd(($a['id']));
           // session()=setflashdata('Msg','Agregado al carrito');
        return redirect()->to(base_url('carrito'));
        

    }

    public function eliminarElemento($rowid){
        $cart=\Config\Services::cart();
        $producto=new ProductModel();
        //dd();
            
        $a=$producto->where('id',$cart->getItem($rowid)['id'])->first();
        
        //dd($a['stock']);
        $asociar=[
           'stock'=>$a['stock']=$a['stock']+$cart->getItem($rowid)['qty'] ,
        ];
        $producto->where('id',$cart->getItem($rowid)['id'])->update($cart->getItem($rowid)['id'],$asociar);
        
        $cart->remove($rowid);
        return redirect()->to(base_url('carrito'));
       }

       public function eliminarTodos(){
        $cart=\Config\Services::cart();
        $producto=new ProductModel();
             foreach($cart->contents() as $key=>$items){ 
                 
                 $a=$producto->where('id',$items['id'])->first();
                 
                // dd($a['stock']);
                 $asociar=[
                    'stock'=>$a['stock']=$a['stock']+ $items['qty'],
                 ];
                 $producto->where('id',$items['id'])->update($items['id'],$asociar);
    
             };
    
    
    
        $cart->destroy();
        return redirect()->to(base_url('/'));
       }
    
       public function confirmarCompra()
       {
           $cart = \Config\Services::cart();
           $productos = $cart->contents();
           $session = session();
           $idUsuario = $session->get('id_usuario');
           print_r($idUsuario);
           $montoTotal = 0;

           date_default_timezone_set("America/Argentina/Buenos_Aires");
            $fechaActual=date('Y-m-d H:i:s   ');
       
           foreach ($productos as $producto) {
               $montoTotal += $producto["subtotal"];
           }
       
           $ventaCabecera = new CabeceraModel();
           $idCabecera = $ventaCabecera->insert(["total_venta" => $montoTotal,"fecha" => $fechaActual,
            "usuario_id" => $idUsuario]);
       
           $ventaDetalle = new DetalleModel();
           $productoModel = new ProductModel();
       
           foreach ($productos as $producto) {
               $ventaDetalle->insert([
                   "venta_id" => $idCabecera,
                   "producto_id" => $producto["id"],
                   "cantidad" => $producto["qty"],
                   "precio" => $producto["price"],
                   
                   // Agrega otras columnas necesarias en la tabla "detalle"
                   // de acuerdo a tu estructura de datos
               ]);
       
            //    // Actualizar stock del producto
            //    $productoModel->update($producto["id"], [
            //        "stock" => $producto["options"]["stock"] - $producto["qty"]
            //    ]);
           }
       
           // Limpia el carrito después de confirmar la compra
           $cart->destroy();
       
           return redirect()->to(base_url('/compraConfirmada'));
       }

       function compraConfirmada (){

            echo view ('navBar');
            echo view ('compraConfirmada');
        
       }




    
}
?>