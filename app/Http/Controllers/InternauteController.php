<?php

namespace App\Http\Controllers;

use App\Internaute;
use Illuminate\Http\Request;

class InternauteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // avant
        // $internautes = Internaute::paginate(5);
        // return view('liste',compact('internautes'));
        // api
        return collection(Internaute::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // verification des informations saisies par l'utilisateur
        request()->validate([
            'firstname' => ['required'],
            'email' => ['required','email','unique:internautes,email'],
            'name' => ['required'],
            'age' => ['required','max:3','min:1'],
        ]);

        // Creation de nouvel internaute 
        Internaute::create([
            'firstname' => $request->firstname,
            'email' => $request->email,
            'name' => $request->name,
            'age' => $request->age
        ]);

        if ($request->check) {
            // si check==true retourner au formulaire apres ajout pour nouvel ajout
            
            return redirect()->back()->withErrors(['msg'=>'Enregistrement Effectué!']);
            
        }else{
            // si check == false continuer vers index apres ajout
            return redirect()->route('index')->withErrors(['msg'=>'Enregistrement Effectué!']);
        }
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
        $internaute = Internaute::find($id);
        return view('edit',compact('internaute'));
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
        request()->validate([
            'firstname' => ['required'],
            'email' => ['required','email'],
            'name' => ['required'],
            'age' => ['required','max:3','min:1'],
        ]);

        Internaute::where('id', $id)->update([
            'firstname' => $request->firstname,
            'email' => $request->email,
            'name' => $request->name,
            'age' => $request->age
        ]);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Internaute::destroy($id);
        
        return redirect()->back();
        
    }



}
