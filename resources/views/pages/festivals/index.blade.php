@extends('layouts.frontend')

@section('festivals', 'active-nav')

@section('content')
<div class="container pt-5 pb-4 mt-5">
    <div class="row">
        <div class="col-md-12 text-white position-relative bg-danger rounded banner-fest p-4 pt-5 overflow-hidden">
            <img src="{{ asset('img/static/wall1.jpg') }}" class="bg-banner w-100 position-absolute absolutely" alt="">
            <img src="{{ asset('img/static/favicon.png') }}" class="w-25 logo-lg-banner-fest position-absolute" alt="">
            <div class="row mt-3">
                <div class="col-md-7">
                    <div class="position-relative">
                        <h3 class="myfont-arciform">Cari event festival yang pas, biar travellingmu lebih seru</h3>
                        <p>Hanya di <span class="text-warning font-weight-bold">{{ env('APP_NAME') }}</span></p>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <img src="{{ asset('img/static/favicon.png') }}" class="w-25 logo-banner-fest" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pb-4">
    <div class="row">
        <div class="col-md-12">
            <div class="w-100 bg-danger rounded p-3">
                <form action="" method="GET">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group mb-0">
                            <input type="text" id="name" name="name" class="form-control border-0" placeholder="Cari festivalmu..">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group mb-0">
                            <select name="ctr" id="ctr" class="form-control border-0">
                                <option value="">Pilih Category</option>
                                @foreach ($criterias as $criteria)
                                    <option value="{{ $criteria->id }}">{{ $criteria->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 text-right">
                        <button class="btn btn-warning shadow w-100"><i class="fas fa-search"></i> Cari</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    @if ((request()->get('name') == "" || !request()->get('name')) && (request()->get('ctr') == "" || !request()->get('ctr')))
        <a href="{{ url('festivals') }}" class="d-none btn btn-white bg-white shadow-sm"><i class="fas fa-eye"></i> Lihat semua</a>
    @else
        <a href="{{ url('festivals') }}" class="btn mt-4 btn-white bg-white shadow-sm"><i class="fas fa-eye"></i> Lihat semua</a>
    @endif
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
                        <p class="card-text mt-3"><a class="btn btn-warning shadow-warning btn-sm" href='{{ url("festival/$festival->id") }}'> <i class="fas fa-eye "></i> Detail </a></p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-right">
        <button class="btn btn-warning shadow-warning w-25"><i class="fas fa-arrow-right"></i> Selengkapnya</button>
    </div>
</div>
@endsection
