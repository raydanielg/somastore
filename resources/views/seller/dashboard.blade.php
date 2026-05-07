@extends('layouts.seller')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Seller Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>15</h3>
            <p>My Materials</p>
            </div>
            <div class="icon">
            <i class="fas fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>
            <p>Sales Rate</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>44</h3>
            <p>Total Downloads</p>
            </div>
            <div class="icon">
            <i class="fas fa-download"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>TZS 150,000</h3>
            <p>Total Earnings</p>
            </div>
            <div class="icon">
            <i class="fas fa-wallet"></i>
            </div>
            <a href="#" class="small-box-footer">Withdraw Funds <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="col-md-8">
            <!-- Sales Chart -->
            <div class="card">
                <div class="card-header" style="border-top: 3px solid #12d1a5;">
                    <h3 class="card-title font-weight-bold">
                        <i class="fas fa-chart-area mr-1"></i>
                        Earnings Overview (TZS)
                    </h3>
                </div>
                <div class="card-body">
                    <canvas id="earningsChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>

            <div class="card">
                <div class="card-header border-transparent" style="border-top: 3px solid #12d1a5;">
                    <h3 class="card-title font-weight-bold">Recent Uploads</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Material Name</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Earnings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">OR9842</a></td>
                                    <td>Physics Form 4 Notes</td>
                                    <td>Notes</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>TZS 5,000</td>
                                </tr>
                                <tr>
                                    <td><a href="#">OR1848</a></td>
                                    <td>History Midterm Exam 2024</td>
                                    <td>Exams</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>TZS 2,000</td>
                                </tr>
                                <tr>
                                    <td><a href="#">OR7429</a></td>
                                    <td>Biology Practical Guide</td>
                                    <td>Lab</td>
                                    <td><span class="badge badge-danger">Rejected</span></td>
                                    <td>TZS 0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-primary float-left">Upload New</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="border-top: 3px solid #12d1a5;">
                    <h3 class="card-title font-weight-bold">Top Selling Materials</h3>
                </div>
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                        <li class="item">
                            <div class="product-img">
                                <i class="fas fa-file-pdf fa-2x text-danger"></i>
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title text-dark">English Grammar Guide
                                    <span class="badge badge-success float-right">TZS 10,000</span></a>
                                <span class="product-description">
                                    Comprehensive guide for Form 1-4.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <i class="fas fa-file-word fa-2x text-primary"></i>
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title text-dark">Math Schemes 2024
                                    <span class="badge badge-info float-right">TZS 3,000</span></a>
                                <span class="product-description">
                                    Full year schemes for Secondary.
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                </div>
            </div>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $(document).ready(function() {
        // Welcome SweetAlert
        @if(session('success') || session('status'))
            Swal.fire({
                title: 'Welcome to Somastore!',
                text: 'Your registration was successful. Start uploading your educational materials and earn income.',
                icon: 'success',
                confirmButtonColor: '#12d1a5',
                timer: 5000,
                timerProgressBar: true
            });
        @endif

        // Earnings Chart
        const ctx = document.getElementById('earningsChart').getContext('2d');
        const earningsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Earnings (TZS)',
                    data: [10000, 25000, 15000, 45000, 30000, 80000, 150000],
                    backgroundColor: 'rgba(18, 209, 165, 0.1)',
                    borderColor: '#12d1a5',
                    borderWidth: 3,
                    pointBackgroundColor: '#12d1a5',
                    pointBorderColor: '#fff',
                    pointHoverRadius: 6,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'TZS ' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });
    });
</script>
@endpush
@endsection
