@extends('admin/layouts.base')

@section('content')


<!-- Page-header end -->
<div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!--  project and team member start -->
                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-header text-center">
                                    <h5 class="">BILAN</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Bilan</th>
                                                <th>Commandes</th>
                                                <th>Livraisons</th>
                                                <th class="text-right">TOTAL</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>En Attentes</td>
                                                <td>{{commande()}}</td>
                                                <td>{{livres()}}</td>
                                                <td class="text-right"><label class="label label-danger">{{commande() + livres() }}</label></td>
                                            </tr>
                                            <tr>
                                                <td>En Cours</td>
                                                <td>{{comma()}}</td>
                                                <td>{{livres()}}</td>
                                                <td class="text-right"><label class="label label-primary">{{comma() + livres() }}</label></td>
                                            </tr>
                                            <tr>
                                                <td>Traitées</td>
                                                <td>{{comme()}}</td>
                                                <td>{{livre()}}</td>
                                                <td class="text-right"><label class="label label-success">{{comme() + livre() }}</label></td>
                                            </tr>
                                            <tr>
                                                <td><h5>TOTAL</h5></td>
                                                <td ><label class="label label-inverse">{{commande() + comma() + comme() }}</label></td>
                                                <td ><label class="label label-inverse">{{livres() + livres() + livre() }}</label></td>
                                                <td class="text-right"><label class="label label-primary">{{commande() + comma() + comme() + livres() + livres() + livre()  }}</label></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-4 col-md-12">
                            <div class="card ">
                                <div class="card-header">
                                    <h5>Team Members</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-trash close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="align-middle m-b-30">
                                        <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>David Jones</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                    <div class="align-middle m-b-30">
                                        <img src="assets/images/avatar-1.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>David Jones</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                    <div class="align-middle m-b-30">
                                        <img src="assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>David Jones</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                    <div class="align-middle m-b-30">
                                        <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>David Jones</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                    <div class="align-middle m-b-10">
                                        <img src="assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>David Jones</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--  project and team member end -->
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
</div>

@endsection