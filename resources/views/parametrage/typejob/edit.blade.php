@extends("layouts.app")

@section("content")

    <form action="{{ route("sexe.update", $sexe) }}" method="post">
        @csrf
        @method("put")
        <label for="libelle">Sexe</label>
        <input type="text" id="libelle" name="libelle" class="form-control" value="{{ $sexe->libelle }}">

        <a href="{{ route("sexe.index") }}" class="btn btn-danger">Annuler</a>
        <button class="btn btn-primary">Valider</button>
    </form>

@endsection
