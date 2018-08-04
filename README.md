# Yaz-Kamp-Linux-2018
Yaz kampı linuxdaki günlük php çalışmalarım.

Bakmam Gerekenler
    - PSR (PHP STANDART )
    - Composer
    - Php the right way
    - Migration at laravel
    - tdd ( test driven development )
    - vender


Tavsiyeler
1- İngilizce
2- Kaynak Kod Okuma
3- Bol bol uygulama geliştirme  
5- Uygulama yapmaya başlamadan önce yorum satırlarıyla ne yapmamız gerektiğini planlamak
4- Yılmamak


Çalışmam Gereken Noktalar:
    1- Session ve Cookie ile oturum işlemi
    2- PDO ile admin işlemleri güncelle, sil gibi komutların nasıl işlendiğini öğrenme.
    3- Object orianted
    4- Composer
    5- Mvc


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

    CRUD işlemleri yapıyoruz(Create, Read, Update, Delete
    )
    Biz ya phpmyadmin ya da adminer php kullanıyoruz. 

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

    Sıralama için ORDER BY ad DESC, soyad DESC
        desc => azalan
        asc  => artan

    select count(id) as count from articles => id sütünunda kaç tane satır varsa onun değerini dönecektir.


11- PDO (Php Data Object)


    1- Veritabanına bağlantı
        $pdo = new PDO("mysql:host=sunucu;dbname=oyk_2018_blog;charset=utf8", "root", "root");  

    2- $connection->fetch()
        Bu ifade sadece ilk satırı getiri

    3- $connection->fetch(PDO::FECTH_ASSOC) Dizi tipinde geri döndürür. 
       $connection->fetch(PDO::FECTH_OBJ) Obje tipinde geri döndürür.


    4- fetchall tüm diziyi almak istediğimizde kullanıyoruz

    5- $connection->query("SELECT * FROM articles ORDER BY id DESC)

    6-  prepare ve execute kullanımı
        prepare ile sorguyu hazırlıyoruz
        sonrasında bu sorguyu çalıştırmak istediğimiz zaman execute methodunu kullanırız.

        prepare ile sorgu yazdığımızda eğer bir değişken var ise ($_GET['user_id']) 
        sorgu içerisinde ? işareti ile yada :indis yazıp bunu execute(array('indis'=> value)) olarak belirtlebiliyoruz.

        $connection->prepare("SELECT * FROM articles WHERE id=:id");
        $connection->execute(array('id'=$_GET['user_id']));

        şeklinde kullanıyoruz.

        prepare'ı güvenlik nedeni ile ve daha efektif olduğu için kullanmaktayız.
        prepare yerine query methoduda kullanabiliriz fakat sql injection olma ihtimaline karşın değişkenleri prepare methodunda daha güvenli halde çalıştırabiliyoruz.
        execute ise tanımladığımız sorguyu çalıştırmaya yarıyor.


    5-  exec sorgudan dönen satır sayısını döndürür.
    

12- Php de ekrana birşey basmadığımız(html) sürece php etiketini kapatmamız doğru olmaz.

13- Php sihirli sabitler

    __DIR__  => şuanda  bulunduğumuz dizini veriyor.
    <?php include __DIR__."/../header.php"; ?>


14- bütün çıktılar için verilerin heasplanması bitmeden çıktıya odaklanmamız gerekir.
yaptığımız hesaplamara sonucu views sayfasında sonucu elde ettiğimiz değişkenleri o zaman ekrana basarız.


15- Fetch ile fetch all arasındaki fark.

    1.yol

    while($satir = $butunSatirlariSorgula->fetch(PDO::FETCH_OBJ){
     echo $satir->$title  " .  <br>;
    }

    2.yol

    $butunSatirlar = 



16- Klavye Kısayolları

    crtl shift l => seçili olanların en sağına imleci koyuyuor.


17- Bir sınıftan yeni bir obje oluşturulduğu anda ilk çalışan kod parçacıklarıdır.

