<?php
namespace App\Services;
use App\Repositories\AlbumRepository;
use App\Validators\AlbumValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Prettus\Validator\Exceptions\ValidatorException;
/**
 * Created by PhpStorm.
 * User: mrlsoares
 * Date: 21/11/15
 * Time: 12:23
 */
class AlbumService
{
    /**
     * @var AlbumRepository
     */
    protected $repository;
    /**
     * @var AlbumValidator
     */
    private $validator;


    /**
     * @param AlbumRepository $repository
     * @param AlbumValidator $validator
     */
    public function __construct(AlbumRepository $repository, AlbumValidator $validator)
    {
        $this->repository=$repository;
        $this->validator = $validator;

    }
    public function create(Request $request)
    {
        try
        {
            $data=$request->all();
            $this->validator->with($data)->passesOrFail();
            $extensao=$request->file('capa')->getClientOriginalExtension();
            $caminho=base_path().'/public/albuns';
            $data['extensao']=$extensao;
            if($request->hasFile('capa'))
            {
                $dados=$this->repository->create($data);
                $diretorio=base_path('public/albuns/'.$dados->id);
                if (!file_exists($diretorio))
                {
                    mkdir($diretorio,0777);
                    chmod($diretorio,0777);
                }
                $nome_arquivo=$dados->id.'.'.$extensao;
                $request->file('capa')->move($caminho,$nome_arquivo);
                chmod($caminho.'/'.$nome_arquivo,0777);
                unset($diretorio);
                unset($caminho);
                unset($extensao);
            }
            return redirect()->action('AlbumController@index');
        }
        catch(ValidatorException $e)
        {
            return back()->withErrors( $this->validator->errors());
        }

    }
    public function update(Request $req,$id)
    {
        try
        {
            $data = $req->all();
            if($req->hasFile('capa'))
            {
                $extensao=$req->file('capa')->getClientOriginalExtension();
                $caminho=base_path().'/public/albuns';
                $data['extensao']=$extensao;
                $nome_arquivo=$id.'.'.$extensao;
                if(file_exists($caminho."/{$nome_arquivo}"))
                {
                    unlink($caminho."/{$nome_arquivo}");
                }
                $req->file('capa')->move($caminho,$nome_arquivo);
                chmod($caminho.'/'.$nome_arquivo,0777);
                unset($diretorio);
                unset($caminho);
                unset($extensao);
                unset($req);
            }
            return $this->repository->update($data,$id); //
        }
        catch(ValidatorException $e)
        {
            return back()->withErrors( $this->validator->errors());
        }
    }
    public function galeriaUpload(Request $request, $id)
    {
        try
        {
            $data = $request->all();
            if($request->hasFile('capa'))
            {

            }
            return $this->repository->update($data,$id); //
        }
        catch(ValidatorException $e)
        {
            return back()->withErrors( $this->validator->errors());
        }
    }
    public function destroy($id)
    {
        $path = base_path('public/albuns/'.$id);
        $dados=$this->repository->find($id);
        if($path.'.'.$dados->extensao)
        {
            unlink($path.'.'.$dados->extensao);
        }

        if(file_exists($path))
        {
            $diretorio = dir($path);
            while($arquivo = $diretorio -> read())
            {
                if(is_file($path.'/'.$arquivo))
                {
                    unlink($path.'/'.$arquivo);
                }

            }
            $diretorio ->close();
        }
        rmdir($path);
        return $this->repository->find($id)->delete();
    }
}