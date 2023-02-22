@extends('admin.layout')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Anjaz Bisa Tambah Siswa Nih !</h1>
        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusamus aspernatur dolorum
            vitae, dolor libero beatae voluptatibus odit quo repudiandae! <a target="_blank"
                href="https://datatables.net">Lorem ipsum dolor, sit amet consectetur adipisicing</a>.</p>

        <div class="card shadow mb-4 mt-2">
            <div class="card-header">
                <h5 class="mt-1 font-weight-bold text-primary">Data Tag From API</h5>
            </div>
            <div class="card-body">
                @include('admin.partials.flash')
                <div class="table-responsive" id="tag">
                    <div class="d-none d-sm-flex justify-content-end form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group my-2">
                            <input type="text" class="form-control bg-light border-0 small search" id="search"
                                placeholder="Cari untuk . . ." aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th colspan="col">No</th>
                                <th colspan="col">Name</th>
                                <th colspan="col">Slug</th>
                            </tr>
                        </thead>
                        <tbody class="list table-hover">
                            @forelse ($tag as $index => $tags)
                                <tr>
                                    <td class="data-number">{{ $index + 1 }}</td>
                                    <td class="data-name">{{ $tags->name }}</td>
                                    <td class="data-name">{{ $tags->slug }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No data here</td>
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
                <span>Copyright &copy; Faeest.Inc 2024</span>
            </div>
        </div>
    </footer>
@endsection
@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script src="{{ asset('admin/js/siswa-script.js') }}"></script>
@endsection
