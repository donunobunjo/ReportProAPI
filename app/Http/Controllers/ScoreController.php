<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = Score::all();
        return Response::json(['scores'=>$scores]);
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
        $score= Score::create([
            'roll_num'=>$request->rollNumber,
            'fullname'=>$request->studentName,
            'session'=>$request->session,
            'term'=>$request->term,
            'class'=>$request->clas,
            'subject'=>$request->subject,
            'first_ca'=>$request->first_ca,
            'second_ca'=>$request->second_ca,
            'exam'=>$request->exam
        ]);
        if($score){
           return Response::json(['message'=>'Score created successfully','score'=>$score]);
        }
        return Response::json(['message'=>'Score was not created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $score=Score::find($id);
        $updated= $score->update($request->all());
        return Response::json(['message'=>'Score updated successfully','newscore'=>$updated]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $score=Score::find($id);
        $score->delete();
        return Response::json(['message'=>'Score deleted successfully']);
    }
}
