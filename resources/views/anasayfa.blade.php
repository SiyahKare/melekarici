<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SiyahKare</title>

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

@include ('layouts.nav')

<div class="wrapper">
    <div class="parallax filter-black">
        <div class="parallax-image">
            <img src="/assets/img/header.jpg" alt="SiyahKare" />
        </div>

        <div class="small-info">
            <div class="motto"><img src="/assets/img/logo.png" alt="SiyahKare" /></div>

        </div>
    </div>

    <div class="section section-description">
        <div class="container">
            <h2 class="section-title">Dijital Dönüşüm</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Bütünleşik Dijital Hizmetler</h5>
                    <p>Ekibimiz 1995 yılından bu yana bilişim sektöründe etkin çalışan, iki yüzden fazla dijital projeye imza atmış her biri alanında uzman kişilerin SiyahKare markası altında toplanmasıyla oluşmuştur. Bütünleşik dijital hizmetler sunan SiyahKare, "müşterilerin ihtiyaçlarına cevap verecek optimum çözümler üretme" sloganıyla çalışmalarını sürdürmektedir. </p>
                    <p>Biz SiyahKare olarak daima özgün fikirlere odaklanıyoruz. Kullanıcı dostu ve işlevsel yeni nesil uygulamalar geliştirirken, gelecekte yapılabileceklerin sınırlarını bugünden zorluyoruz.</p>


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
                        <img src="/assets/img/home4.jpg" alt="..." />
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Yaratıcı Çözümler</h5>
                    <p>Proje İhtiyaçlarına Uygun E-Ticaret paketi , Özel Çözüm Web Siteleri, Online Uygulamalar, Kurumsal ve Profesyonel Sosyal Platform Hizmetleri, Kurumsal Sosyal Medya Danışmanlığı ile Tüm Digital Çözümlerin Projelendirilmesi ve Uygulamaları konusunda uzman kadrosuyla bütünleşik interaktif dijital hizmetler sunmaktadır.</p>
                    </p>Bir şirket, hangi sektörde faaliyet gösterirse göstersin, dijital işletmeye dönüşmek durumundadır.</p>

                </div>
            </div>
        </div>
    </div><!-- section -->

    <div class="space-50"></div>
    <hr>
    <div class="space-50"></div>


    <div class="section section-features-2">
        <div class="container">
            <h2 class="section-title">Özellikler <small>neden farklıyız</small></h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-azure">
                            <i class="pe-7s-clock"></i>
                        </div>
                        <div class="description">
                            <h5> Zaman Kazanın </h5>
                            <p class="text-muted">Zamanınızı ve enerjinizi yeni fikirlere odaklanmak için kullanın, uygulamalarını bize bırakın.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-orange">
                            <i class="pe-7s-scissors"></i>
                        </div>
                        <div class="description">
                            <h5> Size Özel Çözüm </h5>
                            <p class="text-muted">Özgün ve yaratıcı fikirlerinizi hayata geçirmek üzere size özel çözümleri biz üretelim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-purple">
                            <i class="pe-7s-science"></i>
                        </div>
                        <div class="description">
                            <h5> Özgün Yaratıcı Fikirler </h5>
                            <p class="text-muted">Gelişen teknolojinin bize sağladığı tüm imkanları kullanarak modern uygulamaları hayata geçirelim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- section -->

    <div class="section section-gray">
        <div class="container">
            <div class="big-info">
                <h3 class="text-center">Ücretsiz deneyin. Dilediğinizde iptal edin. <br>
                    <small>Bütün paketler için 7 gün ücretsiz deneme süresi.</small>
                </h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-price">
                        <div class="content">
                            <h6 class="category">Temel</h6>
                            <h1 class="price">
                                <small>&#8378;</small>199
                            </h1>
                            <ul class="list-unstyled list-lines">
                                <li>
                                    <i class="fa fa-comments"></i> <b>200</b> Destek Mesajı
                                </li>
                                <li>
                                    <i class="fa fa-magic"></i> <b>10+</b> Modül
                                </li>
                                <li>
                                    <i class="fa fa-male"></i> <b>20</b> Kullanıcı
                                </li>
                                <li>
                                    <i class="fa fa-level-up"></i> <b>Ücretsiz</b> Güncellemeler
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <button type="button" class="btn btn-info btn-round btn-block">Satın Al!</button>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-4">
                    <div class="card card-price card-price-best-deal">
                        <div class="content">
                            <h6 class="category">Premium</h6>
                            <h1 class="price">
                                <small>&#8378;</small>399
                            </h1>
                            <ul class="list-unstyled list-lines">
                                <li>
                                    <i class="fa fa-comments"></i> <b>Sınırsız</b> Mesaj
                                </li>
                                <li>
                                    <i class="fa fa-magic"></i> <b>Sınırsız</b> Modül
                                </li>
                                <li>
                                    <i class="fa fa-male"></i> <b>Sınırsız</b> Kullanıcı
                                </li>
                                <li>
                                    <i class="fa fa-dollar"></i> <b>En İyi</b> Fiyat
                                </li>
                                <li>
                                    <i class="fa fa-level-up"></i> <b>Ücretsiz</b> Güncellemeler
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> <b>Premium</b> Öncelikli Destek
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <button type="button" class="btn btn-info btn-round btn-fill btn-block">Satın Al!</button>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-4">
                    <div class="card card-price">
                        <div class="content">
                            <h6 class="category">Standard</h6>
                            <h1 class="price">
                                <small>&#8378;</small>299
                            </h1>
                            <ul class="list-unstyled list-lines">
                                <li>
                                    <i class="fa fa-comments"></i> <b>500</b> Destek Mesajı
                                </li>
                                <li>
                                    <i class="fa fa-magic"></i> <b>50+</b> Modül
                                </li>
                                <li>
                                    <i class="fa fa-male"></i> <b>100</b> Kullanıcı
                                </li>
                                <li>
                                    <i class="fa fa-level-up"></i> <b>Ücretsiz</b> Güncellemeler
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <button type="button" class="btn btn-info btn-round btn-block">Satın Al!</button>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div> <!-- end row -->
        </div>
    </div>


    <div class="section">
        <div class="container">
            <h2 class="section-title">Çalışma İş Akışımız</h2>
            <div class="clients-presentation">
                <div class="row">
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="description">
                                <h3> 1. Araştırma </h3>
                                <p class="text-muted">Projelerinize katma değer kazandırabilecek en güncel telnolojilerin araştırılması</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon">
                                <i class="pe-7s-scissors"></i>
                            </div>
                            <div class="description">
                                <h3> 2. Tasarım </h3>
                                <p class="text-muted">Özgün fikirlerinizi güncel teknolojilerle buluşturacak projenin tasarlanması</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon">
                                <i class="pe-7s-tools"></i>
                            </div>
                            <div class="description">
                                <h3> 3. Geliştirme </h3>
                                <p class="text-muted">Projenizi hayata geçirecek geliştirmelerin yapılarak projenin tamamlanması</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon">
                                <i class="pe-7s-upload"></i>
                            </div>
                            <div class="description">
                                <h3> 4. Yayınlama </h3>
                                <p class="text-muted">Tamamlanan projenin bulut sunucular üzerinde güvenli olarak yayınlanması</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end section meet our clients -->

    <div class="section">
        <div class="container">
            <h2 class="section-title">Projelerimiz</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/thumb.jpg" alt="..."/>
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
                            <img src="/assets/img/thumb.jpg" alt="..."/>
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
                            <img src="/assets/img/thumb.jpg" alt="..."/>
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
                            <img src="/assets/img/thumb.jpg" alt="..."/>
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
                            <img src="/assets/img/thumb.jpg" alt="..."/>
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
                            <img src="/assets/img/thumb.jpg" alt="..."/>
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
                            <img src="/assets/img/thumb.jpg" alt="..."/>
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

    <div class="section section-gray section-clients">
        <div class="container">
            <h2 class="section-title">Çalışma Alanlarımız</h2>
            <div class="clients-presentation">
                <div class="row">
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon">
                                <i class="fa fa-cloud"></i>
                            </div>
                            <div class="description">
                                <h3> Bulut Mimarisi </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="description">
                                <h3> E-Ticaret </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon">
                                <i class="fa fa-tachometer"></i>
                            </div>
                            <div class="description">
                                <h3> Sistem Paneli </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="description">
                                <h3> Yönetim Otomasyonu </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end section meet our clients -->

    <div class="social-line">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="" class="btn btn-round btn-fill btn-social btn-facebook">
                        <i class="fa fa-facebook-square"></i> Facebook
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" class="btn btn-round btn-fill btn-social btn-twitter">
                        <i class="fa fa-twitter"></i> Twitter
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" class="btn btn-round btn-fill btn-social btn-google">
                        <i class="fa fa-google-plus-square"></i> Google+
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" class="btn btn-round btn-fill btn-social btn-pinterest">
                        <i class="fa fa-pinterest"></i> Pinterest
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
                    <h5>Projelerimizde hangi teknolojileri kullanıyorsunuz?</h5>
                    Projelerimizde Laravel5 PHP Kullanıyoruz..

                </div>
                <div class="col-md-6">
                    <h5>Projelerimizi ne kadar zamanda tamamlıyorsunuz?</h5>
                    Projelerimizi taahhüt ettiğimiz sürede tamamnlıyoruz.
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5>Projemizi hayata geçirmek için nasıl çalışabiliriz?</h5>
                    Sözleşme ile çalışabiliriz.
                </div>
                <div class="col-md-6">
                    <h5>Projelerimize destek sözleşmenizin süresi ve şartları nelerdir?</h5>
                    Projelerimize destek süremiz 1 yıldır.

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
                    <div class="form-group">
                        <select name="huge" class="selectpicker" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                            <option value="de">Deutsch</option>
                            <option value="en">English</option>
                            <option value="es">Español</option>
                            <option value="fr">Français</option>
                            <option value="it">Italiano</option>
                            <option value="tr" selected="">Türkçe</option>
                            <option value="ru">Русский</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="huge" class="selectpicker" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                            <option value="TRL" selected="">TRL</option>
                            <option value="USD">USD</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1">
                    <h5 class="title">SiyahKare</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" >
                                    Hakkımızda
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Projeler
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Ürünler
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Hizmetler
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    BLOG
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
                                    Kullanıcı Girişi
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Alışveriş Sepeti
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
                            <li>
                                <a href="#" >
                                    <i class="fa fa-twitter"></i>
                                    Otomasyonumuzu hayata geçirdik <b> MUTLU Danışmanlık</b>! Katkılarına teşekkür ederiz...
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <hr />
            <div class="social-area text-center">
                <h5>Bize katılın</h5>
                <a href="#" class="btn btn-social btn-round">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#"  class="btn btn-social btn-round">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-social btn-round">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a href="#" class="btn btn-social btn-round">
                    <i class="fa fa-pinterest"></i>
                </a>
                <a href="#" class="btn btn-social btn-round">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
            <div class="copyright">
                1999 &copy; 2017 SiyahKare
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

<!-- If you are using TypeKit.com uncomment this code otherwise you can delete it -->
<!--
<script src="https://use.typekit.net/[your kit code here].js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
-->

<!-- If you have retina @2x images on your server which can be sent to iPhone/iPad/MacRetina, please uncomment the next line, otherwise you can delete it -->
<!-- <script src="assets/js/retina.min.js"></script> -->

</html>
