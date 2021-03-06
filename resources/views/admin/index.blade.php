@extends('layouts.admin')

@section('content')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Books</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Books list</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{route('admin.book.add')}}" class="btn btn-sm btn-neutral">New</a>
                    <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-0">Inline actions</h3>
                </div>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Title</th>
                        <th>Volume</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($books) == 0)
                    <tr>
                        <td colspan="5">
                            There isn't any book.
                        </td>
                    </tr>
                    @else
                    @foreach($books as $index => $item)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>
                            {{$item->barcode}}
                        </td>
                        <td>
                            {{$item->title}}
                        </td>
                        <td>
                            {{$item->volume}}
                        </td>
                        <td class="table-action">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection