@extends("layouts.app")

@section("content")

    <form action="{{ route("sexe.store") }}" method="post">
        @csrf
        <label for="libelle">Sexe</label>
        <input type="text" id="libelle" name="libelle" class="form-control">

        <button class="btn btn-primary">Valider</button>
    </form>

@endsection
