<?php namespace App\Controllers;
use App\Models\DaftarUserModels;

class Mahasiswa extends BaseController
{
    public function daf_user(){
        
        
        return view('daftar_user');
    }

    public function createmhs() {
        $model= new DaftarUserModels();

        $data=[
            'nama'=>$this->request->getVar('nama'),
            'ttl'=>$this->request->getVar('ttl'),
            'nik' => $this->request->getVar('nik'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'no_handphone' => $this->request->getVar('nohp'),
            'email' => $this->request->getVar('email'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'alamat' => $this->request->getVar('alamat'),];
           
        $save=$model->insert($data);

        return redirect()->to(base_url('mahasiswa/rule'));

        }

        public function rule(){
        
        
            return view('rule_ujian.php');
        }
}