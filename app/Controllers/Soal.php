<?php namespace App\Controllers;
use App\Models\SoalModels;

class Soal extends BaseController
{
    public function ujian(){
        //buat object dari class UserModel
        $model = new SoalModels();
        
        //load seluruh data
        $data['bank_soal'] = $model->orderBy('no_soal', 'ASC')->findAll();

        return view('ujian_mhs', $data);

    }
	
  

}