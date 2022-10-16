<?php
namespace App\Controllers;

use App\Core\AbstractController;

class NoRutaController extends AbstractController{

    /**
     *  Esta ruta que sale al iniciar la aplicación y que debe listar todos los registros de la BB.DD.
     */
    public function main(){ 
        //Cargamos la plantilla inicial y le pasamos la fecha y hora que t.
        $this->render("index.html.twig",[
            'title'=> "Ruta no definida.",
            'description'=> "Esta ruta no se encuentra dentro de las URL de la aplicación"
        ]);

    }
}