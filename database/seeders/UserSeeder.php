<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'adminpenaqu',
               'name'=>'Admin PenaQu',
               'email'=>'admin@penaqu.com',
               'level'=>'admin',
               'password'=> bcrypt('admin123')
            ],
            [
                'username' => 'pegawaipenaqu',
               'name'=>'Pegawai PenaQu',
               'email'=>'pegawai@penaqu.com',
               'level'=>'pegawai',
               'password'=> bcrypt('pegawai123'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
    }
}
}
