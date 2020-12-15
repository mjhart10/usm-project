<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\AdminModels;

    class MasterAdmin extends BaseController {
    	public function index(){
        
            return view('admin/index');
            }
            
        public function view() {
                //echo "Ini hamanan index pada controller users";
                //buat object dari class UserModel
                $model = new AdminModels();
                
                //load seluruh data
                $data['admin'] = $model->orderBy('id_admin', 'ASC')->findAll();
    
                return view('admin/view_admin', $data);
            }
        public function create() {
    
                return view('admin/create_admin');
            }
        public function store() {
                $model=new AdminModels();
    
                $data=[
                    'nama_admin'=>$this->request->getVar('nama_admin'),
                    'username'=>$this->request->getVar('username'),
                    'email'=>$this->request->getVar('email'),
                    'password'=>password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                ];
                $save=$model->insert($data);
    
                return redirect()->to(base_url('admin/masteradmin/view'));
            }
        public function edit($id_admin = null){
                $model = new AdminModels();
                $data['admin'] = $model->where('id_admin',$id_admin)->first();
    
                return view('admin/edit_admin',$data);
            }
        public function update(){
                $model=new AdminModels();
                $id_admin=$this->request->getVar('id_admin');
                $data=[
                    'nama_admin'=>$this->request->getVar('nama_admin'),
                    'username'=>$this->request->getVar('username'),
                    'email'=>$this->request->getVar('email'),
               
    
                ];
                $save=$model->update($id_admin,$data);
    
                return redirect()->to(base_url('admin/masteradmin/view'));          
            }
        public function delete($id_admin = null){
                $model = new AdminModels();
                $data['admin'] = $model->where('id_admin',$id_admin)->delete();
    
                return redirect()->to(base_url('admin/masteradmin/view'));
            }

    }