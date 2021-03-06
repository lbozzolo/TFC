<?php

namespace App\Http\Repositories\tfc;

use App\Entities\tfc\Horarios;
use App\Http\Repositories\BaseRepo;

class HorariosRepo extends BaseRepo {

    public function getModel()
    {
        return new Horarios;
    }


    public function createCustom($datos = null)
    {
        $data = $datos->all();

        return;
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Logo' => ['data'=> 'images' ,'relation' => null],
                'Horarios' =>  ['data' => 'name','relation' => null],


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}