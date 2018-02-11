<?php

use App\Student;
use App\Topic;
use App\User;
use Illuminate\Database\Seeder;
use Keygen\Keygen;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('secret'),
        ]);

        $keygen = new Keygen();

        factory(Student::class)->times(10)->create();

        factory(Topic::class)->create([
            'code' => $keygen->length(5)->numeric()->generate(),
            'name' => 'Lic. En Mercadotecnia',
        ]);
        factory(Topic::class)->create([
            'code' => $keygen->length(5)->numeric()->generate(),
            'name' => 'Lic. En Pedagogía',
        ]);
        factory(Topic::class)->create([
            'code' => $keygen->length(5)->numeric()->generate(),
            'name' => 'Lic. En Administración',
        ]);
        factory(Topic::class)->create([
            'code' => $keygen->length(5)->numeric()->generate(),
            'name' => 'Lic. En Comercio y Negocios Internacionales',
        ]);
    }
}
