<?php

namespace App\Http\Controllers;

class Controller extends BaseController
{
    public function index($name) //metodos que sao usados nas rotas e ai podemos criar qualquer action com qualquer nome
    {
        return 'Hello' . $name;
    }
}
