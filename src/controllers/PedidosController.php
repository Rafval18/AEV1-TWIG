<?php
namespace App\Controllers;

use App\Core\AbstractController;

class PedidosController extends AbstractController{

    /**
     *  Esta ruta que sale al iniciar la aplicación y que debe listar todos los registros de la BB.DD.
     */
    public function pedidos(){ 
        //Cargamos la plantilla inicial y le pasamos la fecha y hora que t.
        $this->render("index.html.twig",[
            'title'=> "Estoy en el main controller."
        ]);
    }
}