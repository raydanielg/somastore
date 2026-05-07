@extends('layouts.seller')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">My Subscription</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Current Subscription Status -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-success" style="border-top: 3px solid #12d1a5;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="font-weight-bold">Current Plan: <span class="text-success">Premium Seller</span></h4>
                                <p class="text-muted mb-0">Your subscription is active and provides full access to the seller marketplace.</p>
                                <p class="mt-2"><strong>Next billing date:</strong> June 7, 2026</p>
                            </div>
                            <div class="col-md-4 text-md-right">
                                <span class="badge badge-success px-3 py-2" style="font-size: 0.9rem;">ACTIVE</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Plans -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card card-outline card-primary h-100">
                    <div class="card-header text-center">
                        <h5 class="font-weight-bold">Monthly Plan</h5>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="font-weight-bold mb-3">TZS 10,000<small class="text-muted" style="font-size: 0.5em;">/mo</small></h2>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success mr-2"></i> Unlimited Uploads</li>
                            <li><i class="fas fa-check text-success mr-2"></i> 24/7 Support</li>
                            <li><i class="fas fa-check text-success mr-2"></i> Sales Analytics</li>
                        </ul>
                        <button class="btn btn-outline-primary btn-block">Current Plan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-outline card-success h-100" style="border-top: 3px solid #12d1a5;">
                    <div class="card-header text-center bg-light">
                        <h5 class="font-weight-bold text-success">Annual Plan</h5>
                        <span class="badge badge-warning">BEST VALUE</span>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="font-weight-bold mb-3">TZS 100,000<small class="text-muted" style="font-size: 0.5em;">/yr</small></h2>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success mr-2"></i> 2 Months Free</li>
                            <li><i class="fas fa-check text-success mr-2"></i> Priority Support</li>
                            <li><i class="fas fa-check text-success mr-2"></i> Featured Materials</li>
                        </ul>
                        <button class="btn btn-primary btn-block">Upgrade Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-outline card-dark h-100">
                    <div class="card-header text-center">
                        <h5 class="font-weight-bold">Free Plan</h5>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="font-weight-bold mb-3">TZS 0<small class="text-muted" style="font-size: 0.5em;">/mo</small></h2>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success mr-2"></i> 5 Uploads Limit</li>
                            <li><i class="fas fa-check text-success mr-2"></i> Basic Analytics</li>
                            <li class="text-muted"><i class="fas fa-times text-danger mr-2"></i> No Priority Support</li>
                        </ul>
                        <button class="btn btn-outline-dark btn-block">Switch to Free</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment History -->
        <div class="card mt-4">
            <div class="card-header" style="border-top: 3px solid #12d1a5;">
                <h3 class="card-title font-weight-bold">Payment History</h3>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Invoice ID</th>
                            <th>Plan</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Invoice</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#INV-5501</td>
                            <td>Monthly Plan</td>
                            <td>TZS 10,000</td>
                            <td>May 7, 2026</td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td><a href="#" class="btn btn-xs btn-default"><i class="fas fa-download"></i> PDF</a></td>
                        </tr>
                        <tr>
                            <td>#INV-4920</td>
                            <td>Monthly Plan</td>
                            <td>TZS 10,000</td>
                            <td>April 7, 2026</td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td><a href="#" class="btn btn-xs btn-default"><i class="fas fa-download"></i> PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
