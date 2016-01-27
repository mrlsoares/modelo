<?php

Route::get('/', ['as'=>'home','uses'=>'HomeController@index']);
Route::get('/home/{id}', ['as'=>'principal','uses'=>'HomeController@principal']);
Route::get('/contato', ['as'=>'contato','uses'=>'HomeController@contato']);
Route::post('/contato', ['as'=>'contato','uses'=>'HomeController@enviaOrcamento']);

Route::group(['prefix'=>'album','where'=>['id'=>'[0-9]+']],function()
{
    Route::get('/', ['as'=>'album','uses'=>'HomeController@album']);
    Route::get('{id}/galeria', ['as'=>'albuns.galeria','uses'=>'HomeController@galeria']);
});



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
/*
Route::group(['prefix'=>'produtos','where'=>['id'=>'[0-9]+']],function(){
    Route::get('', ['as'=>'produtos','uses'=>'ProdutoController@index']);
    Route::get('create',['as'=>'produtos.create','uses'=> 'ProdutoController@create']);
    Route::get('{id}/destroy',['as'=>'produtos.destroy','uses'=> 'ProdutoController@destroy']);
    Route::get('{id}/edit',['as'=>'produtos.edit','uses'=> 'ProdutoController@edit']);

    Route::put('{id}/update',['as'=>'produtos.update','uses'=> 'ProdutoController@update']);
    Route::post('store',['as'=>'produtos.store','uses'=> 'ProdutoController@store']);
});*/
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/', function () {
        return view('admin.home');
    });
    Route::get('/home', function () {
        return view('admin.home');
    });

    Route::group(['prefix'=>'config'],function(){
        //
        Route::get('{id}/edit',['as'=>'admin.config.edit','uses'=> 'ConfigController@edit']);
        Route::put('{id}/update',['as'=>'admin.config.update','uses'=> 'ConfigController@update']);
        //echo "passou aqui";
        //Route::get('{id}/edit', 'ConfigController@edit');
    });
    Route::group(['prefix'=>'principal'],function(){
        //
        Route::get('{id}/edit',['as'=>'admin.principal.edit','uses'=> 'PrincipalController@edit']);
        Route::put('{id}/update',['as'=>'admin.principal.update','uses'=> 'PrincipalController@update']);
        //echo "passou aqui";
        //Route::get('{id}/edit', 'ConfigController@edit');
    });
    Route::group(['prefix'=>'albuns'],function(){
        Route::get('',  ['as'=>'admin.albuns.index','uses'=> 'AlbumController@index']);
        Route::get('create',['as'=>'admin.albuns.create','uses'=> 'AlbumController@create']);
        Route::get('{id}/edit',  ['as'=>'admin.albuns.edit','uses'=> 'AlbumController@edit']);
        Route::get('{id}/delete',['as'=>'admin.albuns.destroy','uses'=> 'AlbumController@destroy']);


        Route::put('{id}/update',['as'=>'admin.albuns.update','uses'=> 'AlbumController@update']);
        Route::post('store',     ['as'=>'admin.albuns.store','uses'=> 'AlbumController@store']);


        //Route::get('{id}/galeria',['as'=>'admin.albuns.galeria','uses'=> 'AlbumController@galeria']);
        //Route::post('{id}/galeria/upload',['as'=>'admin.albuns.galeria.upload','uses'=> 'AlbumController@upload']);

        Route::get('{id}/galeria',['as'=>'admin.albuns.galeria','uses'=> 'UploadController@index']);
        Route::post('{id}/galeria/upload',['as'=>'admin.albuns.galeria.store','uses'=> 'UploadController@store']);
        Route::get('{id}/galeria/{arquivo}/delete',['as'=>'admin.albuns.galeria.destroy','uses'=> 'UploadController@destroy']);

    });
});
