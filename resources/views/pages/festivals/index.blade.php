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
                                <option value="kebudayaan">Kebudayaan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 text-right">
                        <button class="btn btn-warning shadow w-100"><i class="fas fa-search"></i> Cari</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card border-0 card-fest position-relative">
                <div class="img-fest overflow-hidden bg-dark">
                    <img class="card-img-top" src="{{ asset('img/static/wall2.jpg') }}" alt="">
                </div>
                <div class="card-body card-body-fest shadow-sm">
                    <div class="kriteria-fest position-absolute bg-warning px-4 py-1"><i class="fas fa-mosque"></i> Kebudayaan</div>
                    <h4 class="card-title mb-0">Festival Kebudayaan</h4>
                    <p class="date-fest d-inline mr-3">
                        Malang, 12 juni 2020
                    </p>
                    <p class="icon-fest d-inline">
                        <span class="mr-2"><i class="fas fa-eye"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-comment"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-share"></i> 1 </span>
                    </p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ducimus?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card border-0 card-fest position-relative">
                <div class="img-fest overflow-hidden bg-dark">
                    <img class="card-img-top" src="{{ asset('img/static/wall2.jpg') }}" alt="">
                </div>
                <div class="card-body card-body-fest shadow-sm">
                    <div class="kriteria-fest position-absolute bg-warning px-4 py-1"><i class="fas fa-mosque"></i> Kebudayaan</div>
                    <h4 class="card-title mb-0">Festival Kebudayaan</h4>
                    <p class="date-fest d-inline mr-3">
                        Malang, 12 juni 2020
                    </p>
                    <p class="icon-fest d-inline">
                        <span class="mr-2"><i class="fas fa-eye"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-comment"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-share"></i> 1 </span>
                    </p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ducimus?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card border-0 card-fest position-relative">
                <div class="img-fest overflow-hidden bg-dark">
                    <img class="card-img-top" src="{{ asset('img/static/wall2.jpg') }}" alt="">
                </div>
                <div class="card-body card-body-fest shadow-sm">
                    <div class="kriteria-fest position-absolute bg-warning px-4 py-1"><i class="fas fa-mosque"></i> Kebudayaan</div>
                    <h4 class="card-title mb-0">Festival Kebudayaan</h4>
                    <p class="date-fest d-inline mr-3">
                        Malang, 12 juni 2020
                    </p>
                    <p class="icon-fest d-inline">
                        <span class="mr-2"><i class="fas fa-eye"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-comment"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-share"></i> 1 </span>
                    </p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ducimus?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card border-0 card-fest position-relative">
                <div class="img-fest overflow-hidden bg-dark">
                    <img class="card-img-top" src="{{ asset('img/static/wall2.jpg') }}" alt="">
                </div>
                <div class="card-body card-body-fest shadow-sm">
                    <div class="kriteria-fest position-absolute bg-warning px-4 py-1"><i class="fas fa-mosque"></i> Kebudayaan</div>
                    <h4 class="card-title mb-0">Festival Kebudayaan</h4>
                    <p class="date-fest d-inline mr-3">
                        Malang, 12 juni 2020
                    </p>
                    <p class="icon-fest d-inline">
                        <span class="mr-2"><i class="fas fa-eye"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-comment"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-share"></i> 1 </span>
                    </p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ducimus?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card border-0 card-fest position-relative">
                <div class="img-fest overflow-hidden bg-dark">
                    <img class="card-img-top" src="{{ asset('img/static/wall2.jpg') }}" alt="">
                </div>
                <div class="card-body card-body-fest shadow-sm">
                    <div class="kriteria-fest position-absolute bg-warning px-4 py-1"><i class="fas fa-mosque"></i> Kebudayaan</div>
                    <h4 class="card-title mb-0">Festival Kebudayaan</h4>
                    <p class="date-fest d-inline mr-3">
                        Malang, 12 juni 2020
                    </p>
                    <p class="icon-fest d-inline">
                        <span class="mr-2"><i class="fas fa-eye"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-comment"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-share"></i> 1 </span>
                    </p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ducimus?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card border-0 card-fest position-relative">
                <div class="img-fest overflow-hidden bg-dark">
                    <img class="card-img-top" src="{{ asset('img/static/wall2.jpg') }}" alt="">
                </div>
                <div class="card-body card-body-fest shadow-sm">
                    <div class="kriteria-fest position-absolute bg-warning px-4 py-1"><i class="fas fa-mosque"></i> Kebudayaan</div>
                    <h4 class="card-title mb-0">Festival Kebudayaan</h4>
                    <p class="date-fest d-inline mr-3">
                        Malang, 12 juni 2020
                    </p>
                    <p class="icon-fest d-inline">
                        <span class="mr-2"><i class="fas fa-eye"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-comment"></i> 1 </span>
                        <span class="mr-2"><i class="fas fa-share"></i> 1 </span>
                    </p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ducimus?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button class="btn btn-warning shadow-warning w-25"><i class="fas fa-arrow-right"></i> Selengkapnya</button>
    </div>
</div>
@endsection
