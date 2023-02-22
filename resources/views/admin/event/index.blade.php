@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Anjaz Bisa Tambah Event Nih !</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <div class="card shadow mb-4 mt-2">
        <div class="card-header d-flex justify-content-between">
            <h5 class="mt-1 font-weight-bold text-primary">Data Event</h5>
            <a class="btn btn-primary" href="./event/create">Tambah Event</a>
        </div>
        <div class="card-body">
            @include('admin.partials.flash')
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 100px" colspan="col">No</th>
                            <th colspan="col">Foto</th>
                            <th colspan="col">Title</th>
                            <th colspan="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($event as $index => $events)
                        <tr>
                            <td>{{ $index +1 }}</td>
                            <td></td>
                            <td>{{ $events->title }}</td>
                            <td>
                                <form action="{{ route('event.destroy', $events->id)}}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No data here</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>

@endsection
