<?php

namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    

    public function index()
    {
        echo view('navBar');
        
        $product = new ProductModel();
        $datos['productos'] = $product->findAll();

        echo view('listaProductosAdmin', $datos);
        echo view('footer');
    }

    
    public function catalogo(){
        $product = new ProductModel();
        $datos['productos'] = $product->findAll();
        echo view ('navBar');
        echo view ('catalogo',$datos);     
        echo view ('footer');
  
     }

    public function agregarProducto()
    {
        echo view('navBar');
        
        

        echo view('agregarProducto');
        echo view('footer');
    }

    public function guardar() {
     
            // Obtener los datos del formulario de creación
    $nombre = $this->request->getPost('nombre_producto');
    $precio = $this->request->getPost('precio_unitario');
    $stock = $this->request->getPost('stock');
    $imagen = $this->request->getFile('imagen_producto');

    // Validar la imagen (opcional)
    

    // Mover la imagen a la carpeta de destino
    $newName = $imagen->getRandomName();
    $imagen->move( 'assets/img/productos/', $newName);

    // Guardar los datos del producto en la base de datos
    $productoModel = new ProductModel();
    $productoModel->save([
        'nombre_producto' => $nombre,
        'precio_unitario' => $precio,
        'stock' => $stock,
        'imagen_producto' => $newName
    ]);

    return redirect()->to('/listaProductosAdmin')->with('success', 'Producto guardado exitosamente.');
    }


    public function modificar($id = null){
       
        //me permite capturar la informacion y guardarla a la base de datos
        $productoModel = new ProductModel();
        $datos['producto'] = $productoModel->where('id', $id)->first();
       
        echo view ('editar_producto', $datos);
    }

    public function borrar($id=null)
    {
        $producto = new ProductModel();
        $datos = [
            'activo' => 0,
        ];
        
        $producto->where('id', $id)->update($id,$datos);

        return redirect()->to(base_url('/listaProductosAdmin'));
    }



    public function actualizar()
    {
        //me permite capturar la informacion y guardarla a la base de datos
        $productoModel = new ProductModel();

        $datos = [
            'nombre_producto' => $this->request->getVar('nombre_producto'),
            
            'precio_unitario' => $this->request->getVar('precio_unitario'),
            'stock' => $this->request->getVar('stock')
            


        ];

        $id = $this->request->getVar('id');
        
        $productoModel->update($id, $datos); //actualiza la informacion

      

        
        if ($imagen_producto = $this->request->getFile('imagen_producto')) {

            //borrar la imagen antes de actualizar
            $datosProducto = $productoModel->where('id', $id)->first(); //recupero la informacion
            $ruta = ('assets/img/productos/' . $datosProducto['imagen_producto']);  //armo la ruta
            unlink($ruta);



            $nuevoNombre = $imagen_producto->getRandomName();
            $imagen_producto->move('assets/img/productos/', $nuevoNombre);

            $datos = [
                'imagen_producto' => $nuevoNombre //escribir el nombre en la base atraves del id
            ];

            $productoModel->update($id, $datos);

            //redirecciona
            return $this->response->redirect(base_url('/'));


        }
    }

}


