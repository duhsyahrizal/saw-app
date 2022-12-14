<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" sizes="16x16" href="/template/assets/images/logo.jpeg">
<title>{{ env('APP_NAME') }} | {{ $menu }}</title>
<!-- chartist CSS -->
<link href="/template/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
<link href="/template/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/template/assets/libs/pickadate/lib/themes/default.css">
<link rel="stylesheet" type="text/css" href="/template/assets/libs/pickadate/lib/themes/default.date.css">
<link rel="stylesheet" type="text/css" href="/template/assets/libs/pickadate/lib/themes/default.time.css">
<link href="/template/dist/css/style.css?v={{ time() }}" rel="stylesheet">
<!-- This page CSS -->
<link href="/template/dist/css/custom.css?v={{ time() }}" rel="stylesheet">
<link href="/template/assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

@yield('css')