<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //membuat beperapa role
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);
        $teacherRole = Role::create([
            'name' => 'teacher'
        ]);
        $studentRole = Role::create([
            'name' => 'student'
        ]);

        //membuat akun user
        $userOwner = User::create([
            'name' => 'Bryan Kurnia Akbar',
            'email' => 'bryankurniaakbar12@gmail.com',
            'password' => bcrypt('12345678'),
            'occupation' => 'owner',
            'avatar' => 'images/default-avatar.png',
        ]);
        $userOwner->assignRole($ownerRole);
    }
}
