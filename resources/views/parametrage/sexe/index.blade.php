@extends("layouts.navigate")

@section("table-wrapper")

    <h6 class="mb-0 text-uppercase">Liste {{ $title }}</h6>
    <hr/>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route("sexe.create") }}">Ajouter</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="">Libelle</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sexes as $sexe)
                        <tr style="color: @if($sexe->active == 1) lightgreen @else indianred @endif" >
                            <td>{{ $sexe->libelle }}</td>
                            <td class="fit" data-url="{{ route("sexe.statut", $sexe) }}">
                                <a href="{{ route("sexe.show", $sexe) }}" class="btn btn-secondary"><span class="fa fa-eye"></span></a>
                                <a href="{{ route("sexe.edit", $sexe) }}" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
                                @if($sexe->active == 1)
                                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger mr-sm-2"
                                            onclick="confirmAction(this)">
                                        <span class="fa fa-ban"></span>
                                    </button>
                                @else
                                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-success mr-sm-2"
                                            onclick="confirmAction(this)">
                                        <span class="fa fa-check"></span>
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>



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

