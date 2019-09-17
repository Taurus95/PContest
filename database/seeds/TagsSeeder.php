<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=[
            "Abajeño"
            , "Abajera"
            , "Abajo"
            , "Abalada"
            , "Abalanzar"
            , "Abalar"
            , "Abalaustrado"
            , "Abaldonadamente"
            , "Abaldonamiento"
            , "Abaldonar"
            , "Abaleador"
            , "Abaleadura"
            , "Abalear"
            , "Abaleo"
            , "Aballestar"
            , "Abalizamiento"
            , "Abalizar"
            , "Aballar"
            , "Abalorio"
            , "Abaluartar"
            , "Abañador"
            , "Abañadura"
            , "Abañar"
            , "Abancalar"
            , "Abanderado"
            , "Abanderamiento"
            , "Abanderar"
            , "Forzoso"
            , "Forzudamente"
            , "Forzudo"
            , "Fosa"
            , "Fosada"
            , "Fosado"
            , "Fosadura"
            , "Fosal"
            , "Fosar"
            , "Fosario"
            , "Fosco"
            , "Fosfatado"
            , "Fosfático"
            , "Fosfato"
            , "Fotoeléctrico"
            , "Fotofobia"
            , "Fotófobo"
            , "Fotogenia"
            , "Fotogénico"
            , "Fotograbado"
            , "Fotograbador"
            , "Fotograbar"
            , "Fotografía"
            , "Fotografiar"
            , "Fotográficamente"
            , "Fotográfico"
            , "Fotógrafo"
            , "Fotograma"
            , "Fotogrametría"
            , "Fotólisis"
            , "Fotolito"
            , "Inglaterra"
            , "Inglés"
            , "Ingreso en prisión"
            , "Inhalación"
            , "Iniciativa Legislativa Popular"
            , "Iniciativa Porteña"
            , "Iniciativa del Poble Valencià"
            , "Iniciativa popular"
            , "Iniciativa privada"
            , "Iniciatives Públiques Gandia"
            , "Iniesta"
            , "Injurias"
            , "Injusticia"
            , "Inma Amat"
            , "Inma Cuesta"
            , "Inmaculada"
            , "Inmaculada Gil Lázaro"
            , "Inmaculada Tomás"
            , "Inmersión"
            , "Inmersión lingüística"
            , "Inmersión lingüística"
            , "Inmigración"
            , "Inmigración"
            , "Estado físico"
            , "Estado puro"
            , "Estados Unidos"
            , "Estadounidenses"
            , "Estadística"
            , "Estadísticas"
            , "Estafa"
            , "Estafador"
            , "Estafas"
            , "Estambul"
        ];

        foreach ($list as $value) {
            DB::table('tags')->insert([
                'name' => $value,
                'description' => Str::random(30),
            ]);
        }
    }
}
