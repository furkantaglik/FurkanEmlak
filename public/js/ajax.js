// Değişkenlerin tanımlanması
const filtreForm = document.getElementById('filtreform');
const filtreBtn = document.getElementById('filtrebtn');

const kaydedilenForm = document.getElementById('kaydedilenform');
const kaydedilenBtn = document.getElementById('kaydedilenbtn');

const araFormList = document.getElementsByClassName('araform');
const araBtnList = document.getElementsByClassName('arabtn');

const resultElement = document.getElementById('sonuc');
const kullaniciBilgi = document.getElementById('kullanicibilgi');

// Sayfa yüklendiğinde AJAX isteği gönderme
sendAjaxRequest(new FormData(filtreForm));

// AJAX isteği gönderme işlemleri
function sendAjaxRequest(formData) {
  const xhr = new XMLHttpRequest();
  const url = '/emlak/php/ilanlar.php';
  xhr.open('POST', url);


  xhr.onload = function () {
    if (xhr.status === 200) {
      resultElement.innerHTML = xhr.responseText;
      begenforms();
    }
  };

  xhr.onerror = function () {
    console.log('AJAX hatası!');
  };

  try {
    formData.append('kullanici_id', kullaniciBilgi.value);
    formData.append('kullanici_adi', kullaniciBilgi.name);
    xhr.send(formData);
  }
  //kullanıcı bilgileri yoksada formu göndermesi için
  catch {
    xhr.send(formData);
  }
}

// Ara form submit işlemleri
for (let i = 0; i < araform.length; i++) {
  araform[i].addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    formData.append(arabtn[i].name, arabtn[i].value);
    sendAjaxRequest(formData);
  });
}

// Kaydedilen form submit işlemleri
kaydedilenForm.addEventListener('submit', function (event) {
  event.preventDefault();
  const formData = new FormData(kaydedilenForm);
  formData.append(kaydedilenBtn.name, kaydedilenBtn.value);
  sendAjaxRequest(formData);
  window.scrollTo(0, 0)
});

// Filtre form submit işlemleri
filtreForm.addEventListener('submit', function (event) {
  event.preventDefault();
  const formData = new FormData(filtreForm);
  formData.append(filtreBtn.name, filtreBtn.value);
  sendAjaxRequest(formData);
  window.scrollTo(0, 0)
});

//beğen form submit işlemi
function begenforms() {
  const begenButtons = document.querySelectorAll("button[name='begen']");

  begenButtons.forEach(button => {
    button.addEventListener('click', function (event) {
      event.preventDefault();
      const formData = new FormData();
      formData.append(button.name, button.value);

      sendAjaxRequest(formData);
      console.log(button.value, button.name);
    });
  });
}