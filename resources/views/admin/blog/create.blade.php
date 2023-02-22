@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-6">
            <div class="card shadow p-4">
                @include('admin.partials.flash', ['$errors' => $errors])
                <div class="card-body">
                    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group mb-3">
                            <label for="title" class="font-weight-bold text-primary ">TITLE</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="title" placeholder="Title name here...">
                        </div>

                        <div class="form-group mb-4">
                            <label for="image" class="font-weight-bold text-primary form-label">IMAGE</label>
                            <input size="1028" accept=".jpg .png .jpeg .gif" id="image" type="file"
                                class="form-control @error('image') is-invalid @enderror" name="image">
                        </div>

                        <label for="tag" class="font-weight-bold form-label text-primary">TAG</label>
                        <select id="tag" class="form-select mb-3" aria-label="Default select example" name="tag_id">
                            <option selected>-- Choose Tag --</option>
                            @foreach ($tag as $tags)
                            <option value="{{ $tags->id }}">{{ $tags->name }}</option>
                            @endforeach
                        </select>

                        <div class="form-group mb-3">
                            <label for="textarea" class="form-label text-primary font-weight-bold">DESCRIPTION</label>
                            <textarea name="description" class="form-control" id="textarea" rows="3" placeholder="Masukan deskripsi"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="editor" class="form-label text-primary font-weight-bold">ARTICLE</label>
                            <textarea name="article" class="form-control" id="editor" rows="3" placeholder="Masukan article"></textarea>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
