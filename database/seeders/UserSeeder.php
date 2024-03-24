<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Felipe Turra';
        $user->email = 'felipe.turra@gmail.com';
        $user->save();

        $user = new User;
        $user->name = 'Guilherme Anzolin';
        $user->email = 'guilherme.anzollin@gmail.com';
        $user->save();

        $user = new User;
        $user->name = 'Bruna Stofel';
        $user->email = 'bruna.stofel@gmail.com';
        $user->save();
    }
}
