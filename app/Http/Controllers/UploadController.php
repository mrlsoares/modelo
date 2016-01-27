<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UploadController extends Controller
{
    public function index($id)
    {
        $imagens=array();
        $path = base_path('public_html/albuns/'.$id);

        if(file_exists($path))
        {
            $diretorio = dir($path);

            while($arquivo = $diretorio -> read())
            {
                if(is_file($path.'/'.$arquivo))
                {
                    $imagens[]= $arquivo;
                }

            }
            $diretorio -> close();
        }

        $album= ['id'=>$id];//Produto::find($id);

        // dd($imagens);
        return view('admin.album.galeria',['album'=>$album,'imagens'=>$imagens]);
    }
    public function store(Request $request)
    {
        $input = $request->all();
//echo $input['produto_id'];
        $diretorio=base_path('public_html/albuns/'.$input['album_id']);
        if (!file_exists($diretorio))
        {
            mkdir($diretorio);
        }
        //dd($input);
        // getting all of the post data
        $files = Input::file('images');
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        foreach($files as $file) {
            $rules = array('file' => 'required|mimes:png,gif,jpeg,bmp'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $validator = Validator::make(array('file'=> $file), $rules);
            if($validator->passes()){
                $destinationPath = 'uploads';
                $filename = $input['album_id'].'_'.$file->getClientOriginalName();
                $upload_success = $file->move($diretorio, $filename);
                $uploadcount ++;
            }
        }
        if($uploadcount == $file_count)
        {
            Session::flash('success', 'Upload successfully');
            return redirect()->action('UploadController@index',['id'=>$input['album_id']]);//Redirect::to('produtos.galeria');
        }
        else {
            return redirect()->action('UploadController@index',['id'=>$input['album_id']])->withInput()->withErrors($validator);
        }


    }
    public function destroy($id,$arquivo)
    {
        $path=base_path("public_html/albuns/{$id}/{$arquivo}");
        unlink($path);
        return redirect()->action('UploadController@index',['id'=>$id]);
    }
}
