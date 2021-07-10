# Path-Case
   # Case 1 - Yazılım Temelleri, PHP ve Algoritma
Verilen bir string içerisindeki kelimeleri son harfine göre sıralayıp döndüren bir php fonksiyonu
yazmanı bekliyoruz.
Bu fonksiyon aşağıdaki gibi olmalıdır. String bir parametre alıp, array cinsinden bir sonuç
döndürmelidir. Dönen array içerisinde sıralanmış bir şekilde stringler yani verdiğimiz cümle
içerisindeki kelimeler olmalıdır. Eğer son harfi aynı olan iki kelime var ise, bu kelimeler cümledeki
sırasına göre sıralanmalıdır.
OOP standartlarına uygun şekilde bir class olarak yazılırsa daha iyi bir sonuç olacaktır ancak şart değil.
-Örnek girdiler ve çıktılar
'Mehmet bugün bir yazılım yapacak' => ['yapacak', 'yazılım', 'bugün', 'bir', 'Mehmet']
'Yazılım geliştirmek ve algoritma üretmek çok zevkli bir iş' => ['algoritma', 've', 'zevkli', 'geliştirmek',
'üretmek', 'çok', 'Yazılım', 'bir', 'iş']
'' => []
String dışında bir parametre verildiğinde hata vermesini bekliyoruz. Yanlış Parametre şeklinde.
yazılması.
   # Case 2 - API Kullanımı ve Front-End
	 https://apidocs.cheapshark.com/ API kullanılarak isminde batman geçen oyunlardan indirim olan
oyunları listeleyen ve en yüksek indirime göre indirim oranını belirten, normal fiyatı ile indirimli
fiyatını da gösteren bir web sayfası tasarlanacak. Bu web sayfası HTML5 ve bootstrap-4 teknolojisini
kullanmalı (CDN kullanılmamalı), javascript ile api'a bağlanıp verileri çekebilmeli. JS tarafında istenilen
teknoloji kullanılabilir.
Tasarım olarak https://www.figma.com/community/file/777205710295345433 adresindeki içerisinde
fiyat olan card tasarımlarından uygun bulduğunu alıp düzenleyerek kullanabilirsin.
Sayfayı açar açmaz karşımızda cardlardan oluşan batman oyunlarını görmeliyiz, sayfa mobil/tablet vb.
Çözünürlüklerde de düzgün olarak görüntülenebilmeli.
API için kullanım örnekleri:
 https://www.cheapshark.com/api/1.0/games?title=batman&limit=60&exact=0 // içerisinde
batman geçen oyunların listesi
 https://www.cheapshark.com/api/1.0/games?id=612 // ids verilen oyunun fiyatları
 https://www.cheapshark.com/api/1.0/deals?id=tyTH88J0PXRvYALBjV3cNHd5Juq1qKcu4tG4l
BiUCt4%3D // idi verilen fiyatın detayları

# - Projeyi Çalıştırdığınızda ;
  - Çıkan ilk ekranda sizden case seçimi yapmanız istenecektir.
 
 Not : JS dosyaları assets/js/script.js dosyasında bulunmaktadır.
  







