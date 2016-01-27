<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Entities\Config::truncate();
        factory(\App\Entities\Config::class)->create(
            [
                'palavras_chave'=>'Fotos, foto, ',
                'titulo'=>'Colt Photos',
                'fan_page'=>'http://',
                'facebook'=>'http://',
                'twitter'=>'http://',
                'skype'=>'skypebr',
                'lkdn'=>'http://',
                'fone'=>'54 9999-9999',
                'endereco'=>'Rua dos ...',
                'email'=>'contato@coltphotos.com.br'
            ]
        );
    }
}
