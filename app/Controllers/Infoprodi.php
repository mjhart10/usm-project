<?php namespace App\Controllers;
use App\Models\ProdiModels;

class Infoprodi extends BaseController
{
    public function inf($id = 1){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/informatika',$data);
    }

    public function akt($id = 8){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/akuntansi',$data);
    }

    public function arsi($id = 5){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/arsi',$data);
    }

    public function dkv($id = 4){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/dkv',$data);
    }

    public function dp($id = 7){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/dp',$data);
    }

    public function ilkom($id = 1){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/ilkom',$data);
    }

    public function mnj($id = 9){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/manajemen',$data);
    }

    public function psi($id = 3){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/psikologi',$data);
    }

    public function sif($id = 6){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/sif',$data);
    }

    public function teksip($id = 10){
        $model = new ProdiModels();
        $data['informasi'] = $model->where('id',$id)->first();

        return view('infoprodi/teksip',$data);
    }

    
}