<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Melek Arıcı Psikolojik Danışmanlık | İzmit - KOCAELİ</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/gsdk.css" rel="stylesheet"/>
    <link href="/assets/css/examples.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel|Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
    </script>
</head>

<body class="home">

@include ('front.partials.nav')

<div class="wrapper">
    <div class="parallax filter-black">
        <div class="parallax-image">
            <img src="/assets/img/home1.jpg" alt="Melek Arıcı" />
        </div>

        <div class="small-info">
            <div class="motto image-responsive-width"><img src="/assets/img/logo.png" alt="Melek Arıcı" /></div>
        </div>

    </div>

    <div class="section section-description">
        <div class="container">
            <h2 class="section-title">Psikolojik Danışmanlık</h2>

            <div class="row">
                <div class="col-md-6">
                    <h5>Psikoterapi, Aile ve Oyun Terapisi</h5>
                    <p><b>Melek Arıcı Psikolojik Danışmanlık Hizmetleri</b> Merkezi, yetişkin psikolojik danışmanlığından başlayan, aile, çift, çocuk, çocuklarla oyun terapisi, kariyer danışmanlığı, okul danışmanlığına kadar geniş bir yelpazede psikolojik danışmanlık hizmet vermektedir.</p>
                    <p>Ayrıca bünyesinde barındırdığı Uluslararası eğitimler almış ve akredite eğitimleri tamamlamış koçlar ile liderlere, yöneticilere, öğrencilere bireysel koçluk hizmeti vererek onların potansiyellerini üst seviyede kullanarak güçlü ve etkileyici performans artışı sağlanmasına katkı sağlamaktadır.</p>


                </div>
                <div class="col-md-6">
                    <div id="description-carousel" class="carousel fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/assets/img/home1.jpg" alt="..." />
                            </div>
                            <div class="item">
                                <img src="/assets/img/home2.jpg" alt="..." />
                            </div>
                            <div class="item">
                                <img src="/assets/img/home3.jpg" alt="..." />
                            </div>
                        </div>

                        <ol class="carousel-indicators">
                            <li data-target="#description-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#description-carousel" data-slide-to="1"></li>
                            <li data-target="#description-carousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="space-50"></div>
            <hr>
            <div class="space-50"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="img-container">
                        <a href="/cocuk-genc-psikolojik-danismanlik-cocuklarla-oyun-terapisi">
                            <img src="/assets/img/home5.jpg" alt="Çocuklarla Oyun Psikoterapisi" />
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>ÇOCUKLARLA OYUN TERAPİSİ</h5>
                    <p>Çocuğun kendini ifade etmesi, kuralları kendi deneyimleri ile öğrenme yöntemi, hayal ile gerçek arasında bir köprü, çocuğun iç dünyasının dışa vurumu, gizil enerjinin kullanılması. Çocuğun sosyal ve ahlaki değerleri öğrendiği bir alandır. Çocuğun zeka, beden ve kişilik gelişimini sağlayan en ideal ortamdır, Çocuğun sosyalleşmesine aracıdır, Çocuğun uyum sağlamasına yardımcıdır, yenilik ve değişiklik arzusuna verile bir cevaptır, Oyun genel anlamda kişiliğini bütünüyle etkileyen bir faaliyettir. <a href="/cocuk-genc-psikolojik-danismanlik-cocuklarla-oyun-terapisi">Devamı için tıklayınız...</a></p>

                </div>
            </div>

            <div class="space-50"></div>
            <hr>
            <div class="space-50"></div>

            <div class="row">
                <div class="col-md-6">
                    <h5>AİLE DANIŞMANLIĞI / PSİKOTERAPİ</h5>
                    <p>Aile yaşam döngüsünde karşılaşılan krizler, ailede ölüm ve hastalık gibi travmalar, boşanma, ergen sorunları, aile içi iletişim ve roller, aile sınırları ve bireysel sınır sorunları, çocukların okul sorunları, küçük çocuklu ailelerde anne baba tutumları, ailede yaşanan ölüm, kaza, iflas gibi konularda da aile danışmanlığı almak önemlidir. <a href="/psikolojik-danismanliklar-aile-danismanligi">Devamı için tıklayınız...</a> </p>

                </div>
                <div class="col-md-6">
                    <div class="img-container">
                        <a href="/psikolojik-danismanliklar-aile-danismanligi">
                            <img src="/assets/img/home6.jpg" alt="Aile Psikoterapisi" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="space-50"></div>
            <hr>
            <div class="space-50"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="img-container">
                        <a href="/cocuk-genc-psikolojik-danismanlik-cocuk-genc-bireysel">
                            <img src="/assets/img/home7.jpg" alt="Çocuk - Ergen Psikoterapisi" />
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>ÇOCUK - ERGEN PSİKOTERAPİSİ</h5>
                    <p>Çocuk ve ergen danışmanlığı, çocuk ve gençlerin sahip oldukları yetenek, ilgi ve becerilerinin ortaya çıkmasını, farkındalık geliştirmelerini sağlar. Ayrıca İlkokul, ortaokul ve lise yıllarında gelişime bağlı olarak ortaya çıkan sorunları bireyin nasıl çözebileceği konusunda farkındalık yaratmak bu danışmanlık sürecinin temel hedefidir. Danışmanlık süreci gizlilik ilkelerine bağlı olarak yürütülür. <a href="/cocuk-genc-psikolojik-danismanlik-cocuk-genc-bireysel">Devamı için tıklayınız...</a> </p>

                </div>
            </div>

            <div class="space-50"></div>
            <hr>
            <div class="space-50"></div>

            <div class="row">
                <div class="col-md-6">
                    <h5>ÇİFT PSİKOTERAPİSİ</h5>
                    <p>Evli olan ya da olmayan çiftlerin karşılaştıkları sorunları ele alıp çözüme kavuşturmayı hedef alan bir danışmanlıktır. Bu danışmanlık, uzun süredir bir arada yaşayan çiftlerin veya evliliğe hazırlanan kişilerin ilişki içinde birbirlerinden beklentileri, çözülemeyen sorunlarda iletişim kurmayı sağlama, ilişkilerdeki çatışmaları doğru yönetme konuları ele alınır. Çift danışmanlığında önemli olan bireylerin tek tek kendileri değil, birbirleri ile olan ilişkileridir. <a href="/psikolojik-danismanliklar-cift-danismanligi">Devamı için tıklayınız...</a></p>

                </div>
                <div class="col-md-6">
                    <div class="img-container">
                        <a href="/psikolojik-danismanliklar-cift-danismanligi">
                            <img src="/assets/img/home8.jpg" alt="Çift Psikoterapisi" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="space-50"></div>
            <hr>
            <div class="space-50"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="img-container">
                        <a href="/psikolojik-danismanliklar-yetiskinler-icin-bireysel-psikolojik-danismanlik">
                            <img src="/assets/img/home9.jpg" alt="Bireysel Yetişkin Psikoterapisi" />
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>BİREYSEL YETİŞKİN PSİKOTERAPİSİ</h5>
                    <p>Yetişkinler için bireysel danışmanlıkta, danışan, danışmanın kendisiyle yüz yüze bir sürece girer. Bireysel danışmanlık, kişinin gündelik yaşantısında yaşadığı zorluklarla ve problemlerle başa çıkmasını sağlamak için yapılan çalışmadır. Bu süreç, danışan ve danışmanın birlikte aşabileceği engel ve problemler için tercih edilen yöntemlerden biridir.  <a href="/psikolojik-danismanliklar-yetiskinler-icin-bireysel-psikolojik-danismanlik">Devamı için tıklayınız...</a></p>

                </div>
            </div>

            <div class="space-50"></div>
            <hr>
            <div class="space-50"></div>

            <div class="row">
                <div class="col-md-6">
                    <h5>ANNE BABA OKULU</h5>
                    <p>Kuşak çatışmasının 5 yıla indiği, olumlu-olumsuz her tür uyarana rahatlıkla ulaşılabilen, yoğun çalışma temposu içinde çocuklarımızla yeterince iletişim kuramadığımız günümüz koşullarında, çocuklarımızla daha sağlıklı iletişim kurabilmek, onların duygusal, fiziksel ve zihinsel ihtiyaçlarını doğru tespit edebilmek, yerinde ve zamanında gerekli müdahaleyi yapabilmek için sizleri bu eğitime davet ediyoruz. <a href="/egitimlerimiz-aile-egitimleri-anne-baba-okulu">Devamı için tıklayınız...</a></p>

                </div>
                <div class="col-md-6">
                    <div class="img-container">
                        <a href="/egitimlerimiz-aile-egitimleri-anne-baba-okulu">
                            <img src="/assets/img/home10.jpg" alt="Anne Baba Okulu" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="space-50"></div>
            <hr>
            <div class="space-50"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="img-container">
                        <img src="/assets/img/home11.jpg" alt="Uyguladığımız Test ve Teknikler" />
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>UYGULADIĞIMIZ TEST VE TEKNİKLER</h5>
                    <p>MOXO Performans Testi,
                        WÇZÖ-IV- Weschler Çocuklar için Zeka Testi,
                        Çocuk Rorschach Testi,
                        Frostig Gelişimsel Görsel Algı Testi,
                        Temel Yetenekler Testi 6-8,
                        Temel Kabiliyetler Testi 7-11,
                        Okul Olgunluğu Hazırlık Testi,
                        Denver 2 Gelişimsel Tarama Testi,
                        AGTE,
                        PEA Body Testi,
                        Gessell Gelişim Testi,
                        Bender Gestalt Görsel Motor Algılama Testi,
                        MMPI Kişilik Testi,
                        EMDR,
                        Luisa Düss Psikanalitik Öykü Testi</p>

                </div>
            </div>

        </div>
    </div><!-- section -->

    <div class="space-50"></div>
    <hr>
    <div class="space-50"></div>

    <div class="section">
        <div class="container">
            <h2 class="section-title">Proje ve Etkinlikler</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/proje1.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-8">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/proje2.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-8">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/proje3.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/proje4.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/proje5.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/proje6.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/proje7.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>


            </div>
        </div>
    </div> <!-- end section meet our clients -->

    <div class="social-line">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="https://www.facebook.com/hmelekarici" class="btn btn-round btn-fill btn-social btn-facebook">
                        <i class="fa fa-facebook-square"></i> Facebook
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="https://www.instagram.com/hmelekarici/" class="btn btn-round btn-fill btn-social btn-pinterest">
                        <i class="fa fa-instagram"></i> Instagram
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-gray section-faq">
        <div class="container">
            <h3 class="section-title">Sıkça Sorulan Sorular</h3>
            <div class="row">

                <div class="col-md-6">
                    <h5>İlk Psikolojik Danışmanlık Görüşmesi  (Değerlendirme Görüşmesi)</h5>
                    İlk olarak randevu oluşturmak için yapılan telefon görüşmesinde görüşülmesi istenen konu ve durumla ilgili kısa bir bilgi alınır. Çocuk ve ergenlerle yapılan görüşmelerde ilk seans çocukla, ikinci seans anne babaya geri bildirim vermek üzere toplamda 2 seans birlikte ücretlendirilerek planlanır. Daha sonraki seanslar her biri tek seans olarak değerlendirilir. Bu seansta danışanın yaşadığı sorunun ne olduğu, sorunun kaynakları, psikiyatrik ve medikal durumlar ve Psikolojik Danışmanlığa uygunluk değerlendirilir, olası danışmanlık planı oluşturulmaya çalışılır. Çocuk ile çalışma yapılacaksa aileye bilgi verilir. Genç ile görüşme yapıldıysa gencin onayı alındıktan sonra ilk görüşme ile ilgili bilgi aileye verilir. Bazı durumlarda danışanların uygun başka bir uzmanlığa ( Psikiyatriste, nöroloji uzmanına, fizyoterapiste-duyu terapisine, dil-konuşma bozuklukları uzmanına vb.) yönlendirilmesi gerekebilir.
                </div>

                <div class="col-md-6">
                    <h5>Seansların Süreleri ve Görüşme Periyodu</h5>
                    Seanslar danışma alanına göre 45-90 dakika sürer. Haftada bir seans yapılır. Danışmanlık konusunun aciliyetine ve durumuna göre haftalık seans sayısının arttırılması önerilir. Danışmanlık sürecinde belirlenen amaçlara ulaşılmaya başlandıkça seans sıklığı 15 günde bire, ayda bire indirilebilir. Sürekliliği olan danışmanlık görüşmelerinde paket görüşme uygulamaları tercih edilmektedir.

                </div>

                <div class="col-md-6">
                    <h5>Randevu erteleme veya Randevuyu iptal etme</h5>
                    Randevu verilmiş bir seansı ertelemek veya iptal etmek için bize en geç bir gün öncesinden haber verilmesi çok önemlidir. Bu sayede sırada bekleyen danışanlarımıza o saate randevu verebiliriz. Randevunuza geç kaldığınız durumda, diğer danışanlarımızın randevuları aksatmamak için size ayrılan süreyi uzatmamız mümkün değildir.
                </div>

            </div>

        </div>
    </div>

    <div class="space-50"></div>

    <div class="subscribe-line subscribe-line-transparent" style="background-image: url('/assets/img/header.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <form class="">
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="Bültenimize üye olun...">
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-danger btn-fill btn-block">Kayıt Ol!</button>
                </div>
            </div>
        </div>
    </div>



    <footer class="footer footer-big footer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h5 class="title">İLETİŞİM</h5>
                    <nav>
                        <ul>
                            <li>
                                Körfez Mh. Berk Sk. <br />
                                Dolphin İş Merkezi <br />
                                No:1 Kat:5 No:519 <br />
                                İzmit / KOCAELİ
                            </li>
                            <li>
                                0505 118 52 51
                            </li>
                        </ul>
                    </nav>


                </div>
                <div class="col-md-2 col-md-offset-1">
                    <h5 class="title">Melek Arıcı</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://melekarici.com/hakkinda-kurulus-oykumuz" >
                                    Hakkında
                                </a>
                            </li>
                            <li>
                                <a href="https://melekarici.com/egitimlerimiz-aile-egitimleri-eyvah-bebek-geliyor">
                                    Eğitimler
                                </a>
                            </li>
                            <li>
                                <a href="https://melekarici.com/kurumsal-danismanliklar-kurum-kulturu-olusturulmasi">
                                    Danışmanlık
                                </a>
                            </li>
                            <li>
                                <a href="https://melekarici.com/profesyonel-kocluk-mentorluk-hizmetleri-yonetici-koclugu">
                                    Koçluk
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h5 class="title"> Yardım ve Destek</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                    İletişim
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    SERTİFİKA DOĞRULAMA
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Kullanım Esasları
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Şartlar ve Gizlilik
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Site Haritası
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-md-3">
                    <h5 class="title">Güncel Haberler</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" >
                                    <i class="fa fa-twitter"></i> <b>En son projelerimiz</b>
                                    Projelerimiz sayfasından hayata geçen en son projelerimizi inceleyebilirsiniz...
                                    <hr class="hr-small">
                                </a>
                            </li>


                        </ul>
                    </nav>
                </div>

            </div>
            <hr />
            <div class="social-area text-center">
                <h5>Bize katılın</h5>

                <a href="https://www.facebook.com/hmelekarici" class="btn btn-social btn-round">
                    <i class="fa fa-facebook"></i>
                </a>

                <a href="https://www.instagram.com/hmelekarici/" class="btn btn-social btn-round">
                    <i class="fa fa-instagram"></i>
                </a>

            </div>
            <div class="copyright">
                2017 - 2018 &copy; SiyahKare
            </div>
        </div>
    </footer>


</div> <!-- wrapper -->
</body>
<!--  jQuery and Bootstrap core files    -->
<script src="/assets/js/jquery.js" type="text/javascript"></script>
<script src="/assets/js/jquery-ui.custom.min.js" type="text/javascript"></script>
<script src="/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="/assets/js/gsdk-checkbox.js"></script>
<script src="/assets/js/gsdk-morphing.js"></script>
<script src="/assets/js/gsdk-radio.js"></script>
<script src="/assets/js/gsdk-bootstrapswitch.js"></script>
<script src="/assets/js/bootstrap-select.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script src="/assets/js/chartist.min.js"></script>
<script src="/assets/js/jquery.tagsinput.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--  Get Shit Done Kit PRO Core javascript 	 -->
<script src="/assets/js/get-shit-done.js"></script>

<script type="text/javascript">
    var big_image;
    $().ready(function(){
        responsive = $(window).width();

        $(window).on('scroll', gsdk.checkScrollForTransparentNavbar);

        if (responsive >= 768){
            big_image = $('.parallax-image').find('img');

            $(window).on('scroll',function(){
                parallax();
            });
        }

    });

    var parallax = function() {
        var current_scroll = $(this).scrollTop();

        oVal = ($(window).scrollTop() / 3);
        big_image.css('top',oVal);
    };

</script>
</html>