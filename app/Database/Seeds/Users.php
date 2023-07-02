<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class Users extends Seeder
{
    public function run()
    {
        // Lakukan perulangan data
        for ($i=0; $i<10;$i++) {
            $data = [
                [
                    'username'  => 'adikusuma',
                    'password'  => 'enter',
                    'firstname' => 'Adi',
                    'lastname'  => 'Kusuma',
                    'address'   => 'Majenang, Cilacap',
                    'age'       => '17'
                ],

                [
                    'username'  => 'carlos',
                    'password'  => 'secret',
                    'firstname' => 'Roberto',
                    'lastname'  => 'Carlos',
                    'age'       => '17',
                ],
            ];
            // Insert semua data ke dalam tabel
            $this->db->table('users')->insertBatch($data);
            // Single Insert
            // ->Insert($data);
            // Multiple Insert
            // ->insertBatch($data);
        };
    }
}
