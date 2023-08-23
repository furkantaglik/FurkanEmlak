<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ilanModel extends Model
{
    use HasFactory;
    protected $table = 'ilanlar';
    protected $primaryKey = 'ilan_id';

    protected $fillable = [
        "kategori",
        "turu",
        "tipi",
        "durum",
        "fiyat",
        "baslik",
        "il",
        "ilce",
        "mahalle",
        "yas",
        "tapu",
        "isinma",
        "takas",
        "salon",
        "oda",
        "kat",
        "metre",
        "aciklama",
        "resim1",
        "resim2",
        "resim3",
        "created_at",
        "updated_at"
    ];

    public function isLikedByUser()
    {
        $user_id = session("user_id");

        return $this->savedModel()->where('user_id', $user_id)->exists();
    }

    public function savedModel()
    {
        return $this->hasMany(SavedModel::class, 'ilan_id');
    }

}