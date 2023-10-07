<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo']='quienes somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
     public function inscripcion()
    {$data['titulo']='inscripcion';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/inscripcion');
        echo view('front/footer_view');
    }
    public function registro()
    {
        $data['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
        
    }
    public function ingresa()
    {
        $data['titulo']='ingresa';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/ingresa');
        echo view('front/footer_view');
}
    public function inscripcionlog()
    {$data['titulo']='inscripcionlog';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/inscripcionlog');
        echo view('front/footer_view');
    }
};?>

