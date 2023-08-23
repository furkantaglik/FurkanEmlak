const ilanTurleri = document.querySelectorAll('input[name="ilanoptions"]');

//seçilen ilan türüne göre çıktı yazdırılır
for (let i = 0; i < ilanTurleri.length; i++) {
    ilanTurleri[i].addEventListener('change', function () {
        const selectedValue = this.value;
        let innerHTML = '';

        if (selectedValue === 'Konut') {
            innerHTML =
                '<div class="konuttipialani">' +
                '<h5 class="text-info">Konut Tipi</h5>' +
                '<input type="radio" class="btn-check" name="tipoptions" id="daire" autocomplete="off" value="Daire">' +
                '<label class="btn btn-outline-light" for="daire">Daire</label>' +
                '<input type="radio" class="btn-check" name="tipoptions" id="mustakil" autocomplete="off" value="Müstakil">' +
                '<label class="btn btn-outline-light" for="mustakil">Müstakil</label>' +
                '<input type="radio" class="btn-check" name="tipoptions" id="villa" autocomplete="off" value="Villa">' +
                '<label class="btn btn-outline-light" for="villa">Villa</label>' +
                '</div>' +

                '<hr>' +

                '<div class="durumalani">' +
                '<h5 class="text-info">İlan Durumu</h5>' +
                '<input type="radio" class="btn-check" name="durumoptions" id="sıfır" autocomplete="off" value="Sıfır">' +
                '<label class="btn btn-outline-light" for="sıfır">Sıfır</label>' +
                '<input type="radio" class="btn-check" name="durumoptions" id="2el" autocomplete="off" value="2.El">' +
                '<label class="btn btn-outline-light" for="2el">2.El</label>' +
                '<input type="radio" class="btn-check" name="durumoptions" id="3el" autocomplete="off" value="3.El">' +
                '<label class="btn btn-outline-light" for="3el">3.El</label>' +
                '</div>' +

                '<hr>' +

                '<div class="tapualani">' +
                '<h5 class="text-info">Tapu Tipi</h5>' +
                '<input type="radio" class="btn-check" name="tapuoptions" id="mulkiyet" autocomplete="off" value="Mülkiyetli">' +
                '<label class="btn btn-outline-light" for="mulkiyet">Mülkiyetli</label>' +
                '<input type="radio" class="btn-check" name="tapuoptions" id="irtifak" autocomplete="off" value="İrtifaklı">' +
                '<label class="btn btn-outline-light" for="irtifak">İrtifaklı</label>' +
                '<input type="radio" class="btn-check" name="tapuoptions" id="hisse" autocomplete="off" value="Hisseli">' +
                '<label class="btn btn-outline-light" for="hisse">Hisseli</label>' +
                '</div>' +

                '<hr>' +

                '<div class="isinmaalani">' +
                '<h5 class="text-info">Isınma Tipi</h5>' +
                '<input type="radio" class="btn-check" name="isinmaoptions" id="gaz" autocomplete="off" value="Doğalgaz">' +
                '<label class="btn btn-outline-light" for="gaz">Doğalgaz</label>' +
                '<input type="radio" class="btn-check" name="isinmaoptions" id="elektrik" autocomplete="off" value="Elektrik">' +
                '<label class="btn btn-outline-light" for="elektrik">Elektrik</label>' +
                '</div>' +

                '<hr>' +

                '<div class="takasalani">' +
                '<h5 class="text-info">Takas</h5>' +
                '<input type="radio" class="btn-check" name="takasoptions" id="evet" autocomplete="off" value="Evet">' +
                '<label class="btn btn-outline-light" for="evet">Evet</label>' +
                '<input type="radio" class="btn-check" name="takasoptions" id="hayir" autocomplete="off" value="Hayır">' +
                '<label class="btn btn-outline-light" for="hayir">Hayır</label>' +
                '</div>' +

                '<hr>' +

                '<div class="fiyatalani">' +
                '<h5 class="text-info">Fiyat Bilgisi</h5>' +
                '<div class="input-group">' +
                '<input type="number" class="form-control border border-dark" name="fiyat">' +
                '<span class="input-group-text fw-bold">TL</span>' +
                '</div>' +
                '</div>' +

                '<hr>' +

                '<div class="baslikalani">' +
                '<h5 class="text-info">Başlık Ekleyin</h5>' +
                '<div class="input-group">' +
                '<input type="text" class="form-control border border-dark" name="baslik">' +
                '</div>' +
                '</div>' +

                '<hr>' +

                '<div class="ozellikalani">' +
                '<h5 class="text-info">Özellikler</h5>' +
                '<div class="input-group">' +
                '<input type="number" class="form-control border border-dark text-center" placeholder="Salon sayısı" name="salon"><span class="fw-bold mt-2 mx-1">+</span>' +
                '<input type="number" class="form-control border border-dark text-center" placeholder="Oda sayısı:" name="oda">' +
                '</div>' +
                '<div class="input-group my-5">' +
                '<input type="number" class="form-control border border-dark text-center me-3" placeholder="Konutun yaşı:" name="yas">' +
                '<input type="number" class="form-control border border-dark text-center"placeholder="Kaçıncı Kat:" name="kat">' +
                '</div>' +
                '<div class="input-group my-5">' +
                '<input type="number" class="form-control border border-dark text-center mx-2"placeholder="Metre Karesi:" name="metre">' +
                '</div>' +
                '</div>';
        }
        else if (selectedValue === 'Arsa') {
            innerHTML =
                '<div class="Arsatipialani">' +
                '<h5 class="text-info">Arsa Tipi</h5>' +
                '<input type="radio" class="btn-check" name="tipoptions" id="bahce" autocomplete="off" value="Bahçe">' +
                '<label class="btn btn-outline-light" for="bahce">Bahçe</label>' +
                '<input type="radio" class="btn-check" name="tipoptions" id="tarla" autocomplete="off" value="Tarla">' +
                '<label class="btn btn-outline-light" for="tarla">Tarla</label>' +
                '<input type="radio" class="btn-check" name="tipoptions" id="bag" autocomplete="off" value="Bağ">' +
                '<label class="btn btn-outline-light" for="bag">Bağ</label>' +
                '</div>' +

                '<hr>' +

                '<div class="tapualani">' +
                '<h5 class="text-info">Tapu Tipi</h5>' +
                '<input type="radio" class="btn-check" name="tapuoptions" id="mulkiyet" autocomplete="off" value="Mülkiyetli">' +
                '<label class="btn btn-outline-light" for="mulkiyet">Mülkiyetli</label>' +
                '<input type="radio" class="btn-check" name="tapuoptions" id="irtifak" autocomplete="off" value="İrtifaklı">' +
                '<label class="btn btn-outline-light" for="irtifak">İrtifaklı</label>' +
                '<input type="radio" class="btn-check" name="tapuoptions" id="hisse" autocomplete="off" value="Hisseli">' +
                '<label class="btn btn-outline-light" for="hisse">Hisseli</label>' +
                '</div>' +

                '<hr>' +

                '<div class="takasalani">' +
                '<h5 class="text-info">Takas</h5>' +
                '<input type="radio" class="btn-check" name="takasoptions" id="evet" autocomplete="off" value="Evet">' +
                '<label class="btn btn-outline-light" for="evet">Evet</label>' +
                '<input type="radio" class="btn-check" name="takasoptions" id="hayir" autocomplete="off" value="Hayır">' +
                '<label class="btn btn-outline-light" for="hayir">Hayır</label>' +
                '</div>' +

                '<hr>' +

                '<div class="fiyatalani">' +
                '<h5 class="text-info">Fiyat Bilgisi</h5>' +
                '<div class="input-group">' +
                '<input type="number" class="form-control border border-dark" name="fiyat">' +
                '<span class="input-group-text fw-bold">TL</span>' +
                '</div>' +
                '</div>' +

                '<hr>' +

                '<div class="baslikalani">' +
                '<h5 class="text-info">Başlık Ekleyin</h5>' +
                '<div class="input-group">' +
                '<input type="text" class="form-control border border-dark" name="baslik">' +
                '</div>' +
                '</div>' +
                '<hr>' +
                '<div class="ozellikalani">' +
                '<h5 class="text-info">Özellikler</h5>' +
                '<div class="input-group my-5">' +
                '<input type="number" class="form-control border border-dark text-center mx-2"placeholder="Metre Karesi:" name="metre">' +
                '</div>' +
                '</div>';
        }
        else if (selectedValue === 'İşyeri') {
            innerHTML =
                '<div class="isyeritipialani">' +
                '<h5 class="text-info">İşyeri Tipi</h5>' +
                '<input type="radio" class="btn-check" name="tipoptions" id="dukkan" autocomplete="off" value="Dükkan">' +
                '<label class="btn btn-outline-light" for="dukkan">Dükkan</label>' +
                '<input type="radio" class="btn-check" name="tipoptions" id="ofis" autocomplete="off" value="Ofis">' +
                '<label class="btn btn-outline-light" for="ofis">Ofis</label>' +
                '<input type="radio" class="btn-check" name="tipoptions" id="plaza" autocomplete="off" value="Plaza">' +
                '<label class="btn btn-outline-light" for="plaza">Plaza</label>' +
                '</div>' +

                '<hr>' +

                '<div class="durumalani">' +
                '<h5 class="text-info">İlan Durumu</h5>' +
                '<input type="radio" class="btn-check" name="durumoptions" id="sıfır" autocomplete="off" value="Sıfır">' +
                '<label class="btn btn-outline-light" for="sıfır">Sıfır</label>' +
                '<input type="radio" class="btn-check" name="durumoptions" id="2el" autocomplete="off" value="2.El">' +
                '<label class="btn btn-outline-light" for="2el">2.El</label>' +
                '<input type="radio" class="btn-check" name="durumoptions" id="3el" autocomplete="off" value="3.El">' +
                '<label class="btn btn-outline-light" for="3el">3.El</label>' +
                '</div>' +

                '<hr>' +

                '<div class="tapualani">' +
                '<h5 class="text-info">Tapu Tipi</h5>' +
                '<input type="radio" class="btn-check" name="tapuoptions" id="mulkiyet" autocomplete="off" value="Mülkiyetli">' +
                '<label class="btn btn-outline-light" for="mulkiyet">Mülkiyetli</label>' +
                '<input type="radio" class="btn-check" name="tapuoptions" id="irtifak" autocomplete="off" value="İrtifaklı">' +
                '<label class="btn btn-outline-light" for="irtifak">İrtifaklı</label>' +
                '<input type="radio" class="btn-check" name="tapuoptions" id="hisse" autocomplete="off" value="Hisseli">' +
                '<label class="btn btn-outline-light" for="hisse">Hisseli</label>' +
                '</div>' +

                '<hr>' +

                '<div class="isinmaalani">' +
                '<h5 class="text-info">Isınma Tipi</h5>' +
                '<input type="radio" class="btn-check" name="isinmaoptions" id="gaz" autocomplete="off" value="Doğalgaz">' +
                '<label class="btn btn-outline-light" for="gaz">Doğalgaz</label>' +
                '<input type="radio" class="btn-check" name="isinmaoptions" id="elektrik" autocomplete="off" value="Elektrik">' +
                '<label class="btn btn-outline-light" for="elektrik">Elektrik</label>' +
                '</div>' +

                '<hr>' +

                '<div class="takasalani">' +
                '<h5 class="text-info">Takas</h5>' +
                '<input type="radio" class="btn-check" name="takasoptions" id="evet" autocomplete="off" value="Evet">' +
                '<label class="btn btn-outline-light" for="evet">Evet</label>' +
                '<input type="radio" class="btn-check" name="takasoptions" id="hayir" autocomplete="off" value="Hayır">' +
                '<label class="btn btn-outline-light" for="hayir">Hayır</label>' +
                '</div>' +

                '<hr>' +

                '<div class="fiyatalani">' +
                '<h5 class="text-info">Fiyat Bilgisi</h5>' +
                '<div class="input-group">' +
                '<input type="number" class="form-control border border-dark" name="fiyat">' +
                '<span class="input-group-text fw-bold">TL</span>' +
                '</div>' +
                '</div>' +

                '<hr>' +

                '<div class="baslikalani">' +
                '<h5 class="text-info">Başlık Ekleyin</h5>' +
                '<div class="input-group">' +
                '<input type="text" class="form-control border border-dark" name="baslik">' +
                '</div>' +
                '</div>' +

                '<hr>' +

                '<div class="ozellikalani">' +
                '<h5 class="text-info">Özellikler</h5>' +
                '<div class="input-group">' +
                '<input type="number" class="form-control border border-dark text-center me-3" placeholder="Oda sayısı:" name="oda">' +
                '<input type="number" class="form-control border border-dark text-center" placeholder="Konutun yaşı:" name="yas">' +
                '</div>' +
                '<div class="input-group my-5">' +
                '<input type="number" class="form-control border border-dark text-center mx-2"placeholder="Metre Karesi:" name="metre">' +
                '<input type="number" class="form-control border border-dark text-center mx-2"placeholder="Kaçıncı Kat:" name="kat">' +
                '</div>' +
                '</div>';
        }

        document.querySelector('#result').innerHTML = innerHTML;
    });
}