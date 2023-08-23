////seçilen ilan türüne göre çıktı yazdırılır
const ilanoptions = document.querySelectorAll('input[name="ilanturu"]');
for (let i = 0; i < ilanoptions.length; i++) {
  ilanoptions[i].addEventListener('change', function () {
    const selectedValue = this.value;
    let innerHTML = '';

    if (selectedValue === 'Konut') {
      innerHTML =
        '<strong class="fw-semibold text-danger">KONUT TİPİ</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="tipoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Daire">Daire</option>' +
        '<option value="Müstakil">Müstakil</option>' +
        '<option value="Villa">Villa</option>' +
        '</select>' +
        '<strong class="fw-semibold text-danger">İLAN DURUMU</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="durumoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Sıfır">Sıfır</option>' +
        '<option value="2.El">2.EL</option>' +
        '<option value="3.El">3.EL</option>' +
        '</select>' +

        '<strong class="fw-semibold text-danger">FİYAT</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mb-3 mt-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="fiyataz" name="fiyataz">' +
        '<label for="fiyataz">En az TL..</label>' +
        '</div>' +
        '<div class="form-floating mb-3 mt-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="fiyatcok" name="fiyatcok">' +
        '<label for="fiyatcok">En çok TL..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">ODA SAYISI</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="odaaz" name="odaaz">' +
        '<label for="odaaz">Oda en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="odacok" name="odacok">' +
        '<label for="odacok">Oda en çok..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">SALON SAYISI</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="salonaz" name="salonaz">' +
        '<label for="salonaz">Salon en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="saloncok" name="saloncok">' +
        '<label for="saloncok">Salon en çok..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">KAT</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="kataz" name="kataz">' +
        '<label for="kataz">Kat en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="katcok" name="katcok">' +
        '<label for="katcok">Kat en çok..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">METRE KARE</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="metreaz" name="metreaz">' +
        '<label for="metreaz">Metrekare en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="metrecok" name="metrecok">' +
        '<label for="metrecok">Metrekare en çok..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">YAPININ YAŞI</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="yasaz" name="yasaz">' +
        '<label for="yasaz">Yaş en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="yascok" name="yascok">' +
        '<label for="yascok">Yaş en çok..</label>' +
        '</div>' +
        '</li>' +

        '<strong class="fw-semibold text-danger">TAPU TİPİ</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="tapuoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Hisseli">Hisseli</option>' +
        '<option value="Mülkiyetli">Mülkiyetli</option>' +
        '<option value="İrtifaklı">İrtifaklı</option>' +
        '</select>' +
        '<strong class="fw-semibold text-danger">ISINMA TİPİ</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="isinmaoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Elektrik">Elektrik</option>' +
        '<option value="Doğalgaz">DoğalGaz</option>' +
        '</select>' +
        '<strong class="fw-semibold text-danger">TAKAS DURUMU</strong>' +
        '<select class="form-select w-50 p-2" name="takasoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Evet">Evet</option>' +
        '<option value="Hayır">Hayır</option>' +
        '</select>';

    }
    else if (selectedValue === 'Arsa') {
      innerHTML =
        '<strong class="fw-semibold text-danger">ARSA TİPİ</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="tipoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Bahçe">Bahçe</option>' +
        '<option value="Tarla">Tarla</option>' +
        '<option value="Bağ">Bağ</option>' +
        '</select>' +

        '<strong class="fw-semibold text-danger">FİYAT</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mb-3 mt-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="fiyataz" name="fiyataz">' +
        '<label for="fiyataz">En az TL..</label>' +
        '</div>' +
        '<div class="form-floating mb-3 mt-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="fiyatcok" name="fiyatcok">' +
        '<label for="fiyatcok">En çok TL..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">METRE KARE</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="metreaz" name="metreaz">' +
        '<label for="metreaz">Metrekare en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="metrecok" name="metrecok">' +
        '<label for="metrecok">Metrekare en çok..</label>' +
        '</div>' +
        '</li>' +

        '<strong class="fw-semibold text-danger">TAPU TİPİ</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="tapuoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Hisseli">Hisseli</option>' +
        '<option value="Mülkiyetli">Mülkiyetli</option>' +
        '<option value="İrtifaklı">İrtifaklı</option>' +
        '</select>' +
        '<strong class="fw-semibold text-danger">TAKAS DURUMU</strong>' +
        '<select class="form-select w-50 p-2" name="takasoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Evet">Evet</option>' +
        '<option value="Hayır">Hayır</option>' +
        '</select>';
      ;
    }
    else if (selectedValue === 'İşyeri') {
      innerHTML =
        '<strong class="fw-semibold text-danger">İŞYERİ TİPİ</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="tipoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Dükkan">Dükkan</option>' +
        '<option value="Ofis">Ofis</option>' +
        '<option value="Plaza">Plaza</option>' +
        '</select>' +
        '<strong class="fw-semibold text-danger">İLAN DURUMU</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="durumoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Sıfır">Sıfır</option>' +
        '<option value="2.El">2.EL</option>' +
        '<option value="3.El">3.EL</option>' +
        '</select>' +

        '<strong class="fw-semibold text-danger">FİYAT</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mb-3 mt-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="fiyataz" name="fiyataz">' +
        '<label for="fiyataz">En az TL..</label>' +
        '</div>' +
        '<div class="form-floating mb-3 mt-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="fiyatcok" name="fiyatcok">' +
        '<label for="fiyatcok">En çok TL..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">ODA SAYISI</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="odaaz" name="odaaz">' +
        '<label for="odaaz">Oda en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="odacok" name="odacok">' +
        '<label for="odacok">Oda en çok..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">KAT</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="kataz" name="kataz">' +
        '<label for="kataz">Kat en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="katcok" name="katcok">' +
        '<label for="katcok">Kat en çok..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">METRE KARE</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="metreaz" name="metreaz">' +
        '<label for="metreaz">Metrekare en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="metrecok" name="metrecok">' +
        '<label for="metrecok">Metrekare en çok..</label>' +
        '</div>' +
        '</li>' +
        '<strong class="fw-semibold text-danger">YAPININ YAŞI</strong>' +
        '<li class="d-flex">' +
        '<div class="form-floating mt-3 mb-3 w-50 me-3">' +
        '<input type="number" class="form-control" placeholder="." id="yasaz" name="yasaz">' +
        '<label for="yasaz">Yaş en az..</label>' +
        '</div>' +
        '<div class="form-floating mt-3 mb-3 w-50">' +
        '<input type="number" class="form-control" placeholder="." id="yascok" name="yascok">' +
        '<label for="yascok">Yaş en çok..</label>' +
        '</div>' +
        '</li>' +

        '<strong class="fw-semibold text-danger">TAPU TİPİ</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="tapuoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Hisseli">Hisseli</option>' +
        '<option value="Mülkiyetli">Mülkiyetli</option>' +
        '<option value="İrtifaklı">İrtifaklı</option>' +
        '</select>' +
        '<strong class="fw-semibold text-danger">ISINMA TİPİ</strong>' +
        '<select class="form-select w-50 p-2 mb-3" name="isinmaoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Elektrik">Elektrik</option>' +
        '<option value="Doğalgaz">DoğalGaz</option>' +
        '</select>' +
        '<strong class="fw-semibold text-danger">TAKAS DURUMU</strong>' +
        '<select class="form-select w-50 p-2" name="takasoptions" aria-label="Default select example">' +
        '<option disabled selected>Seçiniz..</option>' +
        '<option value="Evet">Evet</option>' +
        '<option value="Hayır">Hayır</option>' +
        '</select>';
    }

    document.querySelector('#result').innerHTML = innerHTML;
  });
}

//konum scriptleri

//seçilen konuma göre uygun mahalle ve ilçeler getirilir
function activateSecondSelect(select) {
  var ilceSelect = document.getElementById("ilce");
  ilceSelect.disabled = false;
  ilceSelect.innerHTML = '<option class="bg-dark text-light" disabled selected>Bir İlçe Seçin..</option>';

  var mahalleSelect = document.getElementById("mahalle");
  mahalleSelect.disabled = true;
  mahalleSelect.innerHTML = '<option class="bg-dark text-light" disabled selected>Bir Mahalle Seçin..</option>';

  if (select.value === "İstanbul") {
    var ilceler = ["Küçükçekmece"];
  } else if (select.value === "Ankara") {
    var ilceler = ["Mamak"];
  } else if (select.value === "İzmir") {
    var ilceler = ["Çeşme"];
  } else if (select.value === "Antalya") {
    var ilceler = ["Alanya"];
  } else if (select.value === "Eskişehir") {
    var ilceler = ["Tepebaşı"];
  }

  for (var i = 0; i < ilceler.length; i++) {
    var option = document.createElement("option");
    option.value = ilceler[i];
    option.text = ilceler[i];
    ilceSelect.appendChild(option);
  }
}


function activateThirdSelect(select) {
  var mahalleSelect = document.getElementById("mahalle");
  mahalleSelect.disabled = false;
  mahalleSelect.innerHTML = '<option class="bg-dark text-light" disabled selected>Bir Mahalle Seçin..</option>';

  if (select.value === "Küçükçekmece") {
    var mahalleler = ["İnönü"];
  } else if (select.value === "Mamak") {
    var mahalleler = ["Hürriyet"];
  } else if (select.value === "Çeşme") {
    var mahalleler = ["Yıldız"];
  } else if (select.value === "Alanya") {
    var mahalleler = ["Çağlayan"];
  } else if (select.value === "Tepebaşı") {
    var mahalleler = ["Çamlıca"];
  } else {
    var mahalleler = ["Bir Mahalle Seçin.."];
  }

  for (var i = 0; i < mahalleler.length; i++) {
    var option = document.createElement("option");
    option.value = mahalleler[i];
    option.text = mahalleler[i];
    mahalleSelect.appendChild(option);
  }
}