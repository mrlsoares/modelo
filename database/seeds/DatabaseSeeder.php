<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


       // $this->call(AlbumTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(PrincipalTableSeeder::class);
        $this->call(UserTableSeeder::class);

      /*  factory('App\Entities\Principal')->create(
            [       'id'=>1,
                'titulo' => 'Inicio',
                'conteudo' => 'Página em Construção'
            ]
        );
        factory('App\Entities\Principal')->create(
            [       'id'=>2,
                'titulo' => 'Localização',
                'conteudo' => 'Página em Construção'
            ]
        );
        factory('App\Entities\Principal')->create(
            [
                'id'=>3,
                'titulo' => 'A Empresa',
                'conteudo' => 'Página em Construção'
            ]
        );*/



        Model::reguard();
    }
}
