@extends('layouts.admin')

@section('title', 'Tambah Gallery')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
    </div>

    {{--  Error MSG  --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Content -->
    <div class="card shadow">
        <div class="card-body">
            <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="travel_packages_id">Paket Travel</label>
                    <select name="travel_packages_id" id="travel_packages_id" class="form-control" required>
                        <option value="">--Pilih Paket Travel--</option>
                        @foreach ($travel_packages as $travel_package)
                            <option value="{{ $travel_package->id }}">
                                {{ $travel_package->title }}
                            </option>
                        @endforeach
                    </select>    
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" name="image" placeholder="Gambar Travel" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">
                        <i class="fa fa-check fa-sm"></i> Submit
                    </button>
                </div> 
            </form>
        </div>
    </div>

</div>
@endsection