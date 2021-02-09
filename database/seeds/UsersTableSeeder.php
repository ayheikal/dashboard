<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole=Role::where('name','admin')->first();
        $authorRole=Role::where('name','author')->first();
        $userRole=Role::where('name','user')->first();

        $admin=User::create([
            'name'=>'Admin User',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('123456789'),
        ]);

        $author=User::create([
            'name'=>'author User',
            'email'=>'author@author.com',
            'password'=>bcrypt('123456789'),
        ]);

        $user=User::create([
            'name'=>'user User',
            'email'=>'user@user.com',
            'password'=>bcrypt('123456789'),
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

    }
}
