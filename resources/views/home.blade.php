@extends('app')

@section("title","Ana Sayfa")

@section("style")
<style>
    @media (max-width: 768px) {
        .form {
            display: none;
        }
    }

    .nav-link:hover,
    .fw-bold:hover {
        color: #7f7f7f;
    }

    .w-100:hover {
        border: 1px solid #7f7f7f;
    }

    .btn-outline-danger:hover,
    .btn-danger:hover {
        color: ghostwhite;
    }
</style>
@endsection

@section('content')

<header class="navbar navbar-expand-lg sticky-top border-bottom rounded-bottom temadivi">
    <nav class="container-xxl py-lg-1 py-2">

        <div class="navbar-toggle">
            <button class="navbar-toggler p-2 btn btn-danger border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#solmenu">
                <i class="bi bi-list"></i>
            </button>
        </div>


        <div class="d-flex">
            <a href="{{route("home")}}" class="nav-link text-center">
                <small class="fw-bold fs-6 ">FURKAN EMLAK</small>
            </a>
        </div>

        <!-- Arama çubuğu -->
        <form action="/search" method="GET" class="form input-group input-group-sm border rounded-3  mx-lg-5 w-50 araform" id="araform">
            <input type="search" class="form-control rounded-3 border-0 p-2 ps-3"
                aria-describedby="inputGroup-sizing-sm" name="search-query" placeholder="ilan id Kategori Konum vb. Ara" required>
            <button type="submit" class="border-0 btn arabtn" id="arabtn">
                <i class="bi bi-search text-danger"></i>
            </button>
        </form>

        <div class="navbar-toggle">
            <button class="navbar-toggler d-flex d-lg-none p-2 btn btn-danger border-0" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#sagmenu">
                <i class="bi bi-three-dots"></i>
            </button>
        </div>

        <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="sagmenu" aria-labelledby="sagOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title fw-bold" id="sagOffcanvasLabel">Furkan Emlak</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"
                    data-bs-target="#sagmenu"></button>
            </div>

            <div class="offcanvas-body p-4 pt-0 p-lg-0 ">
                <hr class="d-lg-none">
                <!-- menü elemanları -->
                <ul class="navbar-nav mx-3 text-center">
                    <!--mobil Arama çubuğu -->

                    <form action="/search" method="Get" class="input-group input-group-sm border rounded-3 mx-lg-5  d-lg-none araform"
                        id="araform">
                        <input type="search" class="form-control rounded-3 border-0 p-2 ps-3"
                            aria-describedby="inputGroup-sizing-sm" name="search-query"
                            placeholder="ilan id Kategori Konum vb. Ara">
                        <button type="submit" class="border-0 btn arabtn" id="arabtn"
                            data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#sagmenu">
                            <i class="bi bi-search text-danger"></i>
                        </button>
                    </form>

                    <hr class="d-lg-none">
                    <li class="nav-item"><a class="nav-link fw-bold" title="Hakkımızdakileri Okuyun"
                            href="#footer">Hakkımızda</a></li>
                    <style>

                    </style>

                    <!-- hesap girişi -->
                    <li>
                        <div class="dropdown text-center">
                            <button type="button" class="btn rounded-2  fw-bold dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i><span title="Hesabınıza İlişkin Detayları Görün">
                                    Hesabım</span>
                            </button>
                            <form method="POST" id="kaydedilenform" class="dropdown-menu border text-center">  
                                @php
                                    $user_id = session()->get('user_id');
                                    $username = session()->get('username');
                                    $password = session()->get('password');
                                @endphp

                                @if ($username == "admin" && $password == 12345)
                                    <button type="button" class="btn btn-secondary fw-bold" style="width:197px" id="kullanicibilgi">
                                         {{ $username }} 
                                    </button>
                                                                                
                                    <a href="{{Route("home.saves")}}" class="btn fw-bold" style="width:197px" id="kaydedilenbtn" >Kaydedilenler</a>
                                    <a href="{{Route("user.logout")}}" class="btn fw-bold" style="width:197px">Çıkış Yap</a>
                                    <a href="{{Route("admin")}}" class="btn text-primary fw-bold" style="width:197px">Panel</a>
                                @elseif ($username)
                                    <button type="button" class="btn btn-secondary fw-bold" style="width:197px" id="kullanicibilgi">
                                        {{ $username }}
                                    </button>
                                                                            
                                    <a href="{{Route("home.saves")}}" class="btn fw-bold" style="width:197px" id="kaydedilenbtn">Kaydedilenler</a>
                                    <a href="{{Route("user.logout")}}" class="btn fw-bold" style="width:197px">Çıkış Yap</a>
                                @else
                                    <a class="btn fw-bold" href="{{Route("user.login")}}" style="width:197px">Giriş Yap</a>
                                    <a class="btn fw-bold" href="{{Route("user.register")}}" style="width:197px">Kayıt Ol</a>
                                @endif
                            </form>
                        </div>
                    </li>
                </ul>
                <hr class="d-lg-none">

                <ul class="navbar-nav ms-lg-auto text-center">
                    <li class="nav-item ">
                        <a class="nav-link py-2 px-lg-2 text-primary" href="https://twitter.com" target="_blank"
                            rel="noopener">
                            <i class="bi bi-twitter"></i>
                            <small class="d-lg-none ms-2">Twitter</small>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link py-2 px-lg-2 text-primary" href="https://linkedin.com" target="_blank"
                            rel="noopener">
                            <i class="bi bi-linkedin"></i>
                            <small class="d-lg-none ms-2">Linkedin</small>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link py-2 px-lg-2 text-primary" href="tel:+333 999 666" target="_blank"
                            rel="noopener">
                            <i class="bi bi-telephone-fill"></i>
                            <small class="d-lg-none ms-2">444 123 44</small>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link py-2 px-lg-2 text-primary" href="mailto:temlak@gmail.com" target="_blank"
                            rel="noopener">
                            <i class="bi bi-envelope-fill"></i>
                            <small class="d-lg-none ms-2">Femlak@gmail.com</small>
                        </a>
                    </li>

                    <!--Tema Değişikliği -->
                    <li>
                        <div class="dropdown text-center">
                            <button class="btn dropdown-toggle" type="button" title="Renk Modları Arasında Geçiş yapın"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-brightness-high-fill"></i>
                            </button>
                            <ul class="dropdown-menu text-center">
                                <li>
                                    <button type="button" class="btn fw-bold" data-bs-theme-value="light"
                                        aria-pressed="false" autocomplete="off">
                                        <i class="bi bi-brightness-high-fill"></i>
                                        <use href="#sun-icon"></use>
                                        Ligth Mode
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn fw-bold" data-bs-theme-value="dark"
                                        aria-pressed="false" autocomplete="off">
                                        <use href="#moon-icon"></use>
                                        <i class="bi bi-moon-stars-fill"></i>
                                        Dark Mode
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn fw-bold" data-bs-theme-value="auto"
                                        aria-pressed="true" autocomplete="off">
                                        <use href="#auto-icon"></use>
                                        <i class="bi bi-disc-fill"></i>
                                        Auto Mode
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!--Filtreleme-->

<div class="container-fluid mt-3">
    <div class="row">
        <aside class="col-lg-3 border-end">

            <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="solmenu" aria-labelledby="solOffcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="solOffcanvasLabel">Furkan Emlak</h5>
                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                        aria-label="Close" data-bs-target="#solmenu"></button>
                </div>

                <div class="offcanvas-body">
                    <hr>
                    <nav class="links w-100 px-3" id="docs-nav">
                        <ul class="links-nav list-unstyled">
                            <form method="get" id="filtreform" action="/filter">
                                <li class="links-group py-2 mb-2">
                                    <h4 class="fw-bold text-center ">Aklınızda Birşey Mi Var?</h4>
                                    <hr>
                                    <strong class="fw-semibold text-danger">
                                        <i class="bi -tags-fill"></i>
                                        KATEGORİ
                                    </strong>
                                    <div class="d-flex mt-3">
                                        <input type="radio" class="btn-check" name="kategorioptions" id="satilik"
                                            autocomplete="off" value="Satılık">
                                        <label class="btn btn-outline-danger w-100 me-3" for="satilik">Satılık</label>

                                        <input type="radio" class="btn-check" name="kategorioptions" id="kiralik"
                                            autocomplete="off" value="Kiralık">
                                        <label class="btn btn-outline-danger w-100" for="kiralik">Kiralık</label>
                                    </div>
                                </li>

                                <li class="links-group py-2">
                                    <strong class="fw-semibold text-danger">
                                        <i class="bi -geo-alt-fill"></i>
                                        KONUM
                                    </strong>

                                    <ul class="list-unstyled fw-normal">
                                        <li class="links-link d-inline-block">
                                            <div>
                                                <select name="il" id="il" class="my-3 border border-dark rounded p-2 "
                                                    style="width:150px;" required onchange="activateSecondSelect(this)">
                                                    <option class="bg-dark " disabled selected>Bir Şehir
                                                        Seçin..
                                                    </option>
                                                    <option value="İstanbul">İstanbul</option>
                                                    <option value="Ankara">Ankara</option>
                                                    <option value="İzmir">İzmir</option>
                                                    <option value="Antalya">Antalya</option>
                                                    <option value="Eskişehir">Eskişehir</option>
                                                </select>
                                            </div>

                                            <div>
                                                <select name="ilce" id="ilce"
                                                    class="my-3 border border-dark rounded p-2" style="width:150px;"
                                                    required disabled onchange="activateThirdSelect(this)">
                                                    <option class="bg-dark " disabled selected>Bir İlçe
                                                        Seçin..
                                                    </option>
                                                    <option value="Küçükçekmece">Küçükçekmece</option>
                                                    <option value="Mamak">Mamak</option>
                                                    <option value="Çeşme">Çeşme</option>
                                                    <option value="Alanya">Alanya</option>
                                                    <option value="Tepebaşı">Tepebaşı</option>
                                                </select>
                                            </div>

                                            <div>
                                                <select name="mahalle" id="mahalle"
                                                    class="my-3 border border-dark rounded p-2" style="width:150px;"
                                                    required disabled>
                                                    <option class="bg-dark " disabled selected>Bir Mahalle
                                                        Seçin..
                                                    </option>
                                                    <option value="İnönü">İnönü</option>
                                                    <option value="Hürriyet">Hürriyet</option>
                                                    <option value="Yıldız">Yıldız</option>
                                                    <option value="Çağlayan">Çağlayan</option>
                                                    <option value="Çamlıca">Çamlıca</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="links-group">
                                    <strong class="fw-semibold text-danger">
                                        <i class="bi -filter-circle-fill"></i>
                                        FİLTRE
                                    </strong>

                                    <ul class="list-unstyled fw-normal">
                                        <li class="my-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="konut" name="ilanturu"
                                                    value="Konut">
                                                <label class="form-check-label" for="konut">Konutlar</label>
                                            </div>
                                            <div class="form-check my-3">
                                                <input type="radio" class="form-check-input" id="arsa" name="ilanturu"
                                                    value="Arsa">
                                                <label class="form-check-label" for="arsa">Arsalar</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="isyeri" name="ilanturu"
                                                    value="İşyeri">
                                                <label class="form-check-label" for="isyeri">İş Yerleri</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="links-group">
                                    <hr>
                                    <ul class="list-unstyled fw-normal pb-2" id="result">

                                    </ul>
                                </li>

                                <button type="submit" class="btn btn-danger fw-bold w-100 fw-bold" id="filtrebtn"
                                    title="Seçtiğiniz filtreleri uygulayın" data-bs-dismiss="offcanvas"
                                    aria-label="Close" data-bs-target="#solmenu">
                                    Uygula
                                </button>

                            </form>
                        </ul>
                    </nav>
                </div>
            </div>
        </aside>

        <!--İlanlar-->

        <main class="main col-lg-9">
            <div class="content">
                <ul class="list-unstyled" id="sonuc">
                    @if ($ilan_count==0)
                    <div class="container">
                        <div class="row mt-5">
                           <div class="col-lg-6 mx-auto mt-5">
                                <h3 class="fw-bold text-center text-danger">Furkan Emlak </h3>
                            </div>
        
                            <div class="col-lg-12 mx-auto">
                                <h4 class=" text-center">Malefes Sonuç Bulunamadı <span class="text-warning">{{$username}}</span> <br>
                                    Farklı Filtreler Veya Kelimeler Deneyin Ya da İlanları Kaydedin.</h4>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class=" text-center">
                        <h6 class=""><b>{{$query_type}}</b><span> İlanlar Gösteriliyor ({{$ilan_count}} Adet)</span></h6>
                    </div>
                    @foreach ($ilanlar as $ilan)
                    @php
                    $turu=$ilan->turu
                    @endphp

                    <li class="position-relative d-flex m-lg-2">
                        <div class="card w-100">
                            <div class="row">
                                <div class="col-lg-4" style="height: 230px;">
                                    <img src="{{ $ilan->resim1 }}" alt="Henüz Eklenmemiş" class="img-fluid rounded-start w-100" style="height: 235px;">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body ps-2">
                                        <h4 class="card-title fw-bold fs-4">{{ $ilan->fiyat }} TL</h4>
                                        <small class="card-text fw-bold fs-5" id="ilanbaslik">{{ $ilan->baslik }}</small><br>
                                        <small class="card-text fw-bold" id="ilanozellik">
                                            @if ($turu == "Konut")
                                                {{ $ilan->kategori }} {{ $ilan->tipi }} | {{ $ilan->oda }} + {{ $ilan->salon }} | {{ $ilan->kat }}.Kat | {{ $ilan->metre }} M²
                                            @elseif ($turu == "Arsa")
                                                {{ $ilan->kategori }} {{ $ilan->tipi }} | {{ $ilan->metre }} M²
                                            @elseif ($turu == "İşyeri")
                                                {{ $ilan->kategori }} {{ $ilan->tipi }} | {{ $ilan->oda }} oda | {{ $ilan->kat }}.Kat | {{ $ilan->metre }} M²
                                            @endif

                                        </small>
                                        <br><br>
                                        <p class="card-text">
                                            <small class="bi bi-geo-alt text-muted">{{ $ilan->il }} {{ $ilan->ilce }} {{ $ilan->mahalle }}</small><br>
                                            <small class="text-muted bi bi-calendar2-minus d-lg-none"> {{ $ilan->created_at }}</small>
                                        </p>
                                        <p class="card-text position-absolute top-0 end-0 me-3">
                                            <small class="text-muted bi bi-calendar2-minus d-none d-lg-block"> {{ $ilan->created_at }}</small>
                                        </p>
                                        <form action="{{route("home.liked")}} " method="POST">
                                            @csrf
                                            <button type="button" class="btn btn-outline-danger fw-bold me-2" title="İlanın Detaylarını İnceleleyin" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $ilan->ilan_id }}">
                                                İncele
                                            </button>

                                            <input type="hidden" name="ilan_id" value="{{ $ilan->ilan_id }}">

                                            @if ($ilan->isLikedByUser($user_id))
                                            <button type="submit" title="İlanı Beğenerek Kaydedebilirsiniz" class="btn">
                                                <i class="bi bi-star-fill text-danger"></i>
                                            </button>
                                            @else
                                            <button type="submit" title="İlanı Beğenerek Kaydedebilirsiniz" class="btn">
                                                <i class="bi bi-star text-danger"></i>
                                            </button>
                                            @endif

                                            <small class="text-muted position-absolute top-75 end-0 mt-4 me-2">İlan No: {{ $ilan->ilan_id }}</small>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- MODAL -->

                    <li>
                        <div class="modal fade" id="exampleModal{{ $ilan->ilan_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-lg-down">
                                <div class="modal-content">
                                    <div class="container-fluid bg-light-subtle">
                                        <div class="row">
                                            <div class="col-lg-6 mt-2">
                                                <div id="carouselExample{{ $ilan->ilan_id }}" class="carousel slide">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ $ilan->resim1 }}" alt="Henüz Eklenmemiş" class="img-fluid rounded w-100" style="height: 350px;">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{  $ilan->resim2 }}" alt="Henüz Eklenmemiş" class="img-fluid rounded w-100" style="height: 350px;">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{  $ilan->resim3 }}" alt="Henüz Eklenmemiş" class="img-fluid rounded w-100" style="height: 350px;">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{ $ilan->ilan_id }}" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{ $ilan->ilan_id }}" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mt-2 mt-lg-3">
                                                <h3 class="card-title fw-bold">{{ $ilan->fiyat }} TL</h3>
                                                <h4 class="card-text fw-bold mb-lg-3">{{ $ilan->baslik }}</h4>
                                                <small class="bi bi-geo-alt text-muted fs-5 mt-5"> {{ $ilan->il }} {{ $ilan->ilce }} {{ $ilan->mahalle }}</small><br>
                                                <small class="bi bi-calendar2-minus text-muted fs-5 mt-3"> {{ $ilan->created_at }}</small><br>

                                                <p class="mt-4"><b>Açıklama</b><br/>{{ $ilan->aciklama }}</p>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <table class="table table-hover">
                                                    <tr>
                                                        <td>Eklenen Tarih</td>
                                                        <td><b>{{ $ilan->created_at }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>İlan No</td>
                                                        <td><b>{{ $ilan->ilan_id }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>İlan Durumu</td>
                                                        <td><b>{{ $ilan->kategori }}</b></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Mülkiyet Türü</td>
                                                        <td><b>{{ $ilan->tipi }}</b></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Takas</td>
                                                        <td><b>{{ $ilan->takas }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tapu</td>
                                                        <td><b>{{ $ilan->tapu }}</b></td>
                                                    </tr>
                                                    @if ($turu == "Konut")
                                                        <tr>
                                                            <td>Isınma Tipii</td>
                                                            <td><b>{{ $ilan->isinma }}</b></td>
                                                        </tr>
                                                    @endif
                                                    @if ($turu == "İşyeri")
                                                        <tr>
                                                            <td>Isınma Tipii</td>
                                                            <td><b>{{ $ilan->isinma }}</b></td>
                                                        </tr>
                                                    @endif
                                                </table> 
                                            </div>
                                            <div class="col-lg-6">
                                                <table class="table table-hover">
                                                    <tr>
                                                        <td>Güncellenen Tarih</td>
                                                        <td><b>{{ $ilan->updated_at }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MetreKare</td>
                                                        <td><b>{{ $ilan->metre }} M²</b></td>
                                                    </tr>
                                                    @if ($turu != "Arsa")
                                                        <tr>
                                                            <td>Yapının Durumu</td>
                                                            <td><b>{{ $ilan->durum }}</b></td>
                                                        </tr>
                                                        @if ($turu == "Konut")
                                                            <tr>
                                                                <td>Salon Sayısı</td>
                                                                <td><b>{{ $ilan->salon }}</b></td>
                                                            </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Oda Sayısı</td>
                                                            <td><b>{{ $ilan->oda }}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bulunduğu Kat</td>
                                                            <td><b>{{ $ilan->kat }}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yapının Yaşı</td>
                                                            <td><b>{{ $ilan->yas }}</b></td>
                                                        </tr>
                                                    @endif
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                                <a href="https://wa.me/333666999" class="btn btn-success bi bi-whatsapp" title="Whatsapp Üzerinden İletişime Geçin">Mesaj Gönder</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif

                    
                </ul>
            </div>
        </main>
    </div>
</div>


<footer class="footer border-top w-100" id="footer">
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-4 col-6 mx-auto text-end">
                <h5 class="fw-semibold mb-3">Kurumsal</h5>
                <ul class="list-unstyled ">
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://">Hakkımızda <i
                                class="bi bi-info-circle-fill text-primary"></i></a></li>
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://">İletişim <i
                                class="bi bi-headset text-primary"></i></a></li>
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://">Reklam <i
                                class="bi bi-badge-ad-fill text-primary"></i></a></li>
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://">Ödüllerimiz <i
                                class="bi bi-award-fill text-primary"></i></a></li>
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://">Üyelik <i
                                class="bi bi-people-fill text-primary"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-6 mx-auto text-start">
                <h5 class="fw-semibold mb-3">Medya</h5>
                <ul class="list-unstyled ">
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://www.instagram.com"><i
                                class="bi bi-instagram text-primary"></i> İnstagram</a></li>
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://www.twitter.com"><i
                                class="bi bi-twitter text-primary"></i> Twitter</a></li>
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://www.linkedin.com"><i
                                class="bi bi-linkedin text-primary"></i> Linkedin</a></li>
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://www.facebook.com"><i
                                class="bi bi-reddit text-primary"></i> Facebook</a></li>
                    <li class="mb-2 nav-item"><a class="nav-link" href="https://www.reddit.com"><i
                                class="bi bi-facebook text-primary"></i> Reddit</a></li>
                </ul>
            </div>
            <div class="col-12 mx-auto text-center mt-3">
                <h6 class="fw-semibold text-secondary"><i class="bi bi-c-circle">furkanemlak.com</i></h6>
            </div>
        </div>
    </div>
</footer>

@endsection

@section('script')
<script src="{{asset("js/script.js")}}"></script>
<script src="{{asset("js/tema.js")}}"></script>
@endsection