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
                                <h3 class="mb-0">Festivals</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('festivals.create') }}" class="btn btn-sm btn-primary"><i class="ni ni-fat-add"></i> Create new Festival</a>
                                <a href="{{ route('criteria.index') }}" class="btn btn-sm btn-primary">Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Placement</th>
                                    <th scope="col">Actions</th>
                                </thead>
                            </tr>
                            <tbody>
                                @foreach ($festivals as $festival)
                                    <tr>
                                        <td>
                                            <img src='{{ asset("img/festivals/$festival->picture") }}' width="100px" class="roundedme" alt="">
                                        </td>
                                        <td>{{ $festival->name }}</td>
                                    <td>{{ $festival->province->name }}, {{ $festival->city->name }}, {{ $festival->district->name }}, {{ $festival->village->name }}</td>
                                        <td>
                                            <a role="button" href='{{ url("admin/festival/edit/$festival->id") }}' class="btn btn-success btn-sm">Edit</a>
                                            <a role="button" onclick="return confirm('Yakin dihapus ?');" href='{{ url("admin/festival/destroy/$festival->id") }}' class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-5">
                            {{ $festivals->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

