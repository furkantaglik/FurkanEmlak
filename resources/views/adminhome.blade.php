@extends('app')

@section("title","Admin Paneli")

@section('content')
<div class="container">
    <nav class="navbar">
        <div class="container float-start">
          <a href="{{route("home")}}" class="navbar-brand fw-bold"><i class="bi bi-arrow-left-circle-fill"> AnaSayfa</i></a>
          @php
              $mesaj =session()->get('mesaj');
          @endphp
            @if ($mesaj)
            <div class="alert alert-success fw-bold">
                <i class="bi bi-check-lg"></i> {{ $mesaj }}
            </div>
            @endif
          <a href="{{route("admin.create")}}" class="navbar-brand fw-bold"><i class="bi bi-plus-circle-fill"> Ekle</i></a>
        </div>
    </nav>
    <div class="row">
       <div class="col-md-8 mx-auto mt-3">
            <table class="table table-hover text-center align-items-center justify-content-center">
                <thead>
                    <tr>
                    <th scope="col">İD</th>
                    <th scope="col">Görsel</th>
                    <th scope="col">Başlık</th>
                    <th scope="col">Tür</th>
                    <th scope="col">Konum</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">SİL</th>
                    <th scope="col">Güncelle</th>
                    </tr>
                </thead>
                <tbody >
                    <form action=" {{route("admin.delete")}} " method="post">
                    @csrf                    
                    @foreach ( $ilanlar as $ilan)
                    <tr>
                        <th scope="row">{{$ilan->ilan_id}} </th>
                        <input type="hidden" class="form-control" name="ilan_id"  value="{{$ilan->ilan_id}}"> 
                        <td class="w-25"> <img src="{{ Storage::url($ilan->resim1) }}" alt="Henüz Eklenmemiş" class="img-fluid rounded-start w-100"> </td>
                        <td>{{$ilan->baslik}}</td>
                        <td>{{$ilan->tipi}}</td>
                        <td>{{$ilan->il}}</td>
                        <td>{{$ilan->fiyat}} TL</td>
                        <td>
                            <button type="submit"  class="btn btn-outline-danger fw-bold">
                                <i class="bi bi-archive-fill"></i>
                            </button>
                        </td>
                        <td>
                            <a href="{{ route('admin.editblade', ['ilan_id' => $ilan->ilan_id]) }}" class="btn btn-outline-primary fw-bold">
                                <i class="bi bi-pen-fill"></i>
                            </a>                            
                        </td>
                    </tr>
                      @endforeach
                    </form>
                </tbody>
            </table>
       </div>
    </div>
</div>
    
@endsection