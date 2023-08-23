<?php

namespace App\Http\Controllers;

use App\Models\ilanModel;
use App\Models\SavedModel;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\QueryRecorder\Query;

class HomeController extends Controller
{
    public function index()
    {
        $ilanlar = ilanModel::all();
        $ilan_count = $ilanlar->count();

        return view('home', [
            'ilanlar' => $ilanlar,
            'ilan_count' => $ilan_count,
            'query_type' => 'Tüm'
        ]);
    }
    public function search(Request $request)
    {
        $searchQuery = $request->input('search-query');

        $ilanlar = ilanModel::where(function ($query) use ($searchQuery) {
            $columns = [
                'ilan_id',
                'kategori',
                'turu',
                'tipi',
                'fiyat',
                'baslik',
                'il',
                'ilce',
                'mahalle',
                'tapu',
                'isinma',
                'durum'
            ];
            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $searchQuery . '%');
            }
        })->get();

        $ilan_count = $ilanlar->count();

        return view("home", [
            "ilanlar" => $ilanlar,
            'ilan_count' => $ilan_count,
            'query_type' => 'Aranan'
        ]);
    }

    public function filter(Request $request)
    {
        $kategori = $request->input('kategorioptions');
        $il = $request->input('il');
        $ilce = $request->input('ilce');
        $mahalle = $request->input('mahalle');
        $ilanturu = $request->input('ilanturu');

        $fiyataz = $request->input('fiyataz');
        $fiyatcok = $request->input('fiyatcok');
        $odaaz = $request->input('odaaz');
        $odacok = $request->input('odacok');
        $salonaz = $request->input('salonaz');
        $saloncok = $request->input('saloncok');
        $kataz = $request->input('kataz');
        $katcok = $request->input('katcok');
        $metreaz = $request->input('metreaz');
        $metrecok = $request->input('metrecok');
        $yasaz = $request->input('yasaz');
        $yascok = $request->input('yascok');

        $tip = $request->input('tipoptions');
        $durum = $request->input('durumoptions');
        $tapu = $request->input('tapuoptions');
        $isinma = $request->input('isinmaoptions');
        $takas = $request->input('takasoptions');

        $query = ilanModel::query();

        if ($kategori) {
            $query->where('kategori', $kategori);
        }

        if ($il) {
            $query->where('il', $il);
        }

        if ($ilce) {
            $query->where('ilce', $ilce);
        }

        if ($mahalle) {
            $query->where('mahalle', $mahalle);
        }

        if ($ilanturu) {
            $query->where('turu', $ilanturu);
        }
        //
        if ($fiyataz) {
            $query->where('fiyat', ">=", $fiyataz);
        }
        if ($fiyatcok) {
            $query->where('fiyat', "<=", $fiyatcok);
        }
        //
        if ($odaaz) {
            $query->where('oda', ">=", $odaaz);
        }
        if ($odacok) {
            $query->where('oda', "<=", $odacok);
        }
        //
        if ($salonaz) {
            $query->where('salon', ">=", $salonaz);
        }
        if ($saloncok) {
            $query->where('salon', "<=", $saloncok);
        }
        //
        if ($metreaz) {
            $query->where('metre', ">=", $metreaz);
        }
        if ($metrecok) {
            $query->where('metre', "<=", $metrecok);
        }
        //
        if ($yasaz) {
            $query->where('yas', ">=", $yasaz);
        }
        if ($yascok) {
            $query->where('yas', "<=", $yascok);
        }
        //
        if ($kataz) {
            $query->where('yas', ">=", $kataz);
        }
        if ($katcok) {
            $query->where('yas', "<=", $katcok);
        }


        if ($tip) {
            $query->where('tipi', $tip);
        }
        if ($durum) {
            $query->where('durum', $durum);
        }
        if ($tapu) {
            $query->where('tapu', $tapu);
        }
        if ($isinma) {
            $query->where('isinma', $isinma);
        }
        if ($takas) {
            $query->where('takas', $takas);
        }

        $ilanlar = $query->get();
        $ilan_count = $ilanlar->count();

        return view("home", [
            "ilanlar" => $ilanlar,
            'ilan_count' => $ilan_count,
            'query_type' => 'Filtrelenen'
        ]);
    }

    public function liked(Request $request)
    {
        $ilan_id = $request->input("ilan_id");
        $user_id = session("user_id");

        $ilan = SavedModel::where('ilan_id', $ilan_id)->where('user_id', $user_id)->first();

        if ($ilan) {
            //varsa sil
            $ilan->delete();
            return back();
        } else {
            //yoksa kaydet
            $ilan = new SavedModel();
            $ilan->user_id = $user_id;
            $ilan->ilan_id = $ilan_id;
            if ($ilan->save()) {
                return back();
            }
        }
    }

    public function saves(Request $request)
    {
        $user_id = session("user_id");
        $ilanlar = SavedModel::where("user_id", $user_id)->with('ilanModel')->get();
        $ilan_count = $ilanlar->count();

        $ilanlar = $ilanlar->map(function ($item) {
            return $item->ilanModel;
        });

        return view("home", [
            "ilanlar" => $ilanlar,
            'ilan_count' => $ilan_count,
            'query_type' => 'Kaydedilen'
        ]);
    }
    
}