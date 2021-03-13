<?php

use Illuminate\Database\Seeder;
use App\Models\Clinic;
class ClinicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Clinic::class, 25)->create();
    }
}
