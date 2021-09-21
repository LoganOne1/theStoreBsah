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
    $role_user = Role::where('name', 'user')->first();
    $role_admin = Role::where('name', 'admin')->first();

    $user = new User();
    $user->name = 'User';
    $user->nick = 'User';
    $user->first_surname = 'Primer';
    $user->second_surname = 'Segundo';
    $user->genre = 'Hombre';
    $user->cell_phone = 272722273;
    $user->status = 1;
    $user->email = 'user@example.com';
    $user->password = bcrypt('secret');
    $user->save();
    $user->roles()->attach($role_user);

    $user = new User();
    $user->name = 'Admin';
    $user->nick = 'User';
    $user->first_surname = 'Primer';
    $user->second_surname = 'Segundo';
    $user->genre = 'Hombre';
    $user->cell_phone = 272722273;
    $user->status = 1;
    $user->email = 'admin@example.com';
    $user->password = bcrypt('secret');
    $user->save();
    $user->roles()->attach($role_admin);
  }
}
