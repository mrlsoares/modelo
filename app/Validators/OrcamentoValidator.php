<?php
/**
 * Created by PhpStorm.
 * User: mrlsoares
 * Date: 21/11/15
 * Time: 12:52
 */

namespace App\Validators;


use Prettus\Validator\LaravelValidator;

class OrcamentoValidator extends  LaravelValidator
{
    protected $rules=[
        'nome'=>'required',
        'email'=>'required|email'
   ];
}