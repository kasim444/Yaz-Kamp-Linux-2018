# Yaz-Kamp-Linux-2018
Yaz kampı linuxdaki günlük php çalışmalarım.

Tavsiyeler
1- İngilizce
2- Kaynak Kod Okuma
3- Bol bol uygulama geliştirme  
5- Uygulama yapmaya başlamadan önce yorum satırlarıyla ne yapmamız gerektiğini planlamak
4- Yılmamak

Notlar:

1- Bir fonksiyonda oluşturulup return ile geri döndürülen bir dizi ya da değişkeni fonksiyonu çalıştırmamıza rağmen( fonksiyonIsmi() olarak ) o değişkeni ( $fonksiyonIleDondurulmusDegisken ) dışarıda direkt olarak kullanamıyoruz $fonksiyonIleDondurulmusDegisken o değişkenide bir başka değişkene atayıp o sayede dışarıda kullanabiliyoruz.( 
$disaridaKullanmakIcın = fonksiyonIleDondurulmusDegisken ) 

Bu sayede fonksiyondan return ile geri döndürülmüş fonksiyonu artık yeni bir değişkene atayıp  $disaridaKullanmakIcın istediğimiz gibi işlem yapabiliyoruz.

    function sayiDondur(){
     $sayi = rand(1,100);
     return $sayi;
    }
    $geriDonenSayi = sayiDondur();
    echo $geriDonenSayi;



2- Dosyaları okuma, yazma işlemleri iki farklı yol ile gerçekleştirilebilir.

    a) fopen,fwrite,fclose
    b) file_get_contents,file_put_contents

        fopen = file_get_contents
        fwrite = file_put_contents


3- Bir json datası ile veri güncelleme yada veri çekme işlemi yapılacaksa ilk olarak o değişken setini json tipine dönüştürme yada json tipinden array tipine dönüştürme işlemi yapılması gerekli.

    - json_encode($degisken)
    - json_decode($degisken,true)


4- header(Location index.html)

5- tüm verilerin bulunduğu diziden bu indise sahip elemanı silmek için

    unset($dizimiz[$bulunduğu_indisi])

6- onclick olayında kullanıcından bir onay alınması gerekiyorsa
    return confirm("Silmek istiyormsuunz");

7- php de kontrol yapıldığı halde(isset) bir veri yok ise die("Söylenecek echo stringi") kullanırız

8- init.php de :
    a) data.php
    b) functions.php
    c) session_start() ların hepsini tutarız.
    Sonrasında ise init.php'yi tüm sayfaların en üstünde require_once ile çağırırız.  

9- Hash :  
    hash("sha256",$_POST['adminPassword'])
    Eşleştirmemiz gereken hassas veriler için hashleme kullanırız.
    Özel bir veriyi(parolayı) özetlemeye yarar.
    Tek yönlüdür.
    Şifreleme değildir.
    Kriptolama değildir.
    Özet fonksiyonu ile f($sifre)=$özet_çıktı

10- Sql => Yapılandırılmış Sorgu Dili

    Veritabanı sunucusudur. Php den tamamen bağımsızdır.

    Not: unique değerlerini primary_key i belirlerken gerçek verileri kullanmamız iyi olmaz.
    Gerçek veriler daha sonra tekrarlabileceği için auto inc kullanmamız daha iyi olur.

    Php de mysql e bağlantı yaparız. 
    Gelen veriler resource tipindedir.
    - select * from ogrenciler ; 
    - insert into ogrenciler (ogrenci_no,ad,soyad,yas,boy) values (11,"kasim","şen",25,178) ;
    - update ogrenciler set ad="mahmut" where id=3 limit 0,10;
    - delete from ogrenciler where id=5 order by ad desc;

    limit belirlemek için : 10,10 => 10 dan atla 
    select * from ogrenciler limit 0,3 => olarak belirleyebiliyoruz.
    
    Örnek = 
    
    $sayfaAdedi = 10;
    $sayfa = $_GET['kacinciSayfadayız];
    $pass =($sayfa-1) * $sayfaAdedi ;
    select * from ogrenciler limit $pass,$sayfaAdedi;

    Bir tablomuzu farklı bir tablo ile ilişkilendirmek istiyorsak foreign_key ler ile iki tabloyu eşleyebiliyoruz.
