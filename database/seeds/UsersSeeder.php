<?php

namespace App;
use Illuminate\Database\Seeder;


// use Illuminate\Foundation\Auth\User;
// use Spatie\Permission\Models\Role;

use Backpack\CRUD\CrudTrait; // <------------------------------- this one
use Spatie\Permission\Traits\HasRoles;// <---------------------- and this one
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create(['name'=>'Administrator','email'=>'admin@siyahkare.com','password'=>bcrypt('admin1234')]);
        $user1->assignRole('admin');
    }
}
