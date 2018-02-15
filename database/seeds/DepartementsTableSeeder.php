<?php

use Illuminate\Database\Seeder;
use App\Models\Departement;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Departement::create([
        'nomDepartement' => 'Genie Informatique',
      ]);
            Departement::create([
        'nomDepartement' => 'Genie Civil',
      ]);
            Departement::create([
        'nomDepartement' => 'Genie Mecanique',
      ]);
            Departement::create([
        'nomDepartement' => 'Genie Electrique',
      ]);
            Departement::create([
        'nomDepartement' => 'Genie Chimique',
      ]);
            Departement::create([
        'nomDepartement' => 'Gestion',
      ]);
    }
}
