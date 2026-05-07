@extends('layouts.seller')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Upload Material</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="border-top: 3px solid #12d1a5;">
                <h3 class="card-title font-weight-bold">Resource Details</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="e.g. Physics Form 4 Notes">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control">
                                    <option>Notes</option>
                                    <option>Exams</option>
                                    <option>Schemes</option>
                                    <option>Lesson Plans</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price (TZS)</label>
                                <input type="number" class="form-control" placeholder="0 for Free">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>File Upload</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" placeholder="Briefly describe your material..."></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Publish Material</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
