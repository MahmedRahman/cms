@include('web.partials.header')
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
@include('web.partials.navbar')
<style>
    .blog-card {
        margin-bottom: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }
    .blog-card:hover {
        transform: translateY(-10px);
    }
    .blog-card-body {
        padding: 20px;
    }
    .blog-card-title {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }
    .blog-card-text {
        margin-bottom: 20px;
    }
    .read-more-btn {
        background-color: #007bff;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1rem;
        margin-top: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .read-more-btn:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <h3 class="text-center slideanim">Blog Page</h3>
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-md-4 col-sm-6">
            <div class="card blog-card">
                <div class="card-body blog-card-body">
                    <h5 class="card-title blog-card-title">{{ $blog->title }}</h5>
                    <p class="card-text blog-card-text">{{ Str::limit($blog->content, 100) }}</p>
                    <a href="{{ route('blog.show', $blog->id) }}" class="read-more-btn">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@include('web.partials.footer')
<!-- js files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ URL::asset('assets/web/js/bootstrap.min.js') }}"></script>
<!-- /js files -->
</body>
</html>
