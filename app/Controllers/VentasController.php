<?php

namespace App\Controllers;
use App\Models\CabeceraModel;
use App\Models\DetalleModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class VentasController extends BaseController
{
    public function index()
    {


       
        echo view('navBar');
        echo view('ventas');
        

        
    }

    public function ventasRealizadas(){
        $detalle=new DetalleModel();
        $usuario= new UserModel();
        $producto= new ProductModel();
        $factura=new CabeceraModel();

        $datos=[
            'usuario'=>$usuario->findAll(),
            'factura'=>$factura->findAll(),
            'detalle'=>$detalle->findAll(),
            'producto'=>$producto->findAll(),

        ];

        echo view('navBar');
        echo view('ventas',$datos);
       
    }

    public function detalleFactura($id=null){
        $productos= new ProductModel();
        $factura=new CabeceraModel();
        $detalle=new DetalleModel();

        $facturaUsuario=$factura->where('id',$id)->first();
        $detalleFactura=$detalle->where('venta_id',$id)->findAll();
        $productos= $productos->findAll();
        $data=[
            'facturaUsuario'=>$facturaUsuario,
            'detalleFactura'=>$detalleFactura,
            'productos'=>  $productos
        ];
        echo view('navBar');
        echo view('detalleFactura',$data);
       


    }





}
