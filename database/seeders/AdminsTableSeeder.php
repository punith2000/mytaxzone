<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('admin!@#$');
        $admin = new Admin;
        $admin->name='Amith';
        $admin->role='admin';
        $admin->mobile='6363213450';
        $admin->email='admin@admin.com';
        $admin->password=$password;
        $admin->status=1;
        $admin->save();
    }
}