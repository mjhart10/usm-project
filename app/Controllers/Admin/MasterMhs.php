<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\DaftarUserModels;

    class MasterMhs extends BaseController {
        public function index() {
            //echo "Ini hamanan index pada controller users";
            //buat object dari class UserModel
            $model = new DaftarUserModels();
            
            //load seluruh data
            $data['mahasiswa'] = $model->orderBy('id_mhs', 'ASC')->findAll();

            return view('admin/view_mhs', $data);
        }
        public function create() {
            return view('users_create_user');
        }
        public function store() {
            $model=new DaftarUserModels();

            $data=[
                'name'=>$this->request->getVar('name'),
                'email'=>$this->request->getVar('email'),
                'contact_no' => $this->request->getVar('contact_no'),
                'password'=>password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
            ];
            $save=$model->insert($data);

            return redirect()->to(base_url('admin/users/user'));
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

            return redirect()->to(base_url('admin/mastermhs/index'));          
        }
        public function delete($id = null){
            $model = new DaftarUserModels();
            $data['mahasiswa'] = $model->where('id_mhs',$id)->delete();

            return redirect()->to(base_url('admin/view_mhs'));
        }
    }
?>