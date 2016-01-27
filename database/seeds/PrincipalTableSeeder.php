<?php

use Illuminate\Database\Seeder;

class PrincipalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Entities\Principal::truncate();
        factory(App\Entities\Principal::class)->create(
            [       'id'=>1,
                'titulo' => 'Inicio',
                'conteudo' => 'Página em Construção'
            ]
        );
        factory(App\Entities\Principal::class)->create(
            [       'id'=>2,
                'titulo' => 'Localização',
                'conteudo' => 'Página em Construção'
            ]
        );
        factory(App\Entities\Principal::class)->create(
            [
                'id'=>3,
                'titulo' => 'A Empresa',
                'conteudo' => 'Página em Construção'
            ]
        );
    }
}
