@extends('layouts.seller')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">My Materials</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('seller.materials.upload') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Upload New
                </a>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="border-top: 3px solid #12d1a5;">
                <h3 class="card-title font-weight-bold">Manage Content</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>File</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Sales</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Physics Form 4 Notes</td>
                            <td>Notes</td>
                            <td>TZS 5,000</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>12</td>
                            <td>
                                <button class="btn btn-info btn-xs"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
