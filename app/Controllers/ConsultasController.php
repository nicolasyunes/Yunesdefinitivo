<?php

namespace App\Controllers;
use App\Models\consultasModel;

class ConsultasController extends BaseController
{
    public function index()
    {
       
        echo view('navBar');
        echo view('consultas');
       

        
    }
    
    public function cargarConsultas(){
        $consulta= new consultasModel();
        $datos['consultas']=$consulta->findAll();
        echo view('navBar');
        echo view('consultas',$datos);
        

    }

    public function agregarConsulta(){
        
        $nombre=$this->request->getPost('nombre');
        
        $email=$this->request->getPost('email');
        $mensaje=$this->request->getPost('mensaje');

            
        
        $validation=service('validation');
        $validation->setRules([
            
                'nombre'=>['rules'=>'required','errors'=>['required'=>'Debe ingresar un nombre']],
              
                
                'email'=>['rules'=>'required','errors'=>['required'=>'Debe ingresar un valor de email']],
                'mensaje'=>['rules'=>'required','errors'=>['required'=>'Debe ingresar una mensaje']],
                
                
        ]);

        if(!$validation->withRequest($this->request)->run()){
            //dd($validation->getErrors());
            return redirect()->back()->withInput()->with('errors',$validation->getErrors());
        }else{
                $nombre=$this->request->getVar("nombre");
              
                
                $email=$this->request->getVar("email");
                $mensaje=$this->request->getVar('mensaje');
               
                
                //guardamos en la base de datos con el model
                $datos=[
                    "nombre"=>$nombre,
                    
                    
                    "email"=>$email,
                    "mensaje"=>$mensaje,
                   
                    
                    
                ];

                $consulta=new consultasModel();
                $consulta->insert($datos);
                $session=session();
                $session->set('msg',"Mensaje enviado EXITOSAMENTE");
                $session->markAsFlashdata('msg');


                return redirect()->to('/contacto')->with('success', 'Producto guardado exitosamente.');

         }
    }

}