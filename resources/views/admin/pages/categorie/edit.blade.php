@extends('admin/layouts.base')



@section('content')
<section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material" style="" method="POST" action="{{route('categorie.update', $categorie)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Modifier une categorie</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="libelle" class="form-control" required="" value="{{$categorie->libelle}}" >
                                        <span class="form-bar"></span>
                                        <label class="float-label">LIBELLE</label>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="text" name="description" class="form-control" required="" value="{{$categorie->description}}" >
                                        <span class="form-bar"></span>
                                        <label class="float-label">DESCRPTION</label>
                                    </div>


                                    <div class="row m-t-30">
                                        <div class="col-md-4" style="margin-left:150px;">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">MODIFIER</button>
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