<div>
    <div class="row">

        <div class="col-xl-4">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="card-title">Plans</h4>
                            <div class="text-left">
                                <h3>15</h3>
                                <a href="#" class="btn btn-sm btn-light mt-2">Afficher tout</a>
                            </div>
                        </div>
                        <i class="d-flex feather-folder text-danger h1"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="card-title">Rapport</h4>
                            <div class="text-left">
                                <h3>15</h3>
                                <a href="#" class="btn btn-sm btn-light mt-2">Afficher tout</a>
                            </div>
                        </div>
                        <i class="d-flex feather-file text-success h1"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="card-title">Fiche de controle</h4>
                            <div class="text-left">
                                <h3>15</h3>
                                <a href="#" class="btn btn-sm btn-light mt-2">Afficher tout</a>
                            </div>
                        </div>
                        <i class="d-flex feather-copy text-warning h1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fiches de controle</h4>
                    <p class="card-subtitle mb-4 font-size-13">Transaction period from 21 July to 25 Aug</p>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th><h5 class="font-size-14 mb-0">Nom</h5></th>
                                    <th><h5 class="font-size-14 mb-0">Ville</h5></th>
                                    <th><h5 class="font-size-14 mb-0">Etat d'installation</h5></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 10; $i++)
                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">21 TARIK ALKHAYR 6 CODE
                                                12.1.16.338</h5>
                                            <span class="text-muted font-size-12">11 Fevrier 2019</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">Agadir</h5>
                                        </td>
                                        <td>
                                            <span class="badge badge-success p-2">Valide</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-success btn-sm">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="feather-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
    </div>
</div>
