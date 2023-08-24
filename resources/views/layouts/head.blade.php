<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{$page->title}}</title>
    <meta name="keywords" content="{{$page->keywords}}">
    <meta name="description" content="{{$page->description}}">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <?php
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if ((strpos($ua, 'iPad') !== false) || (strpos($ua, 'Macintosh') !== false) || (strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') === false) || (strpos($ua, 'A1_07') !== false) || (strpos($ua, 'SC-01C') !== false)) :
        echo '<meta name="viewport" content="width=1280px">';
    else :
        echo '<meta name="viewport" content="width=device-width">';
    endif;
    ?>

    <link rel="icon" href="{{asset('favicon.ico')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/woi8xvp.css">

{{--    font-family: "futura-pt", sans-serif;--}}
    <link rel="stylesheet" href="https://use.typekit.net/jgr1wst.css">

    <?php
    /**@var $page \App\Models\FEnt\FEntPage **/
    $sassImportFilePath = 'resources/sass/pages/page_' . $page->id . '.scss';
    $jsImportFilePath = 'resources/js/page_' . $page->id . '.js';
    ?>

    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/style.css')}}"/>
    {{--Font Awesome 5--}}
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/all.min.css')}}"/>
    {{--Font Awesome 4--}}
{{--    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/fontawesome.min.css')}}"/>--}}

    {{--スクロールアニメーション--}}
{{--    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/aos.css')}}"/>--}}
    {{--ポップアップ表示--}}
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/lity.min.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/jquery.bxslider.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/swiper.min.css')}}"/>

    @vite([$sassImportFilePath])

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
{{--    <script type="text/javascript" src="{{asset('js/aos.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/lity.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.bxslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.flicksimple.js')}}"></script>

    @vite(['resources/js/app.js', $jsImportFilePath])

    <script>
        const corp_url = '{{Route('top')}}';
    </script>

    @if(isset($page->fEntConfig->corporations[0]['ga']))
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$page->fEntConfig->corporations[0]['ga'] ?? ''}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{$page->fEntConfig->corporations[0]['ga'] ?? ''}}');
    </script>
    @endif

</head>
