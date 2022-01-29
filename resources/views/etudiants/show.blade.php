@extends('base')

@section('body')
    <h2>{{$etudiant->prenoms}} {{$etudiant->nom}}</h2>

    <p>Age : {{$etudiant->age}}</p>
    <p>Adresse : {{$etudiant->adresse}}</p>
@endsection
