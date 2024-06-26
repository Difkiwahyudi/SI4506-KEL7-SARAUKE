@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
            <a href="{{ route('travel-package.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel
            </a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Type</th>
                                <th>Departure Date</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td width="15%">{{ $item->title }}</td>
                                    <td width="25%">{{ $item->location }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->departure_date }}</td>
                                    <td>{{ 'Rp.' . number_format($item->price) }}</td>
                                    <td>
                                        <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button class="btn btn-danger" onclick="deleteTravelPackage({{ $item->id }})">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('travel-package.destroy', $item->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
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
                <div class="d-flex justify-content-center">
                    {{ $items->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <script>
        function deleteTravelPackage(id) {
            if (confirm("Apakah Anda yakin ingin menghapus paket travel ini?")) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
@endsection
