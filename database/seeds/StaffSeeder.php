<?php

use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Staff::create([
            'first_name' => 'Lorem', 
            'last_name' => 'Ispum', 
            'school_id' => 1,
            'email' => 'test123@admin.com',
            'phone' => '+380682092340',
        ]);
    }
}
