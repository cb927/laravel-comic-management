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
                        <th>RentAt</th>
                        <th>ReturnAt</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($rented_books) == 0)
                    <tr>
                        <td colspan="5">
                            There isn't any book.
                        </td>
                    </tr>
                    @else
                    @foreach($rented_books as $index => $item)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>
                            {{$item->barcode}}
                        </td>
                        <td>
                            {{$item->title}}
                        </td>
                        <td>
                            {{$item->rent_at}}
                        </td>
                        <td class="table-action">
                            {{$item->return_at}}
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