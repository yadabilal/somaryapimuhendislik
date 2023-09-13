<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $user['name'] = 'Süper';
      $user['surname'] = 'Admin';
      $user['username'] = 'birkitapbul';
      $user['password'] = \App\User::hash_pasword('142223Yada.');
      $user['type'] = \App\User::TYPE_ADMIN;
      $user['identify_verified_at'] = \Carbon\Carbon::now();
      $user['phone_verified_at'] = \Carbon\Carbon::now();
      $user['status'] = \App\User::STATUS_COMPLETED;
      
      \App\User::create($user);
      
      foreach (\App\Model\Category::default_list() as $name) {
        \App\Model\Category::create(['name' => $name]);
      }
      foreach (\App\Model\City::default_list() as $city) {
        $model = \App\Model\City::create(['name' => $city['title']]);
        foreach ($city['districts'] as $town) {
          \App\Model\Town::create(['name' => $town, 'city_id' => $model->id]);
        }
      }
      foreach (\App\Model\Permission::default_list() as $key => $value) {
        $perrmission['type'] = \App\Model\Permission::TYPE_BOTH;
        $perrmission['title'] = $key;
        $perrmission['description'] = $value;
        \App\Model\Permission::create($perrmission);
      }
      foreach (\App\Model\Setting::default_list() as $data) {
        \App\Model\Setting::create($data);
      }
    }
}
