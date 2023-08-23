@extends('app')

@section("title","Giriş Yap")

@section('content')

<div class="container">
    <div class="row p-3">
        <div class="col-md-12 mx-auto  mt-5">
            <h1 class="text-center text-danger " style="font-size: 50px;"><b>FURKAN <br> EMLAK</b></h1>
        </div>
        <div class="col-md-6 mx-auto border border-secondary mt-5">
            <form action="{{route("user.register")}} " method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label ">E-Posta Adresi</label>
                    <input type="email" class="form-control " id="email" name="email"
                        required>
                </div>

                <div class="mb-3 mt-3">
                    <label for="username" class="form-label ">Kullanıcı Adı</label>
                    <input type="text" class="form-control " id="username"  name="username"
                        required>
                </div>

                <div class="mb-3">
                    <label for="pwd" class="form-label ">Şifre</label>
                    <input type="password" class="form-control " id="pwd"  name="password"
                        required>
                </div>

                <div class="mx-auto text-center">
                    <button type="submit" name="loginbtn" class="btn btn-danger mb-3 mt-3 fw-bold">
                        Kaydol ve Giriş Yap
                    </button>
                </div>
            </form>
            @if(isset($error))
                <div class="alert alert-danger">
                    <h6 class="text-center">{{ $error }}</h6>
                </div>
             @endif
        </div>
        <small class="text-center mt-2">Hesabınız Varmı? <a class="nav-link text-info" href="login">Giriş Yap</a> </small>
    </div>
</div>

@endsection