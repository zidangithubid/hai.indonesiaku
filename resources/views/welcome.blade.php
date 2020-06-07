@extends('layouts.frontend')

@section('home', 'active-nav')

@section('content')

{{-- jumbotron section --}}
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators caraousel-indicators-jumbotron">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
        <li data-target="#carouselId" data-slide-to="3"></li>
        <li data-target="#carouselId" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner-jumbotron" role="listbox">
        <div class="carousel-item carousel-item-jumbotron active">
            <div class="my-div-jumbotron position-relative w-100">
                <img src="{{ asset('img/static/destinations/jawa.jpg') }}" alt="First slide">
                <div class="carousel-caption carousel-caption-jumbotron d-none d-md-block">
                    <h3>JAVA</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="{{ url('destinations?province=35') }}" class="btn btn-danger shadow-danger px-4 mx-3">List Destination</a>
                    <button class="btn text-white btn-transparent mx-3 underline"><i class="fas fa-map-marker-alt"></i> View Map</button>
                </div>
            </div>
            <div class="overlay-black"></div>
        </div>
        <div class="carousel-item carousel-item-jumbotron">
            <div class="my-div-jumbotron position-relative w-100">
                <img src="{{ asset('img/static/destinations/sumatra.jpg') }}" alt="First slide">
                <div class="carousel-caption carousel-caption-jumbotron d-none d-md-block">
                    <h3>SUMATRA</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                    <a href="{{ url('destinations?province=12') }}" class="btn btn-danger shadow-danger px-4 mx-3">List Destination</a>
                    <button class="btn text-white btn-transparent mx-3 underline"><i class="fas fa-map-marker-alt"></i> View Map</button>
                </div>
            </div>
            <div class="overlay-black"></div>
        </div>
        <div class="carousel-item carousel-item-jumbotron">
            <div class="my-div-jumbotron position-relative w-100">
                <img src="{{ asset('img/static/destinations/papua.jpg') }}" alt="First slide">
                <div class="carousel-caption carousel-caption-jumbotron d-none d-md-block">
                    <h3>PAPUA</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="{{ url('destinations?province=94') }}" class="btn btn-danger shadow-danger px-4 mx-3">List Destination</a>
                    <button class="btn text-white btn-transparent mx-3 underline"><i class="fas fa-map-marker-alt"></i> View Map</button>
                </div>
            </div>
            <div class="overlay-black"></div>
        </div>
        <div class="carousel-item carousel-item-jumbotron">
            <div class="my-div-jumbotron position-relative w-100">
                <img src="{{ asset('img/static/destinations/kalimantan.jpg') }}" alt="First slide">
                <div class="carousel-caption carousel-caption-jumbotron d-none d-md-block">
                    <h3>KALIMANTAN</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <a href="{{ url('destinations?province=64') }}" class="btn btn-danger shadow-danger px-4 mx-3">List Destination</a>
                    <button class="btn text-white btn-transparent mx-3 underline"><i class="fas fa-map-marker-alt"></i> View Map</button>
                </div>
            </div>
            <div class="overlay-black"></div>
        </div>
        <div class="carousel-item carousel-item-jumbotron">
            <div class="my-div-jumbotron position-relative w-100">
                <img src="{{ asset('img/static/destinations/sulawesi.jpg') }}" alt="First slide">
                <div class="carousel-caption carousel-caption-jumbotron d-none d-md-block">
                    <h3>SULAWESI</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <button class="btn btn-danger shadow-danger px-4 mx-3">List Destination</button>
                    <button class="btn text-white btn-transparent mx-3 underline"><i class="fas fa-map-marker-alt"></i> View Map</button>
                </div>
            </div>
            <div class="overlay-black"></div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{-- end jumbotron section --}}

{{-- destination section --}}
<div class="container py-4">
    <h3 class="text-danger myfont-arciform"><i class="fas fa-search-location "></i> Discover your destinations</h3>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mt-4 px-4">
            <form method="GET" action="{{ url('destinations') }}">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="name" id="name-destinations" class="form-control" placeholder="Cari destinasimu.." aria-describedby="helpId">
                        <div class="input-group-append">
                            <span class="input-group-text bg-white" id="basic-addon2">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <select name="category" id="category" class="form-control">
                        <option value="">Pilih Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="province" id="province-select" class="form-control">
                        <option value="">Pilih Provinsi</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="city" id="city-select" class="form-control">
                        <option value="">Pilih Kota / Kabupaten</option>
                        <option value="malang">Malang</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="district" id="district-select" class="form-control">
                        <option value="">Pilih Kecamatan</option>
                        <option value="malang">Kanjuruan</option>
                    </select>
                </div>
                <div class="text-right">
                    <button class="btn btn-warning shadow-warning px-5"><i class="fas fa-search-location"></i> Cari</button>
                </div>
            </form>
        </div>
        <div class="col-md-8 highlight-destinations">
            <div>
                <div class="top_destination overflow-hidden bg-dark position-relative shadow">
                    <a href="{{ url('destinations?province=35&city=3507') }}">
                        <img src="{{ asset('img/static/destinations/malang.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                        <div class="position-relative text-white text-center top_destination_caption">
                            <h3 class="myfont-arciform">Malang</h3>
                            <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> Jawatimur</p>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="top_destination overflow-hidden bg-dark position-relative shadow">
                    <a href="{{ url('destinations?province=52&city=5202') }}">
                        <img src="{{ asset('img/static/destinations/lombok.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                        <div class="position-relative text-white text-center top_destination_caption">
                            <h3 class="myfont-arciform">Lombok</h3>
                            <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> NTB</p>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="top_destination overflow-hidden bg-dark position-relative shadow">
                    <a href="{{ url('destinations?province=73&city=7371') }}">
                        <img src="{{ asset('img/static/destinations/makassar.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                        <div class="position-relative text-white text-center top_destination_caption">
                            <h3 class="myfont-arciform">Makassar</h3>
                            <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> Sulawesi Selatan</p>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="top_destination overflow-hidden bg-dark position-relative shadow">
                    <a href="{{ url('destinations?province=34&city=3471') }}">
                        <img src="{{ asset('img/static/destinations/jogja.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                        <div class="position-relative text-white text-center top_destination_caption">
                            <h3 class="myfont-arciform">Yogyakarta</h3>
                            <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> DI Yogyakarta</p>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="top_destination overflow-hidden bg-dark position-relative shadow">
                <a href="{{ url('destinations?province=51&city=5171') }}">
                        <img src="{{ asset('img/static/destinations/bali.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                        <div class="position-relative text-white text-center top_destination_caption">
                            <h3 class="myfont-arciform">Denpasar</h3>
                            <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> Bali</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- destination section --}}
{{-- agenda section --}}

<div class="container-fluid bg-light">
    <div class="container py-4">
        <div class="text-center">
            <h3 class="text-danger myfont-arciform mb-4"><i class="far fa-calendar-alt"></i> Awesome festivals</h3>
            <a href="{{ url('/?criteria=1') }}" class="btn {{ (request()->get('criteria') == 1) ? 'btn-danger shadow-danger' : 'btn-white bg-white' }} btn-sm pr-3"><i class="fas fa-mosque mx-2"></i> Kebudayaan</a>
            <a href="{{ url('/?criteria=2') }}" class="btn {{ (request()->get('criteria') == 2) ? 'btn-danger shadow-danger' : 'btn-white bg-white' }} btn-sm pr-3"><i class="fas fa-gamepad mx-2"></i> Teknologi</a>
            <a href="{{ url('/?criteria=3') }}" class="btn {{ (request()->get('criteria') == 3) ? 'btn-danger shadow-danger' : 'btn-white bg-white' }} btn-sm pr-3"><i class="far fa-calendar mx-2"></i> Event</a>
        </div>
        <div class="row mt-4">
            @foreach ($festivals as $festival)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card border-0 card-fest position-relative">
                        <div class="img-fest overflow-hidden bg-dark">
                            <img class="card-img-top" src='{{ asset("img/festivals/$festival->picture") }}' alt="">
                        </div>
                        <div class="card-body card-body-fest shadow-sm">
                            @if ($festival->criteria_id == "1")
                                <div class="kriteria-fest position-absolute bg-warning px-4 py-1"><i class="fas fa-mosque"></i> {{ $festival->criteria->name }}</div>
                            @else
                                @if ($festival->criteria_id == "2")
                                    <div class="kriteria-fest position-absolute bg-primary text-white px-4 py-1"><i class="fas fa-gamepad"></i> {{ $festival->criteria->name }}</div>
                                @else
                                    <div class="kriteria-fest position-absolute bg-success text-white px-4 py-1"><i class="fas fa-calendar"></i> {{ $festival->criteria->name }}</div>
                                @endif
                            @endif
                            <h4 class="card-title mb-0">{{ $festival->name }}</h4>
                            <p class="date-fest d-inline mr-3">
                                {{ $festival->city->name }}, {{ $festival->created_at }}
                            </p>
                            <p class="card-text"><a class="btn btn-warning shadow-warning btn-sm" href='{{ url("festival/$festival->id") }}'> <i class="fas fa-eye "></i> Detail </a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-right">
            <a href="{{ url('festivals') }}" class="btn btn-warning shadow-warning w-25"><i class="fas fa-arrow-right"></i> Selengkapnya</a>
        </div>
    </div>
</div>

{{-- end agenda section --}}
{{-- contact section --}}

<div class="container-fluid bg-danger position-relative overflow-hidden">
    <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute bg-back-contact" alt="bg-wall">
    <div class="container text-white py-4 position-relative">
        <h3><i class="fas fa-id-card-alt"></i> Give us your feedback</h3>
        <div class="row">
            <div class="col-md-6">
                {{-- <button class="btn btn-warning shadow"><i class="far fa-envelope"></i> Send to Email</button>
                <button class="btn btn-white bg-white"><i class="fab fa-instagram"></i> Send to Instagram</button> --}}
                <form method="POST" id="feedback-form">
                    {{ csrf_field() }}
                    <div class="form-group my-2">
                        <label for="sender">Name</label>
                        <input type="text" name="sender" id="sender" class="form-control border-0" placeholder="Your Awesome Name Here..." aria-describedby="helpId">
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control border-0" placeholder="example@domain.com" aria-describedby="helpId">
                    </div>
                    <div class="form-group my-2">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control border-0" placeholder="Your Subject Here..." aria-describedby="helpId">
                    </div>
                    <div class="form-group my-2">
                        <label for="subject">Description</label>
                        <textarea name="description" id="description" cols="30" class="form-control border-0" rows="4" placeholder="Your suggestion critism Here..."></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-warning shadow px-5"><i class="fas fa-paper-plane"></i> Send</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 py-5">
                <div class="position-absolute add-contact shadow">
                    <div class="bg-white rounded myfont-arciform px-5 text-warning py-2">
                        <h4 class="my-0 d-inline">@Hai.Indonesiaku</h4>
                    </div>
                </div>
                <div class="position-absolute logo-img-parent">
                    <img src="{{ asset('img/static/favicon.png') }}" class="w-50 logo-img-contact" alt="">
                </div>
                <div class="text-center">
                    <img src="{{ asset('img/static/ig.png') }}" class="w-50 rounded shadow ig-img-contact" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- end contact section --}}
{{-- jumbotron caption section --}}

<div class="container-fluid py-5 jumbotron-capt position-relative">
    <div class="overlay-black"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-12 text-white text-center">
                <img src="{{ asset('img/static/favicon.png') }}" width="100px" alt="">
                <h2>Liburan yang seru mulai dari mencari tau destinasi yang keren</h2>
                <h5>Bersama Hai.Indonesiaku pastinya</h5>
            </div>
        </div>
    </div>
</div>

<script>
 $('#province-select').change(function() {
    var id_prov = $(this).val()
    $.ajax({
        url: "{{ url('cities') }}" + "/" + id_prov,
        type: "GET",
        dataType: "json",
        async: false,
        success: function(data) {
            if(data.success === true) {
                var city;
                city = '<option value="">Pilih Kota / Kabupaten</option>';
                $.each(data.data, function(key, value) {
                    city += '<option value="' + value.id + '">' + value.name + '</option>'
                });
                $('#city-select').attr('disabled', false);
                $('#city-select').html(city);
            }
        }
    })
});
$('#city-select').change(function() {
    var id_city = $(this).val();
    $.ajax({
        url: "{{ url('districts') }}" + "/" + id_city,
        type: "GET",
        dataType: "json",
        async: false,
        success: function(data) {
            if(data.success === true) {
                var district;
                district = '<option value="">Pilih Kecamatan</option>'
                $.each(data.data, function(key, value) {
                    district += '<option value="' + value.id + '">' + value.name + '</option>'
                });
                $('#district-select').attr('disabled', false);
                $('#district-select').html(district);
            }
        }
    })
});
$('#feedback-form').off().submit(function(e) {
    e.preventDefault();
    let token = $('input[name="_token"]').val();
    $.ajax({
        url: "{{ url('message/send') }}",
        data: new FormData(this),
        dataType: "json",
        type: "POST",
        cache: false,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': token,
        },
        success: function(data) {
            if(data.success === true) {
                alert('Berhasil')
                $('#feedback-form').find('input:text, input:password, input:file, select, textarea').val('');
                $('#feedback-form').find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
            } else {
                alert('Gagal')
            }
        }
    })
})
</script>

@endsection
