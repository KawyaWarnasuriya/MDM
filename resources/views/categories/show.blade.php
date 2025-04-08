@extends('layouts.app')
@section('title', 'Show Category')

@section('contents')
    <h1 class="mb-0">Detail Category</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Category Code</label>
            <input type="text" name="code" class="form-control" placeholder="Category Code" value="{{ $category->code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" placeholder="Category Name" value="{{ $category->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $category->status }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $category->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $category->updated_at }}" readonly>
        </div>
    </div>
@endsection