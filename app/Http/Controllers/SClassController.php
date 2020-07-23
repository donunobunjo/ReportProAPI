<?php

namespace App\Http\Controllers;

use App\SClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $classes = SClass::all();
        $classes=SClass::orderBy('class')->get();
        return Response::json(['classes'=>$classes]);
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
        $status = SClass::create([
            'class'=>$request->classs
        ]);
        if($status){
            return Response::json(['message'=>'Class created successfully','class'=>$status]);
        }
        return Response::json(['message'=>'Class could not be created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SClass  $sClass
     * @return \Illuminate\Http\Response
     */
    public function show(SClass $sClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SClass  $sClass
     * @return \Illuminate\Http\Response
     */
    public function edit(SClass $sClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SClass  $sClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $class = SClass::find($id);
        $status = $class->update($request->all());
        if ($status){
            return Response::json(['message'=>'class updated successfully','class'=>$status]);
        }
        return Response::json(['message'=>'class update was not successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SClass  $sClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(SClass $sClass)
    {
        //
    }
}
