<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
 
## About Project

daha önce yaptığım emlak sitesi projesinin laravel ile yanilenmiş hali

## Çalıştırma

1: ilk olarak dosyayıyı indirin ve zip'ten çıkartın
2: editörde açın ve composer install komutunu çalıştırın (composer yüklü olmalıdır) bu tüm bağımlılıkları yükleyecektir
3: kök klasörde .env dosyası oluşturun içeriğini .env.example içerisinden kopyalabilirsiniz
4: php artisan key:generate komutunu çalıştırın (hata alırsanız .env dosyasındaki App_key kısmının karşılığını silin tekrar deneyin) keyiniz buraya gelmelidir
5: mysql veritabanınızda emlakdb adında bir tablo oluşturun gerekiyorsa env dosyasındaki database bilgilerini yazın veya güncelleyin
6: php artisan migrate:refresh komutunu çalıştırın bu gerekli tablo ve sütunları oluşturacaktır
7: php artisan serve komutu ile projeyi çalıştırın ve çalıştırdığınız url'yi ziyaret edin
8: admin paneli için kayıt olma kısmına gidip kullanıcı adı:admin pass:12345 (e-Posta:önemli değil) hesabınızı oluşturun
9: artık hesabım kısmında paneli görmelisiniz buradan ilan ekleyip,silip,güncelleyebilirsiniz
10: evet artık hazırsınız :)


