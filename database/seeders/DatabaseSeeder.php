<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      // \App\Models\User::factory(10)->create();

      User::create([
         'name' => 'Admin',
         'email' => 'admin@consulting.com',
         'email_verified_at' => now(),
         'password' => '$2y$10$xGme1b.sfGu0Hh8c33EDb.oLWsLW4Y51Eo8VkK6sJwykqUoSl5kWC', // syncore12345
         'remember_token' => Str::random(10),
      ]);

      Document::create([
         'name' => 'Silabus Koperasi Simpan Pinjam',
         'slug' => 'silabus-koperasi-simpan-panjam',
         'file_path' => '01-silabus-koperasi-simpan-pinjam.pdf'
      ]);
   }
}
