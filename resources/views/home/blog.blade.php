<section class="my-5 py-5 articles">
    <div class="container">
        <div class="header-article d-flex justify-content-between mb-3">
            <h5>Articles</h5>
            <button class="btn-subs">Subscribe</button>
        </div>
        <hr />
        @foreach ($blog as $blogs)
        <a data-barba-transition="right" href="{{ url('/blog/'. $blogs->title) }}">
            <div class="card-article">
                <div class="row">
                    <div class="col-lg-8">
                        <span id="time">{{ $blogs->created_at }}</span>
                        <h1>{{ $blogs->title }}</h1>
                        <p>{{ str_limit($blogs->description, 200,'...') }}</p>
                        <div id="tag">{{ $blogs->tag->name, $blogs->id }}</div>
                        <a class="btn-read" href="">Read More</a>
                    </div>
                    <div class="col-lg-4 d-flex text-center">
                        <img class="img-fluid" src="{{ Storage::url($blogs->image, $blogs->id )}}" alt="image-article" />
                    </div>
                </div>
            </div>
        </a>
        <hr class="mt-4" /> 
        @endforeach
    </div>
</section>


