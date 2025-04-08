@extends('layouts.app')
@section('title', 'Edit Brand')

@section('contents')
    <h1 class="mb-0"> Edit Brand </h1>
    <hr />
    <form action="{{ route('brands.update', $brand->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Brand Code</label>
                <input type="text" name="code" class="form-control" placeholder="Brand Code" value="{{ $brand->code }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Brand Name</label>
                <input type="text" name="name" class="form-control" placeholder="Brand name" value="{{ $brand->name }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="Active" {{ $brand->status == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ $brand->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning"> Update </button>
            </div>
        </div>
    </form>
@endsection
