@foreach ($event as $events)
@php
    $carousel = [];
    foreach ($events->eventphoto as $eventphotos) {
        array_push($carousel,Storage::url($eventphotos->image));
    }
@endphp
<div class="container mt-5" id="carousel">
    <div class="j-event1">
        <h4>{{ $events->title }}</h4>
        <hr />
    </div>
    <div class="slider-before ripple" data-mdb-ripple-duration="1500ms" data-mdb-ripple-centered="true"
        data-mdb-ripple-color="#6c757d"
        data-image="{{ join(";",$carousel) }}">
        <div>
            <span class="spinner-border me-2 d-none" role="status" aria-hidden="true"></span>
            <span>Load Image</span>
        </div>
    </div> 
</div>
@endforeach

