<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedModel extends Model
{
    use HasFactory;

    protected $table = "saved";
    protected $primaryKey = "kaydedilen_id";
    protected $fillable = ["user_id", "ilan_id", "created_at", "updated_at"];

    public function ilanModel()
    {
        return $this->belongsTo(ilanModel::class, 'ilan_id');
    }


}