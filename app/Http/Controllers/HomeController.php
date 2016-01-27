<?php

namespace App\Http\Controllers;

use App\Entities\Album;
use App\Entities\Config;
use App\Entities\Principal;
use App\Repositories\AlbumRepository;
use App\Validators\OrcamentoValidator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Prettus\Validator\Exceptions\ValidatorException;
class HomeController extends Controller
{
    /**
     * @var AlbumRepository
     */
    private $repository;


    public function index()
    {
        $config=Config::find(1);
        $principal= Principal::find(1);
        return view('home',['config'=>$config,'principal'=>$principal]);
    }
	public function principal($id)
    {

        if($id >= 4 or $id <2)
        {
            //return redirect()->action('HomeController@index');
            return redirect()->action('HomeController@index');
        }
        $config=Config::find(1);
        $principal= Principal::find($id);
        return view('principal',['config'=>$config,'principal'=>$principal]);
    }
	public function contato()
    {
        $config=Config::find(1);
        $mensagem=null;
        return view('contato',['config'=>$config,'mensagem'=>$mensagem]);
    }
    public function enviaOrcamento(Request $request)
    {
        $config=Config::find(1);
        $mensagem=null;
        $data=$request->all();

        if(isset($_POST['orcamento']))
        {
            $info=array('nome'=>$data['nome'],
                'email'=>$data['email'],
                'mensagem'=>$data['mensagem'],
                'telefone'=>$data['telefone']
            );
            //dd($data);
            $fromEmail='orcamento@mesclafotocabine.com.br';
            $fromName='Orçamento';
            Mail::send('emails.contato',$data,function($message) use ($fromEmail,$fromName){
                $message->to('robertinha.stefani@hotmail.com','Roberta')->cc('contato@mesclafotocabine.com.br','Roberta');
                $message->from($fromEmail,$fromName);
                $message->subject('Orçamento Site Mesca Foto Cabine');
            });
           $nome_=ucwords(strtolower($data['nome']));
            $mensagem="<div class='alert alert-success text-info'>Mensagem Enviada com sucesso.&nbsp;&nbsp;&nbsp;&nbsp;<br/><b>{$nome_}</b> </div>";
        }
        return view('contato',['config'=>$config,'mensagem'=>$mensagem]);
    }

	public function album()
    {
        $config=Config::find(1);
        $produtos= Album::paginate(15);
       // dd($produtos);

        return view('album',['config'=>$config,'produtos'=>$produtos]);
    }
	public function galeria($id)
    {
        $config=Config::find(1);

        $imagens=array();


        $path = base_path('public/albuns/'.$id);
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
    //dd($imagens);
        $produto= ['id'=>$id];

        // dd($imagens);
        //	return view('admin.galeria.index',['config'=>$config,'imagens'=>$imagens]);
        return view('galeria',['config'=>$config,'imagens'=>$imagens,'produto'=>$produto]);
    }
}
