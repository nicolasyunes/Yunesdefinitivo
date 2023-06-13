<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       
        echo view('navBar');
        echo view('nueva_plantilla');
        echo view('footer');

        
    }

    public function quienesSomos (){
        echo view('navBar');
       echo view('quienes_somos');
       echo view('footer');

    } 

    public function comercializacion (){
        echo view('navBar');
        echo view('comercializacion');
        echo view('footer');
     } 

     public function contacto (){
        echo view ('navBar');
        echo view ('contacto');
        echo view ('footer');

     }

     public function terminosyuso(){
        echo view ('navBar');
        echo view ('terminos');     
        echo view ('footer');

     }


   public function carrito(){
      echo view ('navBar');
      echo view ('carrito');     
      echo view ('footer');

   }


}
