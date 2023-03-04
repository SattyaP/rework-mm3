@foreach ($event as $events)
<div class="container mt-5" id="carousel">
    <div class="j-event1">
        <h4>{{ $events->title }}</h4>
        <hr />
    </div>
    <div class="slider-before ripple" data-mdb-ripple-duration="1500ms" data-mdb-ripple-centered="true"
        data-mdb-ripple-color="#6c757d"
        data-image="img/gallery/a-1.webp;img/gallery/a-2.webp;img/gallery/a-3.webp;img/gallery/a-4.webp;img/gallery/a-5.webp;img/gallery/a-6.webp;img/gallery/a-7.webp;img/gallery/a-8.webp">
        <div>
            <span class="spinner-border me-2 d-none" role="status" aria-hidden="true"></span>
            <span>Load Image</span>
        </div>
    </div>
</div>
@endforeach

