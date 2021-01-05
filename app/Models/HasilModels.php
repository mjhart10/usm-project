<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class HasilModels extends Model {
        protected $table = 'nilai_mhs';
        protected $primaryKey = 'nilai';

        protected $allowedFields = ['nilai'];
    }



?>