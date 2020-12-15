<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\MarketingModels;

    class MasterMkt extends BaseController {
        public function index() {
            //echo "Ini hamanan index pada controller users";
            //buat object dari class UserModel
            $model = new MarketingModels();
            
            //load seluruh data
            $data['marketing'] = $model->orderBy('id_marketing', 'ASC')->findAll();

            return view('admin/view_mkt', $data);
        }
        public function create() {

            return view('admin/create_mkt');
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