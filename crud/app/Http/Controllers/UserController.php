<?php

namespace App\Http\Controllers;

use App\User;
use App\Internaute;
use App\Charts\UserChart;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intField = Internaute::orderBy('age','desc')->pluck('firstname','age');
        $chart2 = new UserChart;
        $chart2->labels($intField->values());
        $chart2->title('Internautes');
        $chart2->dataset('Graphe Internaute-Age', 'bar', $intField->keys())
        ->backgroundColor('#03a9f4c4')->color('#212529')->fill(false)->lineTension(0.4)->dashed([10,10]);
        
        $fields = User::orderBy('age','desc')->pluck('age','name');
        $chart = new UserChart;
        $chart->labels($fields->keys())->title('Utilisateur');
        $chart->dataset('Graphe Utilisateur-Age', 'bar', $fields->values())
        ->backgroundColor('#fa4682');
        
        return view('chart',compact('users','chart2','chart'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
