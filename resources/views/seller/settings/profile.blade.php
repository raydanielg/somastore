@extends('layouts.seller')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Profile & Settings</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image Card -->
                <div class="card card-outline" style="border-top: 3px solid #12d1a5;">
                    <div class="card-body box-profile">
                        <div class="text-center position-relative mb-3">
                            <img id="profile-preview" class="profile-user-img img-fluid img-circle shadow-sm"
                                 src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&size=128&background=12d1a5&color=fff"
                                 alt="User profile picture" style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #12d1a5;">
                            <label for="profile_image" class="position-absolute" style="bottom: 0; right: 25%; cursor: pointer;">
                                <div class="bg-white rounded-circle shadow-sm p-2" style="border: 1px solid #ddd;">
                                    <i class="fas fa-camera text-primary"></i>
                                </div>
                                <input type="file" id="profile_image" class="d-none" accept="image/*">
                            </label>
                        </div>
                        <h3 class="profile-username text-center font-weight-bold mb-0">{{ Auth::user()->name }}</h3>
                        <p class="text-muted text-center small mb-3">Professional Educator</p>
                        
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Member Since</b> <a class="float-right text-dark small">{{ Auth::user()->created_at->format('M d, Y') }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Account Status</b> <a class="float-right"><span class="badge badge-success">Verified</span></a>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-block shadow-sm" onclick="handleImageUpdate()"><b>Update Photo</b></button>
                    </div>
                </div>

                <!-- Info Box -->
                <div class="card shadow-sm mt-3">
                    <div class="card-body p-3">
                        <h6 class="font-weight-bold"><i class="fas fa-shield-alt mr-2 text-warning"></i>Security Tip</h6>
                        <p class="small text-muted mb-0">Enable 2FA and use a strong password to keep your earnings safe.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card card-tabs shadow-sm">
                    <div class="card-header p-0 pt-1 border-bottom-0">
                        <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="info-tab" data-toggle="pill" href="#info" role="tab"><i class="fas fa-user mr-2"></i>Personal Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="payment-tab" data-toggle="pill" href="#payment" role="tab"><i class="fas fa-credit-card mr-2"></i>Payment Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"><i class="fas fa-lock mr-2"></i>Security</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="profileTabsContent">
                            <!-- Personal Info Tab -->
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <form id="profile-form">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Full Name</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Email Address</label>
                                            <input type="email" class="form-control" value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Phone Number</label>
                                            <input type="text" class="form-control" placeholder="e.g. +255 7XX XXX XXX">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Location</label>
                                            <input type="text" class="form-control" placeholder="e.g. Dar es Salaam, TZ">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="small font-weight-bold">Professional Bio</label>
                                            <textarea class="form-control" rows="3" placeholder="Tell students about your teaching experience..."></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4 mt-2 shadow-sm">Save Changes</button>
                                </form>
                            </div>

                            <!-- Payment Details Tab -->
                            <div class="tab-pane fade" id="payment" role="tabpanel">
                                <div class="alert alert-info border-0 mb-4" style="background: rgba(18, 209, 165, 0.1); color: #0fb994;">
                                    <i class="fas fa-info-circle mr-2"></i> This information is used for your monthly withdrawals.
                                </div>
                                <form id="payment-form">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Preferred Payout Method</label>
                                            <select class="form-control">
                                                <option>M-Pesa</option>
                                                <option>Tigo Pesa</option>
                                                <option>Airtel Money</option>
                                                <option>Halo Pesa</option>
                                                <option>Bank Transfer</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Registered Mobile Name</label>
                                            <input type="text" class="form-control" placeholder="Full name on SIM card">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Payment Phone Number</label>
                                            <input type="text" class="form-control" placeholder="e.g. 07XX XXX XXX">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Alternative Number (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Backup number">
                                        </div>
                                    </div>
                                    <div class="bg-light p-3 rounded mb-3 border">
                                        <h6 class="font-weight-bold small mb-2 text-dark"><i class="fas fa-university mr-2"></i>Bank Details (If Bank Transfer selected)</h6>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder="Bank Name">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder="Account Number">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control form-control-sm" placeholder="Account Holder">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4 shadow-sm">Update Payment Info</button>
                                </form>
                            </div>

                            <!-- Security Tab -->
                            <div class="tab-pane fade" id="password" role="tabpanel">
                                <form id="security-form">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Current Password</label>
                                            <input type="password" class="form-control" placeholder="••••••••">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">New Password</label>
                                            <input type="password" class="form-control" placeholder="Minimum 8 characters">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="small font-weight-bold">Confirm New Password</label>
                                            <input type="password" class="form-control" placeholder="••••••••">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4 mt-2 shadow-sm">Update Security</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Image Preview
    document.getElementById('profile_image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('profile-preview').setAttribute('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    });

    function handleImageUpdate() {
        if(!document.getElementById('profile_image').files.length) {
            Swal.fire({
                title: 'No file selected',
                text: 'Please choose an image first by clicking the camera icon.',
                icon: 'warning',
                confirmButtonColor: '#12d1a5'
            });
            return;
        }
        
        Swal.fire({
            title: 'Updating Photo...',
            didOpen: () => { Swal.showLoading() },
            timer: 1500
        }).then(() => {
            Swal.fire({
                title: 'Success!',
                text: 'Your profile picture has been updated.',
                icon: 'success',
                confirmButtonColor: '#12d1a5'
            });
        });
    }

    // Form Submissions with SweetAlert2
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            
            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm mr-2"></span> Saving...';

            // Simulate API Call
            setTimeout(() => {
                btn.disabled = false;
                btn.innerHTML = originalText;
                
                Swal.fire({
                    title: 'Settings Saved!',
                    text: 'Your changes have been updated successfully.',
                    icon: 'success',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    background: '#fff'
                });
            }, 1000);
        });
    });
</script>
@endpush
@endsection
