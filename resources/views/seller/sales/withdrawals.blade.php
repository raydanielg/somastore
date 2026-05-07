@extends('layouts.seller')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Withdrawals</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header" style="border-top: 3px solid #12d1a5;">
                        <h3 class="card-title font-weight-bold">Request Payout</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Amount to Withdraw (TZS)</label>
                                <input type="number" class="form-control" placeholder="Min. TZS 10,000">
                                <small class="text-muted">Available: TZS 120,000</small>
                            </div>
                            <div class="form-group">
                                <label>Payout Method</label>
                                <select class="form-control">
                                    <option>M-Pesa</option>
                                    <option>Tigo Pesa</option>
                                    <option>Airtel Money</option>
                                    <option>Bank Transfer</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Request Withdrawal</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header" style="border-top: 3px solid #12d1a5;">
                        <h3 class="card-title font-weight-bold">Payout History</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Ref</th>
                                    <th>Amount</th>
                                    <th>Method</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>W-992</td>
                                    <td>TZS 50,000</td>
                                    <td>M-Pesa</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
