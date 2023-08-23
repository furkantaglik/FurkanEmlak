@extends('app')

@section("title","Admin Paneli")

@section('style')
     <style>
        body {
            background-image: url("/images/admin.gif");
    
            background-size: 100%;
    
        }
    </style>
@endsection

@section('content')
<div class="container">
    @if (isset( $ilanlar))
        <form action=" {{route("admin.edit")}} " class="row pt-5" method="post" enctype="multipart/form-data">
    @else
        <form action=" {{route("admin.create")}} " class="row pt-5" method="post" enctype="multipart/form-data">  
    @endif
        @csrf
        <nav class="navbar">
            <a href="{{route("admin")}}" class="navbar-brand fw-bold text-light text-start"><i class="bi bi-arrow-left-circle-fill"> Geri Dön</i></a>
            <a href="{{route("home")}}" class="navbar-brand fw-bold text-light text-end">AnaSayfa <i class="bi bi-arrow-right-circle-fill"></i></a>
        </nav>

        <!-- 1 ALAN -->
        <div class="col-lg-4  p-3 text-center mx-auto">
            <div class="kategorialani">
                <h5 class="text-info">Kategori Seçin</h5>
                <input type="radio" class="btn-check" name="kategorioptions" id="satilik" autocomplete="off"
                    value="Satılık">
                <label class="btn btn-outline-light" for="satilik">Satılık</label>

                <input type="radio" class="btn-check" name="kategorioptions" id="kiralik" autocomplete="off"
                    value="Kiralık">
                <label class="btn btn-outline-light" for="kiralik">Kiralık</label>
            </div>

            <hr>

            <div class="ilanturualani">
                <h5 class="text-info">İlan Türü</h5>
                <input type="radio" class="btn-check" name="ilanoptions" id="konut" autocomplete="off"
                    value="Konut">
                <label class="btn btn-outline-light" for="konut">Konut</label>

                <input type="radio" class="btn-check" name="ilanoptions" id="arsa" autocomplete="off" value="Arsa">
                <label class="btn btn-outline-light" for="arsa">Arsa</label>

                <input type="radio" class="btn-check" name="ilanoptions" id="isyeri" autocomplete="off"
                    value="İşyeri">
                <label class="btn btn-outline-light" for="isyeri">İşyeri</label>
            </div>

            <hr>

            <div class="konumalani">
                <h5 class="text-info">Konum Seçin</h5>
                <div>
                    <select name="il" id="il" class="my-3 border border-dark rounded p-2" style="width: 150px;">
                        <option style="background-color: black; color: white;" disabled selected>Bir Şehir Seçin..
                        </option>
                        <option value="İstanbul">İstanbul</option>
                        <option value="Ankara">Ankara</option>
                        <option value="İzmir">İzmir</option>
                        <option value="Antalya">Antalya</option>
                        <option value="Eskişehir">Eskişehir</option>
                    </select>
                </div>

                <div>
                    <select name="ilce" id="ilce" class="my-3  border border-dark rounded p-2"
                        style="width: 150px;">
                        <option style="background-color: black; color: white;" disabled selected>Bir İlçe Seçin..
                        </option>
                        <option value="Küçükçekmece">Küçükçekmece</option>
                        <option value="Mamak">Mamak</option>
                        <option value="Çeşme">Çeşme</option>
                        <option value="Alanya">Alanya</option>
                        <option value="Tepebaşı">Tepebaşı</option>
                    </select>
                </div>

                <div>
                    <select name="mahalle" id="mahalle" class="my-3  border border-dark rounded p-2"
                        style="width: 150px;">
                        <option style="background-color: black; color: white;" disabled selected>Bir Mahalle Seçin..
                        </option>
                        <option value="İnönü">İnönü</option>
                        <option value="Hürriyet">Hürriyet</option>
                        <option value="Yıldız">Yıldız</option>
                        <option value="Çağlayan">Çağlayan</option>
                        <option value="Çamlıca">Çamlıca</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- 2 ALAN -->
        <div class="col-lg-4 p-3 text-center mx-auto">
            <div id="result">

            </div>
        </div>

        <!-- 3 ALAN -->

        <div class="col-lg-4  p-3 text-center mx-auto">
            <div class="gorselalani">
                <h5 class="text-info">Görseller</h5>
                <label for="formFile1" class="form-label text-white"></label>
                <input type="text" class="form-control border border-dark text-center" name="resim1" id="formFile1">

                <label for="formFile2" class="form-label text-white"></label>
                <input type="text" class="form-control border border-dark text-center" name="resim2" id="formFile2">

                <label for="formFile3" class="form-label text-white"></label>
                <input type="text" class="form-control border border-dark text-center" name="resim3" id="formFile3">
            </div>
            <hr>
            <div class="aciklamaalani">
                <h5 class="text-info">Açıklama</h5>
                <input type="text" class="form-control border border-dark text-center" name="aciklama">
            </div>
            <hr>
            @if (isset($ilanlar))
                <div class="ilanidalani mt-5">
                    <h5 class="text-info">İlan İD</h5>
                    <input type="number" class="form-control border border-dark text-center"
                        placeholder="İlan İD Girin:" value="{{$ilanlar->ilan_id}}" name="ilan_id">
                    <label class="text-light">* Silme ve Güncelleme işlemleri için Gerekli</label>
                </div>
            @endif
        </div>

        <div class="col-lg-4 border rounded-5 p-3 text-center mx-auto ">
            @if (isset( $ilanlar))
                <button type="submit" class="btn btn-primary fw-bold mx-3" name="btnedit">GÜNCELLE</button>
            @else
                <button type="submit" class="btn btn-primary fw-bold" name="btncreate">EKLE</button>
            @endif
        </div>
    </form>
@endsection

@section('script')
    <script src="{{asset("js/admin.js")}}"></script>
@endsection