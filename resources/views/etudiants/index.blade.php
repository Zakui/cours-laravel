<div class="container">
    <h2>Liste des etudiants</h2>

    <ul>
        @foreach ($etudiants as $etudiant)
            <li>
                <a href="{{route('etudiants.edit', $etudiant->id)}}">
                    {{$etudiant->prenoms}} -> {{$etudiant->nom}}
                </a>
            </li>
        @endforeach
    </ul>
</div>
