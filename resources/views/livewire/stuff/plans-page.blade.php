<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Plans</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"> <a href="{{ route('stuff.home') }}">Dashboard</a> </li>
                        <li class="breadcrumb-item active">Plans</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Tous les plans
                    </h4>
                    <div class="row mb-4">
                        <div class="col-10">
                            <a href="#" class="btn btn-primary waves-effect waves-light">
                                <i class="feather-plus"></i> Nouvelle entrée
                            </a>
                            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                <i class="feather-download"></i> Exporter un plan
                            </button>
                            <a href="#" class="btn btn-success waves-effect waves-light"> <i
                                    class="feather-upload"></i> Importer CSV
                            </a>
                        </div>
                        <div class="col-2">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Rechercher">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Montant</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 10; $i++)
                                            <tr>
                                                <td>{{ $i + 1 }}</td>
                                                <td class="text-center">PLAN RABAT V{{ $i + 1 }}</td>
                                                <td class="text-center">{{ $i + 1 }}</td>
                                                <td class="text-center">{{ $i + 1 }}</td>
                                                <td class="text-center">{{ $i + 1 }}</td>
                                                <td class="text-center">{{ $i + 1 }}</td>
                                                <td class="text-center">
                                                    <a href="" class="btn btn-warning btn-sm"> <i
                                                            class="feather-edit"></i> </a>
                                                    <a href="" class="btn btn-danger btn-sm"> <i
                                                            class="feather-trash"></i> </a>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ajouter votre plan</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                        facilisis in, egestas
                        eget quam. Morbi leo risus</p>
                    <input type="file" class="dropify" data-max-file-size="1M" wire:model="file" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect waves-light"
                        data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Ajouter</button>
                </div>
            </div>
        </div>
    </div>
</div>
