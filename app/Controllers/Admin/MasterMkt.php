<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\MarketingModels;
    use App\Models\PenggunaModels;

    class MasterMkt extends BaseController {
        public function index($id=2) {
            //echo "Ini hamanan index pada controller users";
            //buat object dari class UserModel
            $model2 = new PenggunaModels();
            
            //load seluruh data
            $data['user'] = $model2->where('id', $id)->first();

            return view('admin/view_mkt', $data);
        }
        public function create() {

            return view('Myth\Auth\Views\register');
        }
        public function store() {
            $model=new MarketingModels();

            $data=[
                'nama_pengguna'=>$this->request->getVar('nama_pengguna'),
                'username'=>$this->request->getVar('username'),
                'password'=>password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
            ];
            $save=$model->insert($data);

            return redirect()->to(base_url('admin/mastermkt/index'));
        }
        public function edit($id_marketing = null){
            $model = new MarketingModels();
            $data['marketing'] = $model->where('id_marketing',$id_marketing)->first();

            return view('admin/edit_mkt',$data);
        }
        public function update(){
            $model=new MarketingModels();
            $id_marketing=$this->request->getVar('id_marketing');
            $data=[
                'nama_pengguna'=>$this->request->getVar('nama_pengguna'),
                'username'=>$this->request->getVar('username'),
           

            ];
            $save=$model->update($id_marketing,$data);

            return redirect()->to(base_url('admin/mastermkt/index'));          
        }
        public function delete($id_marketing = null){
            $model = new MarketingModels();
            $data['marketing'] = $model->where('id_marketing',$id_marketing)->delete();

            return redirect()->to(base_url('admin/mastermkt/index'));
        }
    }
?>