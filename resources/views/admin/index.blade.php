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
                            <li class="breadcrumb-item active" aria-current="page">Tables</li>
                        </ol>
                    </nav>
                </div>
                <!-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div> -->
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
                        <th>Author</th>
                        <th>Created at</th>
                        <th>Product</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-user">                            
                            <b>John Michael</b>
                        </td>
                        <td>
                            <span class="text-muted">10/09/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-user">                            
                            <b>Alex Smith</b>
                        </td>
                        <td>
                            <span class="text-muted">08/09/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Argon Design System</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-user">                            
                            <b>Samantha Ivy</b>
                        </td>
                        <td>
                            <span class="text-muted">30/08/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Black Dashboard</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-user">                            
                            <b>John Michael</b>
                        </td>
                        <td>
                            <span class="text-muted">10/09/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-user">                            
                            <b>John Michael</b>
                        </td>
                        <td>
                            <span class="text-muted">10/09/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection