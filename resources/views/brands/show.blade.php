@extends('layouts.app')
@section('title', 'Show Brand')

@section('contents')
    <h1 class="mb-0">Detail Brands</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Brand Code</label>
            <input type="text" name="code" class="form-control" placeholder="Brand Code" value="{{ $brand->code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Brand Name</label>
            <input type="text" name="name" class="form-control" placeholder="Brand Name" value="{{ $brand->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $brand->status }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $brand->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $brand->updated_at }}" readonly>
        </div>
    </div>
@endsection