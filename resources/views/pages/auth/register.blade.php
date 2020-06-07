@extends('layouts.frontend')

@section('header-class', 'd-none')

@section('content')
    <div class="container-fluid auth-page position-relative">
        <div class="position-absolute w-100 h-100 bg-danger back-opacity"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="w-100 shadow-sm border my-5 rounded bg-white p-4">
                        <div class="text-center">
                            <img src="{{ asset('img/static/favicon.png') }}" class="position-relative" style="top: -4px" width="55px" alt="">
                            <h3 class="d-inline text-danger">Register</h3>
                        </div>

                        <div class="step-register text-center mb-4">
                            <div id="span-one" class="d-inline-block bg-danger text-white">1</div>
                            <div id="span-two" class="d-inline-block">2</div>
                        </div>
                        <form method="POST" id="form-register">
                            <div class="first-field">
                                <div class="alert alert-danger alert-dismissible fade hide d-none" id="error-condition1" role="alert">
                                  {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button> --}}
                                  <strong id="error-text1">Lorem, ipsum dolor.</strong>
                                </div>
                                <script>
                                  $(".alert").alert();
                                </script>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" required name="name" id="name" class="form-control" placeholder="Your awesome name here" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" required name="email" id="email" class="form-control" placeholder="example@domain.com" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <input type="password" required name="password" id="password" class="form-control">
                                        <div class="input-group-prepend rounded bg-dark" id="show-pas1">
                                            <span class="input-group-text"><i class="fas fa-eye icon1"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2">Confirmation Password</label>
                                    <div class="input-group">
                                        <input type="password" required name="password2" id="password2" class="form-control">
                                        <div class="input-group-prepend rounded bg-dark" id="show-pas2">
                                            <span class="input-group-text"><i class="fas fa-eye icon2"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date_birthday">Birth</label>
                                    <input type="date" required name="date_birthday" id="date_birthday" class="form-control" aria-describedby="helpId">
                                </div>
                                <button class="btn btn-warning shadow-warning w-100 mb-3" type="button" id="first-btn"><i class="fas fa-arrow-right"></i> Next</button>
                            </div>
                            <div class="second-field d-none">
                                <div class="form-group">
                                    <label for="province-select">Province</label>
                                    <select required class="form-control" name="province_id" id="province-select">
                                        <option value="">Choose province</option>
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city-select">City</label>
                                    <select required class="form-control" name="city_id" id="city-select">
                                        <option value="">Choose city</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="district-select">District</label>
                                    <select required class="form-control" name="district_id" id="district-select">
                                        <option value="">Choose district</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="village-select">Village</label>
                                    <select required class="form-control" name="village_id" id="village-select">
                                        <option value="">Choose village</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="photo_profile">Photo</label>
                                    <input required class="form-control" type="file" onchange="loadFile(event)" name="photo_profile" id="photo_profile">
                                </div>
                                <div class="row">
                                    <div class="col-12 px-5 text-center">
                                    <img src="{{ asset('img/static/favicon.png') }}" id="preview" class="w-50 mb-3" alt="">
                                    </div>
                                </div>
                                <button class="btn btn-warning shadow-warning w-100 mb-3" id="second-btn"><i class="fas fa-arrow-right"></i> Daftar</button>
                            </div>
                        </form>
                        <hr>
                        <a href="{{ url('login') }}" role="button" class="btn btn-light border w-100">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function loadFile(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById('preview');
                preview.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
        $(document).ready(function() {
            $('#first-btn').click(function(e) {
                var name = $('#name').val(),
                email = $('#email').val(),
                password = $('#password').val(),
                password2 = $('#password2').val(),
                date_birthday = $('#date_birthday').val();
                if(name !== "" && email !== "" && password !== "" && password2 !== "" && date_birthday !== "") {
                    if(password === password2) {
                        $('.first-field').addClass('d-none');
                        $('.second-field').removeClass('d-none');
                        $('#span-one').removeClass('bg-danger text-white');
                        $('#span-two').addClass('bg-danger text-white');
                        $('#error-condition1').addClass('hide d-none').removeClass('show');
                    } else {
                        $('#error-condition1').alert();
                        $('#error-condition1').removeClass('hide d-none').addClass('show')
                        $('#error-text1').html("Error confirm password")
                    }
                } else {
                    $('#error-condition1').alert();
                    $('#error-condition1').removeClass('hide d-none').addClass('show');
                    $('#error-text1').html("Form are required");
                }
            });
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
            $('#show-pas1').click(function() {
                var input = document.getElementById("password");
                if(input.type === "password") {
                    input.type = "text";
                    $('.icon1').addClass('text-primary');
                } else {
                    input.type = "password";
                    $('.icon1').removeClass('text-primary');
                }
            });
            $('#show-pas2').click(function() {
                var input = document.getElementById("password2");
                if(input.type === "password") {
                    input.type = "text";
                    $('.icon2').addClass('text-primary');
                } else {
                    input.type = "password";
                    $('.icon2').removeClass('text-primary');
                }
            });

            $('#form-register').off().submit(function(e) {
                e.preventDefault();
                let token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ url('register') }}",
                    type: "POST",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': token,
                    },
                    success: function(data) {
                        if(data.success === true) {
                            alert('Berhasil daftar');
                            window.location.href = '{{ url("login") }}'
                        } else {
                            alert('Gagal');
                        }
                    }
                })
            });
        });
    </script>

@endsection
