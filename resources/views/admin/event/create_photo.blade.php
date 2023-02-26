@extends("admin.layout")
@section('content')
<div class="container-fluid">
    <div class="col-lg-6">
        <div class="card shadow p-4">
            @include('admin.partials.flash', ['$errors' => $errors])
            <div class="card-body">
                <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    
                    <label for="event" class="font-weight-bold form-label text-primary">EVENT</label>
                    <select id="event" class="form-select mb-3" aria-label="Default select example" name="event_id">
                        <option selected>-- Choose Event --</option>
                        @foreach ($event as $events)
                            <option value="{{ $events->id }}">{{ $events->title }}</option>
                        @endforeach
                    </select>

                    <div class="form-group mb-4">
                        <label for="image" class="font-weight-bold text-primary form-label">IMAGE</label>
                        <input size="1028" accept=".jpg .png .jpeg .gif" id="image" type="file"
                            class="form-control @error('image') is-invalid @enderror" name="image">
                    </div>


                    <hr>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection