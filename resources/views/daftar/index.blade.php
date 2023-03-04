<section class=" py-5" id="name-all">
    <div class="container ">
        <div class="text-center">
            <h5 class="j-name">THE BEST ALL</h5>
            <h2 class="d-name">MURID XII MULTIMEDIA <br> <span style="font-weight: 400;">TAHUN AJARAN
                    2020-2022</span></h2>
                    <a class="mt-3" data-barba-transition="left" href="/" style="display: inline-block;"><div class="floating-btn"><i class="fa-solid fa-arrow-up"></i></div></a>
                    <p style="color: #000; font-style: italic; margin-top: 5px;">Tekan tombol ini untuk kembali</p>

        </div>
        
        <div class="murid mt-5 text-center">
            @foreach ($siswa as $siswas)
            <div>
                <img class="img-fluid foto-murid mt-2" src="{{ Storage::url($siswas->image) }}" alt="">
                <h5 class="t-murid">{{ $siswas->name}}</h5>
            </div>
            @endforeach
        </div>
        
    </div>
</section>
