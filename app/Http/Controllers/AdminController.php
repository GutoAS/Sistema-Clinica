<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.adicionar_doctor');
    }

     public function upload(Request $request){
        $doctor = new doctor;
        $image= $request->imagem;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->imagem->move('doctorimage',$imagename);
        $doctor->imagem=$imagename;

        $doctor->nome = $request->nome;
        $doctor->telefone = $request->telefone;
        $doctor->especialidade = $request->especialidade;
        $doctor->sala = $request->sala;

        $doctor->save();

        return redirect()->back()->with('message', "Doctor Adicionado com Sucesso");

    }
}
