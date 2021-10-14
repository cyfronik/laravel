<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Roles;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role1 = Roles::where('name', 'Admin')->first();
      $role2 = Roles::where('name', 'Moderator')->first();
      $role3 = Roles::where('name', 'User')->first();

      $user = new User();
      $user->name = 'user1';
      $user->email = 'user1@user.com';
      $user->password = bcrypt('qwe123');
      $user->save();
      $user->roles()->attach($role1);

      $user = new User();
      $user->name = 'user2';
      $user->email = 'user2@user.com';
      $user->password = bcrypt('qwe123');
      $user->save();
      $user->roles()->attach($role2);

      $user = new User();
      $user->name = 'user3';
      $user->email = 'user3@user.com';
      $user->password = bcrypt('qwe123');
      $user->save();
      $user->roles()->attach($role3);
    }
}
