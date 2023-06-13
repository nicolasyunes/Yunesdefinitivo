<?php
namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\UserModel;

use CodeIgniter\Controller;


class UserController extends Controller
{

    public function index()
    {
        $usuario = new UserModel();
        $datos['usuarios'] = $usuario->findAll();
        echo view ('navBar');
        return view('usuariosRegistrados', $datos);
    }


    public function registrarUsuario()
    {   
        
        $usuario = new UserModel();
        $rules = $this->validate(
           [
            
            'nombre' => 'required|max_length[255]|min_length[5]',
            ]);

        
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'password' => $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            
        ];

        if(!$rules){
            $session = session();
            $session->setFlashdata('mensaje','Revise los datos');
            return redirect()->back()->withInput();
        }else{
            $session2 = session();
            $usuario->insert($data);
            return redirect('/');
        }

         



    }

    public function login()
    {
        // Obtener los datos del formulario de inicio de sesión
        $email = $this->request->getPost('email');
        $nombre = $this->request->getPost('nombre');

        $password = $this->request->getPost('password');
        $id = $this->request->getPost('id');
        
        
        // Validar las credenciales del usuario
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();
        
 

        if(!$user){
            return redirect()->to('/login')->with('error', 'Credenciales inválidas');
        }



        if (password_verify($password, $user['password'])) {
            $session = session();
            $datos = [
                'id_usuario' => $user['id'],
                'logged_in' => true,
                'nombre'=> $user['nombre'],
                'email'=> $user['email'],

            ];
            
            $session->set($datos);

            if($user['id_perfil'] == 1){
                $datos = [
                    'id_usuario' => $user['id'],
                    'isAdmin' => true  ,
                    'logged_in' => true  
                ];
                $session->set($datos);
                return redirect()->to('/admin');

            }else{
                $session = session();
                return redirect()->to('/');
            }
            
           
        } else {
          
            return redirect()->to('/login')->with('error', 'Credenciales inválidas');
     
            
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }


    public function formRegistro()
    {
        return view('registro');
    }

    public function admin()
    {   echo view ('navBar');
        echo view('admin');
        

    }
    public function formLogin()
    {
        
        return view('login');
    }

    public function desactivarUsuario($id=null)
    {
        $usuario = new UserModel();
        $datos = [
            'activo' => 0,
        ];
        
        $usuario->where('id', $id)->update($id,$datos);

        return redirect()->to(base_url('usuarios'));
    }

    public function activarUsuario($id=null)
    {
        $usuario = new UserModel();
        $datos = [
            'activo' => 1,
        ];
        
        $usuario->where('id', $id)->update($id,$datos);

        return redirect()->to(base_url('usuarios'));
    }

    
}
?>