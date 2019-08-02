<?php

use Illuminate\Database\Seeder;

class municipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cities = [  "Unknown",
                    "Gjilan",
                    "Decan",
                    "Pristina",
                    "Gjakova",
                    "Lipjan",
                    "Dragash",
                    "Vushtrri",
                    "Ferizaj",
                    "Prizren",
                     "Fushe Kosove",
                     "Peja",
                     "Kamenica",
                     "Mitrovica",
                     "Rahovec",
                     "Gracanice",
                     "Klina",
                     "Kacanik",
                     "Istog",
                     "Hani i Elezit",
                     "Obilic",
                     "Junik",
                     "Malisheve",
                     "Leposaviq",
                     "Shtime",
                     "Skenderaj",
                     "Novo Brdo",
                     "Podujevo",
                     "Viti",
                     "Shtrpce",
                     "Zubin Potok",
                     "Zvecan"
      ];

      foreach($cities as $city){
          DB::table('municipalities')->insert([
              'municipality' => $city
          ]);
      }
    }
}
