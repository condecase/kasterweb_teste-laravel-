<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usuario;
use App\Models\Login;

class LogController extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function edit($id){
        $users = User::findOrFail($id);


        return view('edit', ['users' => $users]);
    }
    public function update(Request $request){
        $data = $request->all();
        User::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Usuário editado com sucesso!');
    }


    public function dashboard() {
        $users = User::all();
        
        $userLog = auth()->user();

        return view('dashboard', ['users' => $users, 'userLog' => $userLog]);
    }
    
    public function destroy($id){
        User::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Usuário excluído com sucesso!');
    }
}
