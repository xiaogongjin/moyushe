<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if(null == $title)
    <title>{{$settings['site_title']}}</title>
    @else
    <title>{{$title}} - {{$settings['site_title']}}</title>
    @endif
    <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/static/css/bulma.min.css" rel="stylesheet"/>
    <link href="/static/plugins/noty/noty.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/css/roo.css?v=${version}"/>
    <script type="text/javascript" src="/static/js/im/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/static/js/roo.js?v=${version}"></script>
    @stack("js")
    <script type="text/javascript">
        Roo.Config = {
            current_user: "{{auth()->check()?auth()->user()->name:''}}",
            token: "{{csrf_token()}}",
            upload_url: "{{siteUrl('/upload_image')}}",
            notification_url: "{{siteUrl('/notification/count')}}",
            version: '{{$settings['version']}}'
        };
    </script>
</head>
<body>
@include("partials.header")
<div class="container">
    @yield('content')
    @include("partials.footer")
</div>
<script type="text/javascript" src="/static/plugins/noty/noty.min.js"></script>
</body>
</html>