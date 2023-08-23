<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ilanlar', function (Blueprint $table) {
            $table->increments("ilan_id");
            $table->string("kategori",50)->nullable();
            $table->string("turu",50)->nullable();
            $table->string("tipi",50)->nullable();
            $table->string("durum",50)->nullable();
            $table->integer("fiyat")->nullable();
            $table->string("baslik",200)->nullable();
            $table->string("il",50)->nullable();
            $table->string("ilce",50)->nullable();
            $table->string("mahalle",50)->nullable();
            $table->integer("yas")->nullable();
            $table->string("tapu",50)->nullable();
            $table->string("isinma",50)->nullable();
            $table->string("takas",50)->nullable();
            $table->integer("salon")->nullable();
            $table->integer("oda")->nullable();
            $table->integer("kat")->nullable();
            $table->integer("metre")->nullable();
            $table->string("aciklama",500)->nullable();
            $table->text("resim1")->nullable();
            $table->text("resim2")->nullable();
            $table->text("resim3")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ilanlar');
    }
};
