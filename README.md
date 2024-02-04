# Furkan Emlak

Kullanıcıların siteye giriş yaparak ilanlar içerisinden filtreleme ve arama yaparak istediği ilanları bulup favorilere ekleyerek kullandığı bir Emlak sitesi projesidir

# Teknolojiler

Php,Laravel,Sql,Boostrap

# Run

1: ilk olarak dosyayıyı indirin ve zip'ten çıkartın

#

2: editörde açın ve composer install komutunu çalıştırın (composer yüklü olmalıdır) bu tüm bağımlılıkları yükleyecektir

#

3: kök klasörde .env dosyası oluşturun içeriğini .env.example içerisinden kopyalabilirsiniz

#

4: php artisan key:generate komutunu çalıştırın (hata alırsanız .env dosyasındaki App_key kısmının karşılığını silin tekrar deneyin) keyiniz buraya gelmelidir

#

5: mysql veritabanınızda emlakdb adında bir tablo oluşturun gerekiyorsa env dosyasındaki database bilgilerini yazın veya güncelleyin

#

6: php artisan migrate:refresh komutunu çalıştırın bu gerekli tablo ve sütunları oluşturacaktır

#

7: php artisan serve komutu ile projeyi çalıştırın ve çalıştırdığınız url'yi ziyaret edin

#

8: admin paneli için kayıt olma kısmına gidip kullanıcı adı:admin pass:12345 (e-Posta:önemli değil) hesabınızı oluşturun

#

9: artık hesabım kısmında paneli görmelisiniz buradan ilan ekleyip,silip,güncelleyebilirsiniz

#

10: evet artık hazırsınız
