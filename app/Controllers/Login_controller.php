<?php
namespace App\Controllers;
Use CodeIgniter\Controller;
Use App\Models\Usuarios_model;

class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        
        $data['titulo']='ingresa';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/ingresa');
        echo view('front/footer_view');
        }
    
    
    public function auth()
    {
        $session = session();
        $model = new Usuarios_model();
        
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');
            
            $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['pass'];
                $ba = $data['baja'];
            if ($ba == 'SI'){
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/Login_controller');
            }
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                
                session()->setFlashdata('msg', 'Bienvenido :)');
                return redirect()->to('/panel');
                
            }else{
                $session->setFlashdata('msg', 'Contraseña Incorrecta :(');
                return redirect()->to('/ingresa');
            }
            }else{
                $session->setFlashdata('msg', 'No existe el email o es incorrecto');
                    return redirect()->to('/ingresa');
            }
            }
        public function logout()
        {
            $session = session();
            $session->destroy();
            return $this->response->redirect('/primer_proyecto');
        }
   
            }

        
    
    
    
    

