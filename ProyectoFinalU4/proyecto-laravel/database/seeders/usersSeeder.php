<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User();
        $user1->name = "pepe";
        $user1->email = "pepe@gmail.com";
        $user1->role = "1";
        $user1->password = bcrypt("123456789");
        $user1->apellido = "Lopez";
        $user1->telefono = "44944646";
        $user1->fechaNacim = "2002-01-06";
        $user1->save();

        $user2 = new User();
        $user2->name = "Alex";
        $user2->email = "alex@gmail.com";
        $user2->role = "2";
        $user2->password = bcrypt("123456789");
        $user2->apellido = "Marin";
        $user2->telefono = "656565";
        $user2->fechaNacim = "2002-01-06";
        $user2->save();

        $user3 = new User();
        $user3->name = "laura";
        $user3->email = "laura@gmail.com";
        $user3->role = "3";
        $user3->password = bcrypt("123456789");
        $user3->apellido = "Martin";
        $user3->telefono = "5656565";
        $user3->fechaNacim = "2002-10-07";
        $user3->save();

        $user4 = new User();
        $user4->name = "ana";
        $user4->email = "ana@gmail.com";
        $user4->role = "3";
        $user4->password = bcrypt("123456789");
        $user4->apellido = "Perez";
        $user4->telefono = "555656456565";
        $user4->fechaNacim = "2002-01-06";
        $user4->save();

        $user5 = new User();
        $user5->name = "mar";
        $user5->email = "mar@gmail.com";
        $user5->role = "2";
        $user5->password = bcrypt("123456789");
        $user5->apellido = "Campo";
        $user5->telefono = "454654565";
        $user5->fechaNacim = "2002-01-06";
        $user5->save();
    }
}
