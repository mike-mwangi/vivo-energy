<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(RolesTableSeeder::class);
        
        $this->call(UsersTableSeeder::class);
        
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(VoyagerDummyDatabaseSeeder::class);
        $this->call(DataRowsTableSeeder::class);
   
        
    }
}
