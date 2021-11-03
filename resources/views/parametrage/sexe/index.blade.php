@extends("layouts.app")

@section("content")

    <table class="table table-hover table-responsive table-bordered">
        <thead>
        <th>Libellé</th>
        <th>Actions</th>
        </thead>
        <tbody>
        @foreach($sexes as $sexe)
            <tr>
                <td>{{ $sexe->libelle }}</td>
                <td data-url="{{ route("sexe.statut", $sexe) }}">
                    <a href="{{ route("sexe.show", $sexe) }}" class="mr-sm-2">Voir</a>
                    <a href="{{ route("sexe.edit", $sexe) }}" class="mr-sm-2">Editer</a>
                    @if($sexe->active == 1)
                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mr-sm-2"
                        onclick="confirmAction(this)">
                            Désactiver
                        </button>
                    @else
                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mr-sm-2"
                                onclick="confirmAction(this)">
                            Activer
                        </button>
                    @endif
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="statutForm">
                    @csrf
                    @method("put")
                    <div class="modal-body">
                        <p>
                            Voulez-vous effectuer cette opération ?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Non</button>
                        <button class="btn btn-primary">Oui</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

