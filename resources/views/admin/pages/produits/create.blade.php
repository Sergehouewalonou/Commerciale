@extends('admin/layouts.base')



@section('content')
<section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material" style="" method="POST" action="{{route('produits.store')}}" enctype="multipart/form-data">
                           @csrf
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Ajouter un Produits</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="nom" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Nom</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="description" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Description</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="prix" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Prix</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="nomber" name="quantite" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Quantité</label>
                                    </div>

                                    <div class="form-group form-primary">
                                        <select name="categorie_id"  >
                                            <option value="" placeholder="type">Ctegorie</option>
                                            @foreach($cates as $cate)
                                                <option value="{{$cate->id}}">{{$cate->libelle}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group form-primary">
                                        <select name="fournisseur_id" >
                                            <option value="" placeholder="type">Fournisseur</option>
                                            @foreach($fours as $four)
                                                <option value="{{$four->id}}">{{$four->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row m-t-30">
                                        <div class="col-md-4" style="margin-left:150px;">
                                            <button type="Submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Ajouter</button>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
@endsection