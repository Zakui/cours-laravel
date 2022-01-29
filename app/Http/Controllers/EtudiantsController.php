<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $etudiants = DB::select('select * from etudiants');
        return view('etudiants.index', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('etudiants.create');
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
        $prenoms = $request->input('prenoms');
        $nom = $request->input('nom');
        $age = $request->input('age');
        $adresse = $request->input('adresse');

        DB::insert('insert into etudiants (prenoms, nom, age, adresse, note_1, note_2) values (?, ?, ?, ?, ?, ?)', [$prenoms, $nom, $age, $adresse, 14, 17]);

        return redirect()->route('etudiants.index');
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
        // $etudiant = DB::select('select * from etudiants where id=?',[$id]);
        $etudiant = DB::table('etudiants')->find($id);
        return view('etudiants.show', ['etudiant' => $etudiant]);
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
        $etudiant = DB::table('etudiants')->find($id);
        return view('etudiants.edit', ['etudiant' => $etudiant]);
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
        var_dump($id);
        die();
        $prenoms = $request->input('prenoms');
        $nom = $request->input('nom');
        $age = $request->input('age');
        $adresse = $request->input('adresse');

        DB::update('update etudiants set (prenoms, nom, age, adresse, note_1, note_2) values (?, ?, ?, ?, ?, ?) where id=?', [$prenoms, $nom, $age, $adresse, 14, 17, $id]);

        return redirect()->route('etudiants.index');
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
