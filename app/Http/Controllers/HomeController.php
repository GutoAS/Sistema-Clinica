<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Consultas;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){

            if(Auth::user()->tipo_usuario == "0"){
                 $doctor = doctor::all();

                return view('user.home',compact('doctor'));
            } else {
                return view('admin.home');
            }

        } else {
            return redirect()->back();
        }
    }

    public function index(){

        if (Auth::id()) {
            return  redirect('home');
        }
        else{


        
        $doctor = doctor::all();


        return view('user.home',compact('doctor'));

        }
    }

    public function logout(Request $request): RedirectResponse {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');

    }

    public function consulta(Request $request){

        $data = new consultas;

        $data->nome = $request->nome;
        $data->email = $request->email;
        $data->data = $request->data;
        $data->doctor = $request->doctor;
        $data->telefone = $request->telefone;
        $data->mensagem = $request->mensagem;
        $data->status = 'Em progresso';

        if(Auth::id()){
            $data->user_id = Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('message','Consulta Submetida com sucesso, iremos entrar em contacto brevemente');

    }
}
