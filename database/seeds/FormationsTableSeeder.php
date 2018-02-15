<?php

use Illuminate\Database\Seeder;
use App\Models\Formation;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Formation::create([
        'codeFormation' => 'DIC1 Informatique',

        'departement_id' => 1,
      ]);
            Formation::create([
        'codeFormation' => 'DIC2 Informatique',

        'departement_id' => 1,
      ]);
            Formation::create([
        'codeFormation' => 'DIC3 Informatique',

        'departement_id' => 1,
      ]);
            Formation::create([
        'codeFormation' => 'DUT1 Informatique',

        'departement_id' => 1,
      ]);
            Formation::create([
        'codeFormation' => 'DUT2 Informatique',

        'departement_id' => 1,
      ]);

      //TR
              Formation::create([
          'codeFormation' => 'DIC1 Telecoms&Reseaux',

          'departement_id' => 1,
        ]);
              Formation::create([
          'codeFormation' => 'DIC2 Telecoms&Reseaux',

          'departement_id' => 1,
        ]);
              Formation::create([
          'codeFormation' => 'DIC3 Telecoms&Reseaux',

          'departement_id' => 1,
        ]);
              Formation::create([
          'codeFormation' => 'DUT1 Telecoms&Reseaux',

          'departement_id' => 1,
        ]);
              Formation::create([
          'codeFormation' => 'DUT2 Telecoms&Reseaux',

          'departement_id' => 1,
        ]);

        //civil
              Formation::create([
          'codeFormation' => 'DIC1 Civil',

          'departement_id' => 2,
        ]);
              Formation::create([
          'codeFormation' => 'DIC2 Civil',

          'departement_id' => 2,
        ]);
              Formation::create([
          'codeFormation' => 'DIC3 Civil',

          'departement_id' => 2,
        ]);
              Formation::create([
          'codeFormation' => 'DUT1 Civil',

          'departement_id' => 2,
        ]);
              Formation::create([
          'codeFormation' => 'DUT2 Civil',

          'departement_id' => 2,
        ]);

        //Mecanique
              Formation::create([
          'codeFormation' => 'DIC1 Mecanique',

          'departement_id' => 3,
        ]);
              Formation::create([
          'codeFormation' => 'DIC2 Mecanique',

          'departement_id' => 3,
        ]);
              Formation::create([
          'codeFormation' => 'DIC3 Mecanique',

          'departement_id' => 3,
        ]);
              Formation::create([
          'codeFormation' => 'DUT1 Mecanique',

          'departement_id' => 3,
        ]);
              Formation::create([
          'codeFormation' => 'DUT2 Mecanique',

          'departement_id' => 3,
        ]);


        //Electrique
              Formation::create([
          'codeFormation' => 'DIC1 Electrique',

          'departement_id' => 4,
        ]);
              Formation::create([
          'codeFormation' => 'DIC2 Electrique',

          'departement_id' => 4,
        ]);
              Formation::create([
          'codeFormation' => 'DIC3 Electrique',

          'departement_id' => 4,
        ]);
              Formation::create([
          'codeFormation' => 'DUT1 Electrique',

          'departement_id' => 4,
        ]);
              Formation::create([
          'codeFormation' => 'DUT2 Electrique',

          'departement_id' => 4,
        ]);

        //Genie Chimique

        //Gestion

    }
}
