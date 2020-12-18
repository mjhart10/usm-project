<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class JawabanModels extends Model {
        protected $table = 'jawaban_user';
        protected $primaryKey = 'id_jawaban';

        protected $allowedFields = ['id_jawaban', 
        'jawaban1',
        'jawaban2',
        'jawaban3',
        'jawaban4',
        'jawaban5',
        'jawaban6',
        'jawaban7',
        'jawaban8',
        'jawaban9',
        'jawaban10',
        'jawaban11',
        'jawaban12',
        'jawaban13',
        'jawaban14',
        'jawaban15',
        'jawaban16',
        'jawaban17',
        'jawaban18',
    ];

    public function LihatJawaban (){
        $db      = \Config\Database::connect();
        $builder = $db->table('jawaban_user');
        $query   = $builder->countAllResults();

        if ($query>0)
        {
            return 0;
        }else{
            return 1;
        }
    }
    }



?>