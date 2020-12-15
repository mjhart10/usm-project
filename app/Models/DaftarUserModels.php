<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class DaftarUserModels extends Model {
        protected $table = 'mahasiswa';
        protected $primaryKey = 'id_mhs';

        protected $allowedFields = ['id_mhs', 'nama', 'ttl', 'nik', 'jenis_kelamin', 'alamat', 'kode_pos', 'no_handphone', 'email', 'asal_sekolah'];
    }
?>