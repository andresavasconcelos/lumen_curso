<?php
/**
 * Created by PhpStorm.
 * User: andresa
 * Date: 02/06/2019
 * Time: 22:19
 */

namespace App\Http\Controllers\Api;

 use App\Http\Controllers\Controller;
 use App\User;
 use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
//        $users = User::all(); assim mostra todos
        $users = User::paginate(); //assim ja tras uma array
        return $users; //assim ele retornará todos os dados da tabela users. indo em inspecionar é possivel ver a array
    }

    public function show($id)
    {
        $user = User::findOrFail($id); // encontre ou falhe e se tiver só o fail ele trará vazio caso nao encontre
        return $user;
    }

    public function store(Request $request)
    {
        $user = User::create($request->all()); // permite que insira os campos e massa
    }
}