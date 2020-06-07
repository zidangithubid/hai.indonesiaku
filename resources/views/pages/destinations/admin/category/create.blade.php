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
                                <h3 class="mb-0">Create New Category of Destinations</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col px-5">
                            <form id="form-destination" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Name Categories</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Some categories destination's name" aria-describedby="helpId">
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
            $('input, select').attr('required', true);
            $('#form-destination').off().submit(function(e) {
                e.preventDefault();
                let token = $('input[name="_token"]').val()
                $.ajax({
                    url: "{{ url('admin/destinations/categories/store') }}",
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
                            alert('Data Category Berhasil Ditambahkan');
                            window.location.href = "{{ url('admin/destinations/categories') }}"
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
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

