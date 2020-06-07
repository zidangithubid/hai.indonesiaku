@extends('layouts.frontend')

@section('destinations', 'active-nav')

@section('content')

    <div class="container-fluid">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-10 offset-md-1">
                    <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger shadow-sm mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>

                <h2 class="mb-1">{{ $destination->name }} <span class="badge badge-warning">{{ $destination->category->name }}</span></h2>
                    <p class="my-0 d-inline" style="font-size: .75rem">
                        <i class="fas fa-map-marker-alt"></i> {{ $destination->province->name }}, {{ $destination->city->name }}, {{ $destination->district->name }}
                        <span class="mx-3">|</span>
                    </p>
                    <p class="my-0 d-inline" style="font-size: .75rem">
                        <i class="fas fa-clock"></i> {{ $destination->created_at }}
                    </p>

                    <div class="text-center my-3">
                        <img src='{{ asset("img/destinations/$destination->picture") }}' class="w-75" alt="">
                    </div>

                    {!! html_entity_decode($destination->description) !!}

                </div>
            </div>
        </div>
    </div>

@endsection
