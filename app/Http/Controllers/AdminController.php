<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Consultas;

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

    public function mostrarConsultas(){

        $data = consultas::all();

        return view('admin.mostrar_consulta', compact('data'));
    }

    public function approved($id){

        $data=consultas::find($id);

        $data->status = "Aprovado";

        $data->save();

        return redirect()->back();

    }

     public function canceled($id){

        $data=consultas::find($id);

        $data->status = "Cancelado";

        $data->save();

        return redirect()->back();

    }

    public function mostrarDoctores(){
        $data = doctor::all();

        return view('admin.mostrar_doctores', compact('data'));
    }


    public function removerDoctor($id){
        $data = doctor::find($id);
        $data->delete();

        return redirect()->back();
    }
}
