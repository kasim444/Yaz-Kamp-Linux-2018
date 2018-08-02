<h1>Php de Oturum Yönetimi = Session</h1>
    - Sessionlar sunucuda saklanır. 
    - Sessionda kullanıcı id'lerini tutarız.
    - Güvenilir bir depo alanı fakat her şeyi oraya göndermemiz gerek.
    - Session'daki bilgiler server tarafındaki ram'de çalışır.

<p>Php de ilgili ziyaret, oturuma özgü veriler oturum yönetimi dediğimiz SESSION üzerinde tutulabilir. Bir php işlemi içinde oturum verilerine erişebilmek,yeni ekleyebilmek, düzenleyebilmek ve silebilmek için öncelikle <b>session_start()</b> fonksiyonu kullanılmalıdır.</p>
<p>Bu fonksiyon çalıştırıldığında php öncelikle çerezler içerisinde bir Php oturum anahtarı oluğ olmadığına bakar. Eğer bu anahtar varsa bilirki bu anahtara atanmış oturum deposu var ve bu depo üzerinde işlem yapmaya imkan kılar. Ancak çerezlerin içerisinde bu anahtar yok ise yeni bir oturum deposu açar. Oturum veri işlemlerini yapacağı bu anahtarı tarayıcıya çerez olarak gönderir. </p>
<p>Sessionda saklanan tüm veriler sunucu taraflı saklanır. Ve cookiedeki gibi kullanıcının erişip düzenlemesi münkün değildir. Cookie'den farklı olarak sessionda diğer php veri tipleride saklabilir.(örneğin bir diziyi saklayabiliriz.) </p>

$_SESSION['indis'] = 1;
bu şekilde sessionda sakladığımız bir değişkeni kullanabiliriz.

session_destroy() => hem depo hemde kullanıcının tarayıcısındaki anahtarı siler.