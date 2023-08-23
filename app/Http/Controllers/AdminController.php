<?php

namespace App\Http\Controllers;

use App\Models\ilanModel;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AdminController extends Controller
{
    public function index()
    {
        $ilanlar = ilanModel::all();

        return view('adminhome', [
            'ilanlar' => $ilanlar,
        ]);
    }

    public function delete(Request $request)
    {

        $ilan_id = $request->input("ilan_id");
        $ilanlar = ilanModel::where("ilan_id", $ilan_id)->first();

        if ($ilanlar->delete()) {
            return redirect()->route("admin")->with(["mesaj" => "İlan Silindi"]);
        }               
        else{
            return redirect()->route("admin")->with(["mesaj" => "İlan Silinirken bir hata oluştu"]);
        }
    }

    public function editblade($ilan_id)
    {

        $ilanlar = ilanModel::where("ilan_id", $ilan_id)->first();

        return view("admin", [
            "ilanlar" => $ilanlar
        ]);

    }

    public function edit(Request $request)
    {
        $ilan_id = $request->input("ilan_id");
        $ilanlar = ilanModel::find($ilan_id);

        $ilanlar->fiyat = $request->filled('fiyat') ? $request->input('fiyat') : $ilanlar->fiyat;
        $ilanlar->baslik = $request->filled('baslik') ? $request->input('baslik') : $ilanlar->baslik;

        $ilanlar->salon = $request->filled('salon') ? $request->input('salon') : $ilanlar->salon;
        $ilanlar->oda = $request->filled('oda') ? $request->input('oda') : $ilanlar->oda;
        $ilanlar->kat = $request->filled('kat') ? $request->input('kat') : $ilanlar->kat;
        $ilanlar->metre = $request->filled('metre') ? $request->input('metre') : $ilanlar->metre;
        $ilanlar->yas = $request->filled('yas') ? $request->input('yas') : $ilanlar->yas;

        $ilanlar->kategori = $request->filled('kategorioptions') ? $request->input('kategorioptions') : $ilanlar->kategori;
        $ilanlar->turu = $request->filled('ilanoptions') ? $request->input('ilanoptions') : $ilanlar->turu;
        $ilanlar->tipi = $request->filled('tipoptions') ? $request->input('tipoptions') : $ilanlar->tipi;
        $ilanlar->durum = $request->filled('durumoptions') ? $request->input('durumoptions') : $ilanlar->durum;
        $ilanlar->tapu = $request->filled('tapuoptions') ? $request->input('tapuoptions') : $ilanlar->tapu;
        $ilanlar->isinma = $request->filled('isinmaoptions') ? $request->input('isinmaoptions') : $ilanlar->isinma;
        $ilanlar->takas = $request->filled('takasoptions') ? $request->input('takasoptions') : $ilanlar->takas;
        $ilanlar->aciklama = $request->filled('aciklama') ? $request->input('aciklama') : $ilanlar->aciklama;

        $ilanlar->il = $request->filled('il') ? $request->input('il') : $ilanlar->il;
        $ilanlar->ilce = $request->filled('ilce') ? $request->input('ilce') : $ilanlar->ilce;
        $ilanlar->mahalle = $request->filled('mahalle') ? $request->input('mahalle') : $ilanlar->mahalle;

        // Resimler

        $ilanlar->resim1= $request->filled('resim1') ? $request->input('resim1') : $ilanlar->resim1;
        $ilanlar->resim2 = $request->filled('resim2') ? $request->input('resim2') : $ilanlar->resim2;
        $ilanlar->resim3 = $request->filled('resim3') ? $request->input('resim3') : $ilanlar->resim3;


        if ($ilanlar->save()) {
            return redirect()->route("admin")->with(["mesaj" => "İlan Güncellendi"]);
        }               
        else{
            return redirect()->route("admin")->with(["mesaj" => "İlan Güncellenirken bir hata oluştu"]);
        }
    }

    public function createblade()
    {
        return view("admin");
    }

    public function create(Request $request)
    {
        $ilanlar = new ilanModel();

        $ilanlar->fiyat = $request->input('fiyat');
        $ilanlar->baslik = $request->input('baslik');

        $ilanlar->salon = $request->input('salon');
        $ilanlar->oda = $request->input('oda');
        $ilanlar->kat = $request->input('kat');
        $ilanlar->metre = $request->input('metre');
        $ilanlar->yas = $request->input('yas');

        $ilanlar->kategori = $request->input('kategorioptions');
        $ilanlar->turu = $request->input('ilanoptions');
        $ilanlar->tipi = $request->input('tipoptions');
        $ilanlar->durum = $request->input('durumoptions');
        $ilanlar->tapu = $request->input('tapuoptions');
        $ilanlar->isinma = $request->input('isinmaoptions');
        $ilanlar->takas = $request->input('takasoptions');
        $ilanlar->aciklama = $request->input('aciklama');

        $ilanlar->il = $request->input('il');
        $ilanlar->ilce = $request->input('ilce');
        $ilanlar->mahalle = $request->input('mahalle');

        $ilanlar->resim1= $request->filled('resim1') ? $request->input('resim1') : $ilanlar->resim1;
        $ilanlar->resim2 = $request->filled('resim2') ? $request->input('resim2') : $ilanlar->resim2;
        $ilanlar->resim3 = $request->filled('resim3') ? $request->input('resim3') : $ilanlar->resim3;

        if ($ilanlar->save()) {
            return redirect()->route("admin")->with(["mesaj" => "İlan Eklendi"]);
        }               
        else{
            return redirect()->route("admin")->with(["mesaj" => "İlan eklenirken bir hata oluştu"]);
        }


    }
}