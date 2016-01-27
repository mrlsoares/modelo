<?php

namespace App\Http\Controllers;

use App\Repositories\AlbumRepository;
use App\Services\AlbumService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

//use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    /**
     * @var AlbumRepository
     */
    private $repository;
    /**
     * @var AlbumService
     */
    private $service;

    /**
     * @param AlbumRepository $repository
     * @param AlbumService $service
     */
    public function __construct(AlbumRepository $repository, AlbumService $service)
    {

        $this->repository = $repository;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albuns= $this->repository->paginate(15);
       // dd($albuns);
        return view('admin.album.index',compact('albuns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->service->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $albuns=$this->repository->find($id);
        return view('admin.album.edit',compact('albuns'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album=$this->repository->find($id);
        //dd($albuns);
        return view('admin.album.edit',compact('album'));

    }


    public function update($id,Request $request)
    {
       $this->service->update($request,$id);
        return redirect()->action('AlbumController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $dados= $this->service->destroy($id);

        return redirect()->route('admin.albuns.index');
    }
    public function galeria($id)
    {
        $album=$this->repository->find($id);
        return view('admin.album.galeria',compact('album'));
    }
    public function upload(Request $request, $id)
    {
        $this->service->galeriaUpload($request,$id);
        return redirect()->route('admin.albuns.index');

    }
}
