@extends('base')

@section('body')

    <h2>Modifie etudiant</h2>

    <form action="{{route('etudiants.update', $etudiant->id)}}" method="put">
        @csrf
        <div class="form-group">
            <label for="prenoms">Prenoms</label>
            <input id="prenoms" class="form-control" name="prenoms" value="{{$etudiant->prenoms}}" type="text">
        </div>

        <div class="form-group">
            <label for="nom">Nom</label>
            <input id="nom" class="form-control" name="nom" value="{{$etudiant->nom}}" type="text">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input id="age" class="form-control" name="age" value="{{$etudiant->age}}" type="number">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <textarea id="adresse" class="form-control" name="adresse" >{{$etudiant->adresse}}</textarea>
        </div>

        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Modifie</button>
        </div>
    </form>
@endsection
