@extends("layout.app")

@section('title', 'MicroAsset | Enregistrement')

@section('content')

<!-- Checkout Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">S'enregistrer</span></h5>
            <div class="bg-light p-30 mb-5">
                <form action="{{route('register-store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label>Prénom</label>
                            <input class="form-control" type="text" placeholder="Prénom" name="firstname">
                        </div>
                        <div class="col-md-8 form-group">
                            <label>Nom</label>
                            <input class="form-control" type="text" placeholder="Nom" name="name">
                        </div>
                        <div class="col-md-8 form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" placeholder="email" name="email">
                        </div>
                        <div class="col-md-8 form-group">
                            <label>Type de compte</label>
                            <select name="" id="" class="form-control">
                                <option value="client">Client</option>
                                <option value="marchand">Marchand</option>
                            </select>
                        </div>
                        <div class="col-md-8 form-group">
                            <label>Mot de passe</label>
                            <input class="form-control" type="password" placeholder="password" name="password">
                        </div>
                        <div class="col-md-8 form-group">
                            <label>Confirmer le mot de passe</label>
                            <input class="form-control" type="password" placeholder="password" name="password">
                        </div>

                        <div class="col-md-8 form-group">
                            <button class="btn btn-primary">S'enregister</button>
                        </div>
                    </div>
                </form>
            </div>



        </div>
    </div>
</div>
@endsection
