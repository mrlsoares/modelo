<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Config extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable=['palavras_chave','titulo','fan_page','facebook','twitter','skype','lkdn','fone','endereco','email'];

}
