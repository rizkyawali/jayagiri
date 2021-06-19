@extends('layouts.admin')

@section('title', 'List Paket Travel')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah Paket Travel
        </a>
    </div>

    <!-- Content -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Departure Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)    
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->departure_date }}</td>
                                <td>
                                    <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info btn-sm">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteModal">
                                        <i class="fa fa-trash-alt"></i>
                                    </a>
                                </td>
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
                                        aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModal">Delete {{ $item->title }}</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Apakah Anda Yakin Akan Menghapus Data Travel <b>{{ $item->title }}</b></div>
                                            <div class="modal-footer">
                                                <form action="{{ route('travel-package.destroy', $item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        Hapus
                                                    </button>
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>                           
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection