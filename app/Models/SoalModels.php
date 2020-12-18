<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class SoalModels extends Model {
        protected $table = 'bank_soal';
        protected $primaryKey = 'no_soal';
  
        protected $allowedFields = ['no_soal', 'isi_soal', 'option_a', 'option_b', 'option_c', 'option_d', 'jawaban', 'bobot'];
    
       
    
    }



?>