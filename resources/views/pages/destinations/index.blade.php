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
            <form method="POST">
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
                    <select name="ctr" id="ctr" class="form-control">
                        <option value="">Pilih Category</option>
                        <option value="jawatimur">Gunung</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="prov" id="prov" class="form-control">
                        <option value="">Pilih Provinsi</option>
                        <option value="jawatimur">Jawatimur</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="city" id="city" class="form-control">
                        <option value="">Pilih Kota / Kabupaten</option>
                        <option value="malang">Malang</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="distict" id="distict" class="form-control">
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
                    <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                    <div class="position-relative text-white text-center top_destination_caption">
                        <h3 class="myfont-arciform">Malang</h3>
                        <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> Jawa</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="top_destination overflow-hidden bg-dark position-relative shadow">
                    <img src="{{ asset('img/static/wall2.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                    <div class="position-relative text-white text-center top_destination_caption">
                        <h3 class="myfont-arciform">Lombok</h3>
                        <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> Sulawesi</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="top_destination overflow-hidden bg-dark position-relative shadow">
                    <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                    <div class="position-relative text-white text-center top_destination_caption">
                        <h3 class="myfont-arciform">Makassar</h3>
                        <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> Sumatra</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="top_destination overflow-hidden bg-dark position-relative shadow">
                    <img src="{{ asset('img/static/wall2.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                    <div class="position-relative text-white text-center top_destination_caption">
                        <h3 class="myfont-arciform">Yogyakarta</h3>
                        <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> Jawa</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="top_destination overflow-hidden bg-dark position-relative shadow">
                    <img src="{{ asset('img/static/wall2.jpg') }}" class="position-absolute top_destination_img" alt="sumatra">
                    <div class="position-relative text-white text-center top_destination_caption">
                        <h3 class="myfont-arciform">Lombok</h3>
                        <p class="top_destination_prov"><i class="fas fa-map-marked-alt"></i> Sulawesi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-md-3 my-3">
            <div class="card-destination-page position-relative overflow-hidden text-center">
                <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute" alt="">
                <div class="position-relative card-destination-title text-white">
                    <p class="text-left mx-5 mb-0">Gunung</p>
                    <h1 class="myfont-arciform">Arjuna</h1>
                    <p><span><i class="fas fa-map-marker-alt"></i> Pasuruan, Jawatimur</span></p>
                </div>
                <div class="text-left card-destination-des p-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur praesentium sunt minima sint dolor voluptatibus quos harum, veritatis nobis maxime.</p>
                    <p class="icon-destination text-center mt-4">
                        <span class="mr-3"><i class="text-danger fas fa-eye"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-comment"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-share"></i> 1</span></p>
                    <button class="btn btn-warning shadow-warning"><i class="fas fa-arrow-right"></i> Lebih Detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card-destination-page position-relative overflow-hidden text-center">
                <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute" alt="">
                <div class="position-relative card-destination-title text-white">
                    <p class="text-left mx-5 mb-0">Gunung</p>
                    <h1 class="myfont-arciform">Arjuna</h1>
                    <p><span><i class="fas fa-map-marker-alt"></i> Pasuruan, Jawatimur</span></p>
                </div>
                <div class="text-left card-destination-des p-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur praesentium sunt minima sint dolor voluptatibus quos harum, veritatis nobis maxime.</p>
                    <p class="icon-destination text-center mt-4">
                        <span class="mr-3"><i class="text-danger fas fa-eye"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-comment"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-share"></i> 1</span></p>
                    <button class="btn btn-warning shadow-warning"><i class="fas fa-arrow-right"></i> Lebih Detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card-destination-page position-relative overflow-hidden text-center">
                <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute" alt="">
                <div class="position-relative card-destination-title text-white">
                    <p class="text-left mx-5 mb-0">Gunung</p>
                    <h1 class="myfont-arciform">Arjuna</h1>
                    <p><span><i class="fas fa-map-marker-alt"></i> Pasuruan, Jawatimur</span></p>
                </div>
                <div class="text-left card-destination-des p-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur praesentium sunt minima sint dolor voluptatibus quos harum, veritatis nobis maxime.</p>
                    <p class="icon-destination text-center mt-4">
                        <span class="mr-3"><i class="text-danger fas fa-eye"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-comment"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-share"></i> 1</span></p>
                    <button class="btn btn-warning shadow-warning"><i class="fas fa-arrow-right"></i> Lebih Detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card-destination-page position-relative overflow-hidden text-center">
                <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute" alt="">
                <div class="position-relative card-destination-title text-white">
                    <p class="text-left mx-5 mb-0">Gunung</p>
                    <h1 class="myfont-arciform">Arjuna</h1>
                    <p><span><i class="fas fa-map-marker-alt"></i> Pasuruan, Jawatimur</span></p>
                </div>
                <div class="text-left card-destination-des p-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur praesentium sunt minima sint dolor voluptatibus quos harum, veritatis nobis maxime.</p>
                    <p class="icon-destination text-center mt-4">
                        <span class="mr-3"><i class="text-danger fas fa-eye"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-comment"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-share"></i> 1</span></p>
                    <button class="btn btn-warning shadow-warning"><i class="fas fa-arrow-right"></i> Lebih Detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card-destination-page position-relative overflow-hidden text-center">
                <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute" alt="">
                <div class="position-relative card-destination-title text-white">
                    <p class="text-left mx-5 mb-0">Gunung</p>
                    <h1 class="myfont-arciform">Arjuna</h1>
                    <p><span><i class="fas fa-map-marker-alt"></i> Pasuruan, Jawatimur</span></p>
                </div>
                <div class="text-left card-destination-des p-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur praesentium sunt minima sint dolor voluptatibus quos harum, veritatis nobis maxime.</p>
                    <p class="icon-destination text-center mt-4">
                        <span class="mr-3"><i class="text-danger fas fa-eye"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-comment"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-share"></i> 1</span></p>
                    <button class="btn btn-warning shadow-warning"><i class="fas fa-arrow-right"></i> Lebih Detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card-destination-page position-relative overflow-hidden text-center">
                <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute" alt="">
                <div class="position-relative card-destination-title text-white">
                    <p class="text-left mx-5 mb-0">Gunung</p>
                    <h1 class="myfont-arciform">Arjuna</h1>
                    <p><span><i class="fas fa-map-marker-alt"></i> Pasuruan, Jawatimur</span></p>
                </div>
                <div class="text-left card-destination-des p-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur praesentium sunt minima sint dolor voluptatibus quos harum, veritatis nobis maxime.</p>
                    <p class="icon-destination text-center mt-4">
                        <span class="mr-3"><i class="text-danger fas fa-eye"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-comment"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-share"></i> 1</span></p>
                    <button class="btn btn-warning shadow-warning"><i class="fas fa-arrow-right"></i> Lebih Detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card-destination-page position-relative overflow-hidden text-center">
                <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute" alt="">
                <div class="position-relative card-destination-title text-white">
                    <p class="text-left mx-5 mb-0">Gunung</p>
                    <h1 class="myfont-arciform">Arjuna</h1>
                    <p><span><i class="fas fa-map-marker-alt"></i> Pasuruan, Jawatimur</span></p>
                </div>
                <div class="text-left card-destination-des p-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur praesentium sunt minima sint dolor voluptatibus quos harum, veritatis nobis maxime.</p>
                    <p class="icon-destination text-center mt-4">
                        <span class="mr-3"><i class="text-danger fas fa-eye"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-comment"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-share"></i> 1</span></p>
                    <button class="btn btn-warning shadow-warning"><i class="fas fa-arrow-right"></i> Lebih Detail</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card-destination-page shadow-sm position-relative overflow-hidden text-center">
                <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute" alt="">
                <div class="position-relative card-destination-title text-white">
                    <p class="text-left mx-5 mb-0">Gunung</p>
                    <h1 class="myfont-arciform">Arjuna</h1>
                    <p><span><i class="fas fa-map-marker-alt"></i> Pasuruan, Jawatimur</span></p>
                </div>
                <div class="text-left card-destination-des p-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur praesentium sunt minima sint dolor voluptatibus quos harum, veritatis nobis maxime.</p>
                    <p class="icon-destination text-center mt-4">
                        <span class="mr-3"><i class="text-danger fas fa-eye"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-comment"></i> 1</span>
                        <span class="mr-3"><i class="text-danger fas fa-share"></i> 1</span></p>
                    <button class="btn btn-warning shadow-warning"><i class="fas fa-arrow-right"></i> Lebih Detail</button>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button class="btn btn-warning shadow-warning w-25"><i class="fas fa-arrow-right"></i> Lebih banyak</button>
    </div>
</div>

@endsection
