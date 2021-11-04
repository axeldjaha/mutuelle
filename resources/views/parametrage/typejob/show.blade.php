@extends("layouts.app")

@section("content")

    <form>
        @csrf
        <label for="libelle">Sexe</label>
        <input type="text" id="libelle" name="libelle" class="form-control" value="{{ $sexe->libelle }}" disabled>

        <a href="{{ route("sexe.index") }}" class="btn btn-danger">Annuler</a>
    </form>

@endsection
