<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Training') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" integrity="sha512-cViKBZswH231Ui53apFnPzem4pvG8mlCDrSyZskDE9OK2gyUd/L08e1AC0wjJodXYZ1wmXEuNimN1d3MWG7jaQ==" crossorigin="anonymous"></script>
</head>
{{-- home  detail--}}
<body class="setting">
    <header>
        <div class="container">
            <div class="header_left floatleft">
                <a href="<?php echo URL::to('/'); ?>" title="" class="logo">Training<span>C</span></a>
            </div>
            <div class="header_right floatright">
                <a href="#" title="">Hello 🙂</a>
                <a href="#" title="ヘルプ" class="tip help">Help</a>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="section_left floatleft">
                <ul class="mainmenu">
                    <li class="active"><a href="<?php echo URL::to('/'); ?>" title="" class="menuicon i_home active"><span>Home</span></a></li>
                    <li><a href="<?php echo URL::to('/user'); ?>" title="" class="menuicon i_up has_child"><span>User</span></a></li>
                    <li><a href="<?php echo URL::to('/customer'); ?>" title="" class="menuicon i_down has_child"><span>Customer</span></a></li>
                </ul>
                <div class="ads">
                    <h3><span>Nguyễn Văn Thành</span></h3>
                    <a href="#" title=""><img src="./assets/img/ads.png" alt="" /></a>
                    <a href="#" title=""><img src="./assets/img/ads.png" alt="" /></a>
                </div>
            </div>
            @yield('content')
        </div>
    </section>
    <script type="text/javascript">
        base_url = "<?php  echo url('/');?>";
    </script>
</body>
</html>
