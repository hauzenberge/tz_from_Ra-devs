s<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\School::create([
            'name' => 'TestSchool', 
            'email' => 'test@admin.com',
            'website' => 'https://ru.lipsum.com/', 
            'logo' => 'public/logos/background-material-design-for-lorem-ipsum-logo-png_87814.jpg',
        ]);
    }
}
