<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use App\Models\Planet;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $superherois = Superhero::paginate(5);
        return view('superheroes.index', compact('superherois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $planetes = Planet::all();
        return view('superheroes.new', compact('planetes'));
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
        $request->validate(
            ['realname' => 'required | min:3',
            'heroname' => 'required | min:3 | unique:superheroes']
        );

        $superhero = new Superhero;
        $superhero->realname = $request->realname;
        $superhero->heroname = $request->heroname;
        $superhero->gender = $request->gender;
        $superhero->planet_id = $request->planet_id;
        $superhero->save();

        return redirect('/superheroes');
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
        $superheroi = Superhero::findOrFail($id);
        $planetes = Planet::all();
        return view('superheroes.update',compact('superheroi','planetes'));
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
        $request->validate(
            ['realname' => 'required | min:3',
            'heroname' => 'required | min:3 | unique:superheroes,heroname,'.$id]
        );

        
        $superheroi = Superhero::findOrFail($id);
        $superheroi->realname = $request->realname;
        $superheroi->heroname = $request->heroname;
        $superheroi->gender = $request->gender;
        $superheroi->planet_id = $request->planet_id;
        $superheroi->save();

        return redirect('/superheroes');
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
        $superheroi = Superhero::findOrFail($id);
        $superheroi->delete();

        return redirect('/superheroes');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }    
}
