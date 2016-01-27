<?php

namespace App\Http\Controllers;

use App\Repositories\PrincipalRepository;
use App\Services\PrincipalService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    /**
     * @var PrincipalRepository
     */
    private $repository;
    /**
     * @var PrincipalService
     */
    private $service;

    /**
     * @param PrincipalRepository $repository
     * @param PrincipalService $service
     */
    public function __construct(PrincipalRepository $repository,PrincipalService $service)
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
        return $this->repository->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $principal=$this->repository->find($id);
        return view('admin.principal.edit',compact('principal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $principal=$this->repository->find($id);
        return view('admin.principal.edit',compact('principal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $principal=$this->service->update($request->all(),$id);
        return view('admin.principal.edit',compact('principal'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->repository->find($id)->delete;
    }
}
