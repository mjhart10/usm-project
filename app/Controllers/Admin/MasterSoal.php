<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\SoalModels;

    class MasterSoal extends BaseController {
        public function index() {
            //echo "Ini hamanan index pada controller users";
            //buat object dari class UserModel
            $model = new SoalModels();
            
            //load seluruh data
            $data['bank_soal'] = $model->orderBy('no_soal', 'ASC')->findAll();

            return view('admin/view_soal', $data);
        }
        public function create() {
            return view('admin/create_soal');
        }
        public function store() {
            $model=new SoalModels();

            $data=[
                'no_soal'=>$this->request->getVar('no_soal'),
                'isi_soal'=>$this->request->getVar('isi_soal'),
                'option_a' => $this->request->getVar('option_a'),
                'option_b' => $this->request->getVar('option_b'),
                'option_c' => $this->request->getVar('option_c'),
                'option_d' => $this->request->getVar('option_d'),
                'jawaban' => $this->request->getVar('jawaban'),
                
            ];
            $save=$model->insert($data);

            return redirect()->to(base_url('admin/mastersoal/index'));
        }
        public function edit($id_mhs = null){
            $model = new DaftarUserModels();
            $data['mahasiswa'] = $model->where('id_mhs',$id_mhs)->first();

            return view('admin/edit_mhs',$data);
        }
        public function update(){
            $model=new DaftarUserModels();
            $id_mhs=$this->request->getVar('id_mhs');
            $data=[
                'nama'=>$this->request->getVar('nama'),
                'ttl'=>$this->request->getVar('ttl'),
                'nik' => $this->request->getVar('nik'),
                'jenis_kelamin'=>$this->request->getVar('jenis_kelamin'),
                'alamat'=>$this->request->getVar('alamat'),
                'kode_pos'=>$this->request->getVar('kode_pos'),
                'no_handphone'=>$this->request->getVar('no_handphone'),
                'email'=>$this->request->getVar('email'),
                'asal_sekolah'=>$this->request->getVar('asal_sekolah'),

            ];
            $save=$model->update($id_mhs,$data);

            return redirect()->to(base_url('public/admin/mastermhs/index'));          
        }
        public function delete($no_soal = null){
            $model = new SoalModels();
            $data['bank_soal'] = $model->where('no_soal',$no_soal)->delete();

            return redirect()->to(base_url('admin/mastersoal/index'));
        }
    }
?>