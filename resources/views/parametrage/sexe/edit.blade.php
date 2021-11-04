@extends("layouts.navigate")

@section("table-wrapper")

    <div class="col-xl-9 mx-auto">

        <h6 class="mb-0 text-uppercase">Détail {{ $title }}</h6>

        <hr>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form class="row" action="{{ route("sexe.update", $sexe) }}" method="post">
                        @csrf
                        @method("put")
                        <div class="col-sm-12">
                            <label for="libelle" class="form-label">Libellé</label>
                            <input type="text" id="libelle" name="libelle" class="form-control @error("libelle") is-invalid @enderror" required value="{{ $sexe->libelle }}">
                            @error("libelle") <div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>

                        <div class="col-12 mt-3">
                            <a href="{{ route("sexe.index") }}" class="btn btn-danger">Annuler</a>
                            <button class="btn btn-primary" type="submit">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
