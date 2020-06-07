@extends('layouts.frontend')

@section('destinations', 'active-nav')

@section('content')

<div class="container-fluid py-4 jumbotron-destination-page position-relative">
    <div class="overlay-black"></div>
    <div class="container position-relative py-5">
        <div class="row py-5">
            <div class="col-12 py-5 text-white">
                <h1>Discover your destinations</h1>
                <img src="{{ asset('img/static/favicon.png') }}" class="d-inline position-relative" style="top: -3px" width="40px" alt="">
                <h5 class="d-inline">With <span class="text-warning">{{ env('APP_NAME') }}</span></h5>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mt-4 px-4">
            <form method="GET" action="">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="key" id="key" class="form-control" placeholder="Cari destinasimu.." aria-describedby="helpId">
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
                    </select>
                </div>
                <div class="form-group">
                    <select name="district" id="district-select" class="form-control">
                        <option value="">Pilih Kecamatan</option>
                    </select>
                </div>
                <div class="text-right">
                    <a class="btn btn-white shadow-sm px-4" role="button" href="{{ url('destinations') }}"><i class="fas fa-eye"></i> Lihat semua</a>
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

<div class="container pb-5">
    <div class="row">
        <div class="col-md-12">
        </div>
        @foreach ($destinations as $destination)
        <div class="col-md-3 my-3">
            <div class="card-destination-page position-relative overflow-hidden text-center">
                <img src='{{ asset("img/destinations/$destination->picture") }}' class="position-absolute" height="150%" alt="">
                <div class="position-relative card-destination-title text-white">
                    <p class="text-left mx-5 mb-0 badge badge-warning">{{ $destination->category->name }}</p>
                    <h2 class="myfont-arciform">{{ $destination->name }}</h2>
                    <p class="text-small"><span><i class="fas fa-map-marker-alt"></i> {{ $destination->province->name }}</span></p>
                </div>
                <div class="text-left card-destination-des p-3">
                    <a href="{{ url("destination/$destination->id") }}" class="btn w-100 btn-warning shadow"><i class="fas fa-arrow-right"></i> Lebih Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-right">
        {{ $destinations->links() }}
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
</script>

@endsection
