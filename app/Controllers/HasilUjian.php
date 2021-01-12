<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\HasilModels;
    use App\Models\JawabanModels;
    use App\Models\SoalModels;


    class HasilUjian extends BaseController {

        public function history() {
            $model_jawab = new JawabanModels();
            
            //load seluruh data
            $data['hasil'] = $model_jawab->orderBy('id_jawaban', 'ASC')->findAll();

            return view('history_ujianmhs', $data);
        }
        public function index() {
            //echo "Ini hamanan index pada controller users";
            //buat object dari class UserModel

            $model = new JawabanModels();
            $soal_model = new SoalModels();
            $id = 3;
            
            //load seluruh data
            $data['hasil'] = $model->getWhere(['id_jawaban' => $id])->getRowArray();
            $data['bank_soal'] = $soal_model->orderBy('no_soal', 'ASC')->findAll();

            return view('hasil_ujian', $data);
            
        }

        public function inputnilai() {
            $model_nilai=new HasilModels();

            $data=[
                'nilai'=>$this->request->getVar('nilai'),
            
            ];
            $save=$model_nilai->insert($data);

            return redirect()->to(base_url('home/index'));
        }

        public function store(){
            $model = new JawabanModels();
            
            //load seluruh data
            $result = $model->LihatJawaban();
            if($result>0){
                $data=[
                    'jawaban1'=>$this->request->getVar('jawaban[1]'),
                    'jawaban2'=>$this->request->getVar('jawaban[2]'),
                    'jawaban3' => $this->request->getVar('jawaban[3]'),
                    'jawaban4' => $this->request->getVar('jawaban[4]'),
                    'jawaban5' => $this->request->getVar('jawaban[5]'),
                    'jawaban6' => $this->request->getVar('jawaban[6]'),
                    'jawaban7' => $this->request->getVar('jawaban[7]'),
                    'jawaban8' => $this->request->getVar('jawaban[8]'),
                    'jawaban9' => $this->request->getVar('jawaban[9]'),
                    'jawaban10' => $this->request->getVar('jawaban[10]'),
                    'jawaban11' => $this->request->getVar('jawaban[11]'),
                    'jawaban12' => $this->request->getVar('jawaban[12]'),
                    'jawaban13' => $this->request->getVar('jawaban[13]'),
                    'jawaban14' => $this->request->getVar('jawaban[14]'),
                    'jawaban15' => $this->request->getVar('jawaban[15]'),
                    'jawaban16' => $this->request->getVar('jawaban[16]'),
                    'jawaban17' => $this->request->getVar('jawaban[17]'),
                    'jawaban18' => $this->request->getVar('jawaban[18]'),
                    
                    
                ];
                $save=$model->insert($data);
                return redirect()->to(base_url('hasilujian/index'));          

            }else{
               
                    
                    $id_jawaban=3;
                    $data=[
                        'jawaban1'=>$this->request->getVar('jawaban[1]'),
                        'jawaban2'=>$this->request->getVar('jawaban[2]'),
                        'jawaban3' => $this->request->getVar('jawaban[3]'),
                        'jawaban4' => $this->request->getVar('jawaban[4]'),
                        'jawaban5' => $this->request->getVar('jawaban[5]'),
                        'jawaban6' => $this->request->getVar('jawaban[6]'),
                        'jawaban7' => $this->request->getVar('jawaban[7]'),
                        'jawaban8' => $this->request->getVar('jawaban[8]'),
                        'jawaban9' => $this->request->getVar('jawaban[9]'),
                        'jawaban10' => $this->request->getVar('jawaban[10]'),
                        'jawaban11' => $this->request->getVar('jawaban[11]'),
                        'jawaban12' => $this->request->getVar('jawaban[12]'),
                        'jawaban13' => $this->request->getVar('jawaban[13]'),
                        'jawaban14' => $this->request->getVar('jawaban[14]'),
                        'jawaban15' => $this->request->getVar('jawaban[15]'),
                        'jawaban16' => $this->request->getVar('jawaban[16]'),
                        'jawaban17' => $this->request->getVar('jawaban[17]'),
                        'jawaban18' => $this->request->getVar('jawaban[18]'),
                   
        
                    ];
                    $save=$model->update($id_jawaban,$data);
        
                    return redirect()->to(base_url('HasilUjian'));          
                
            }
        }

        // public function hasil() {
        //     $model=new HasilModels();

        //     $data=[
        //         'no_soal'=>$this->request->getVar('no_soal'),
        //         'isi_soal'=>$this->request->getVar('isi_soal'),
        //         'option_a' => $this->request->getVar('option_a'),
        //         'option_b' => $this->request->getVar('option_b'),
        //         'option_c' => $this->request->getVar('option_c'),
        //         'option_d' => $this->request->getVar('option_d'),
        //         'jawaban' => $this->request->getVar('jawaban'),
                
        //     ];
        //     $save=$model->insert($data);

        //     return redirect()->to(base_url('admin/mastersoal/index'));
        // }



        
    }