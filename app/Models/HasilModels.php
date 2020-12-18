<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class HasilModels extends Model {
        protected $table = 'hasil_ujian';

        protected $allowedFields = ['no_soal', 'id_hasil', 'bobot', 'jumlah_bobot'];
    }



?>