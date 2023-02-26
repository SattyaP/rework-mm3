@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-6">
            <div class="card shadow p-4">
                @include('admin.partials.flash', ['$errors' => $errors])
                <div class="card-body">
                    <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group mb-3">
                            <label for="name" class="font-weight-bold text-primary ">JUDUL EVENT</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="name" placeholder="Judul event mbot">
                        </div>

                        {{-- problem store data foto event ?? --}}

                        <hr>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
