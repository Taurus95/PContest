<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            "Astrofotografía"
            , "Desnudo masculino en la fotografía"
            , "Femptofotografía"
            , "Fisiograma"
            , "Fotografía academicista"
            , "Fotografía aérea y orbital"
            , "Fotografía antropológica"
            , "Fotografía arquitectónica"
            , "Fotografía callejera"
            , "Fotografía de alimentos"
            , "Fotografía de autor"
            , "Fotografía de Bellas Artes"
            , "Fotografía de naturaleza"
            , "Fotografía de paisaje"
            , "Fotografía glamour"
            , "Fotografía humanista"
            , "Fotografía in-game"
            , "Fotografía infrarroja"
            , "Fotografía minutera"
            , "Fotografía post mortem"
            , "Fotografía publicitaria"
            , "Fotografía sociodocumental"
            , "Fotografía surrealista"
            , "Fotomontaje"
            , "Hyperlapse"
            , "Fotografía de guerra"
            , "Light Painting"
            , "Lolcat"
            , "Macrofotografía"
            , "Micrografía"
            , "Fotografía de modas"
            , "Planking"
            , "Realismo en fotografía"
            , "Retrato fotográfico"
            , "Fotografía social"
            , "Star trail"
        ];

        foreach ($list as $value) {
            DB::table('categories')->insert([
                'name' => $value,
                'description' => Str::random(30),
            ]);
        }
    }
}
