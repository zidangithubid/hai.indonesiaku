@extends('layouts.app')

@section('content')
    <div class="w-100 py-7 position-absolute bg-gradient-primary"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow mt-8">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="{{ URL::previous() }}" class="btn btn-sm btn-primary"><i class="ni ni-bold-left"></i> Back</a>
                            </div>
                            <div class="col text-right">
                                <h3 class="mb-0">Create New Destination</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col px-5">
                            <form id="form-destination" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Name Destinations</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Some destination's name" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category_id" id="category" class="form-control">
                                        <option value="">Choose category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="province_id">Province</label>
                                    <select name="province_id" id="province-select" class="form-control">
                                        <option value="">Choose province</option>
                                        @foreach ($provinces as $prov)
                                            <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city_id">City</label>
                                    <select name="city_id" id="city-select" class="form-control">
                                        <option value="">Choose city</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="district_id">District</label>
                                    <select name="district_id" id="district-select" class="form-control">
                                        <option value="">Choose district</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="village_id">Village</label>
                                    <select name="village_id" id="village-select" class="form-control">
                                        <option value="">Choose village</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="picture">Picture</label>
                                            <input type="file" name="picture" onchange="loadFile(event)" id="picture" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col text-center">
                                        <img src="{{ asset('img/static/favicon.png') }}" id="preview" class="w-50" alt="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">description</label>
                                    <textarea name="description" id="description" cols="100" class="form-control editor" rows="10"></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary w-50 shadow mb-4">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var id_description = document.getElementById('description');
            CKEDITOR.replace(id_description, {
                language: 'en-gb',
            });
            CKEDITOR.config.allowedContent = true;
            function loadFile(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var preview = document.getElementById('preview');
                    preview.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            };
            $('input, select').attr('required', true);
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
                            city = '<option value="">Choose city</option>';
                            $.each(data.data, function(key, value) {
                                city += '<option value="' + value.id + '">' + value.name + '</option>'
                            });
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
                            district = '<option value="">Choose district</option>'
                            $.each(data.data, function(key, value) {
                                district += '<option value="' + value.id + '">' + value.name + '</option>'
                            });
                            $('#district-select').html(district);
                        }
                    }
                })
            });
            $('#district-select').change(function() {
                var id_district = $(this).val();
                $.ajax({
                    url: "{{ url('villages') }}" + "/" + id_district,
                    type: "GET",
                    dataType: "json",
                    async: "json",
                    success: function(data) {
                        if(data.success === true) {
                            var village;
                            village = '<option value="">Choose village</option>'
                            $.each(data.data, function(key, value) {
                                village += '<option value="' + value.id + '">' + value.name + '</option>'
                            });
                            $('#village-select').html(village);
                        }
                    }
                })
            });
            $('#form-destination').off().submit(function(e) {
                $('.editor').each(function() {
                    var name = $(this).attr('name');
                    CKEDITOR.instances[name].updateElement();
                })
                e.preventDefault();
                let token = $('input[name="_token"]').val()
                $.ajax({
                    url: "{{ url('admin/destination/store') }}",
                    type: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': token,
                    },
                    success: function(data) {
                        if(data.success === true) {
                            alert('Data Destinasi Berhasil Ditambahkan');
                            window.location.href = "{{ url('admin/destinations') }}"
                        } else {
                            alert('Data Destinasi Gagal ditambahkan');
                            console.log(data)
                        }
                    }
                })
            });
        </script>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/script.admin.js') }}"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

