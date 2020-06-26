<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return Response::json(['subjects'=>$subjects]);
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
        $lala=$request->subject;
        //return Response::json(['message'=>$lala]);
        $subject = Subject::create([
            'subject'=>strtoupper($request->subject)
        ]);
        if($subject){
            return Response::json(['message'=>'Subject was successfully created','subject'=>$subject]);
        }
        return Response::json(['message'=>'Ooops an error occured']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->update($request->all());
        return Response::json(['message'=>'Subject updated successfully','newsubject'=>$subject]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject= Subject::find($id);
        $status = $subject->delete();
        if($status){
            return Response::json(['message'=>'Subject Deleted successfully']);
        }
        Response::json(['message'=>'An error occured']);
    }
}
