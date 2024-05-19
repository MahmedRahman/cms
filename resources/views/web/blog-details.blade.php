<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Blog Details - My Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="Blog Details, My Profile, Responsive, Bootstrap, Web Template" />
<!-- css files -->
<link href="{{ URL::asset('assets/web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ URL::asset('assets/web/css/cobox.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('assets/web/css/portfolio.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ URL::asset('assets/web/css/style.css') }}" rel="stylesheet" type="text/css" media="all">
<!-- /css files -->
<!-- font links -->
<link href='//fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
<!-- /font links -->	
<!-- js files -->
<script src="js/modernizr.custom.js"></script>
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
@include('web.partials.navbar')

<div class="container">
    <h3 class="text-center slideanim">{{ $blog->title }}</h3>
    <p>{{ $blog->content }}</p>
    <p><strong>Author:</strong> {{ $blog->author }}</p>
</div>

@include('web.partials.footer')
<!-- js files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ URL::asset('assets/web/js/bootstrap.min.js') }}"></script>
<!-- /js files -->
</body>
</html>
