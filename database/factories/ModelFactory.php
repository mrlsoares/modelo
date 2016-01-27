<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Entities\Config::class,function(Faker\Generator $faker){
    return [
        'palavras_chave'=>$faker->words,
        'titulo'=>$faker->word,
        'fan_page'=>$faker->url,
        'facebook'=>$faker->url,
        'twitter'=>$faker->url,
        'skype'=>$faker->word,
        'lkdn'=>$faker->url,
        'fone'=>$faker->phoneNumber,
        'endereco'=>$faker->words,
        'email'=>$faker->email
    ];
});

$factory->define(App\Entities\Principal::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->word,
        'conteudo' => $faker->paragraphs,
    ];
});

$factory->define(App\Entities\Album::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->word,
        'capa' => $faker->word,
    ];
});