#Day-11

<h1>Cookie</h1>

    Cookie'den gelen veriye güvenilemez.
    Sadece çerezlik bilgileri cookiede tutmalıyız.
    Tarayıcıda saklanır.
    Kişiye özel veri saklanabilir. 
    Cookie de oturum anahtarı saklanır.

<p>Tarayıcılarımız web sitelerine dair kimi verileri kayıtlı tutabilir ve bu siteye talep yolladığınız her sefer bu çerez bilgilerini de http talebinin içerisine ekler. Tarayıcılar web sitelerinden gelen yanıtların içinde yeni bir cookie(çerez) atamasının bilgisini alabilir. Bundan sonra yolladığı her talepte çerez bilgilerinide http talebine eklemiş olacaktır. Tarayıcı çerezleri yalnızca metin bilgilerini saklar. Ve her çerez için yaşam ömrü belirlenebilir.</p>

<p>Çerezler kullanıcının tarayıcı üstünde kayıtlı old dan müdehaleye açıktır. bu yüzden hassas bilgiler, kritik işlemler için yetkilendirmeler ASLA ÇEREZ ÜZERİNDE TUTULMAMALI, KONTROL EDİLMEMELİDİR.</p>


<h1>The Cookies in Php</h1>

<p>Php tarafında gelen her Http talebinde talebin içindeki çerez verisi parçalanarak süper global $_COOKIE içerisine yerleştirilir. Yani eğer gelen talebin içinde herhangi bir çerez bilgisi varsa doğrudan $_COOKIE dizisinin içine eklenecektir. Buradan direkt erişip, kullanabiliriz.</p>

<p>Php tarafında gönderilen http yanıtının içerisine bir cookie ataması belirtmek için setcookie(...) fonksiyonu kullanılır.Setcookie fonksiyonu ilk parametre olarak atanacak çerezin adını, ikinci parametre olarak ilgili çerezin değerini metin halinde. Ve eğer istenirse üçüncü parametreyi çerezenin ömrünün dolacağı zamanı 
setcookie('background','red',time()+60) => bu konksiyonu 60 sn. sonra dolacak.</p>

<p>Not: Setcookie fonksiyonu $_COOKIE süper değişkenine doğrudan veri eklemez.Yalnızca tarayıcıya çerez ekleme emrinin gitmesini sağlar. Bu çerez tarayıcıdan gelen bir sonraki talepte talebin içinde bulunucağı için işte o zaman $_COOKIE süper değişkenin içine atanacaktır. </p>