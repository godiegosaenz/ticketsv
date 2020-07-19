<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'tecnologia.informacion@sanvicente.gob.ec',
                'password'       => '$2y$10$XshEAX9BwQmxaphGhDEjwuAtqTTcrDh3k/bLiAlfS3pvIDUn2X4tG',
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Agent 1',
                'email'          => 'avaluos.catastro@sanvicente.gob.ec',
                'password'       => '$2y$10$XshEAX9BwQmxaphGhDEjwuAtqTTcrDh3k/bLiAlfS3pvIDUn2X4tG',
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Agent 2',
                'email'          => 'transito@sanvicente.gob.ec',
                'password'       => '$2y$10$XshEAX9BwQmxaphGhDEjwuAtqTTcrDh3k/bLiAlfS3pvIDUn2X4tG',
                'remember_token' => null,
            ],
            [
                'id'             => 4,
                'name'           => 'Agent 3',
                'email'          => 'agent3@agent3.com',
                'password'       => '$2y$10$UnLIBQB1uZZC1r5msFWTPuZCZsMBUpZINpJ48G5FmMxz6yVGP83rO',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
