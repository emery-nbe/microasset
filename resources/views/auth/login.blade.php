@extends("layout.app")

@section('title', 'MicroAsset | Se connecter')

@section('content')

<!-- Checkout Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Se Connecter</span></h5>
            <div class="bg-light p-30 mb-5">
                <form action="{{route('login-post')}}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-8">
                            @if(Session::has('auth-error'))
                                <div class="alert alert-danger">
                                    {{Session::get('auth-error') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8 form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" placeholder="email" name="email">
                        </div>
                        <div class="col-md-8 form-group">
                            <label>Mot de passe</label>
                            <input class="form-control" type="password" placeholder="password" name="password">
                        </div>

                        <div class="col-md-8 form-group">
                            <button class="btn btn-primary">Se connecter</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
@endsection
