<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Edit Blog - My Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="Edit Blog, My Profile, Responsive, Bootstrap, Web Template" />
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


<div class="container">
    <h3 class="text-center slideanim">Edit Blog</h3>
    <form action="{{ route('blog.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $blog->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" id="content" rows="5" required>{{ $blog->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" id="author" value="{{ $blog->author }}" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Blog</button>
        </div>
    </form>
</div>


<!-- js files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ URL::asset('assets/web/js/bootstrap.min.js') }}"></script>
<!-- /js files -->
</body>
</html>
