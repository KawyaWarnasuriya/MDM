@extends('layouts.app')

@section('title', 'Brand Create')

@section('contents')
    <h1 class="mb-0">Add Brands</h1>
    <hr />
    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="code" class="form-label">Brand Code</label>
                <input type="text" id="code" name="code" class="form-control" placeholder="Brand Code" required>
                @error('code')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col">
                <label for="name" class="form-label">Brand Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Brand Name" required>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">Select Status</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
                @error('status')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection