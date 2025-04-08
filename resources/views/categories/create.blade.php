@extends('layouts.app')

@section('title', 'Category Create')

@section('contents')
    <h1 class="mb-0">Add Category</h1>
    <hr />
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="code" class="form-label">Category Code</label>
                <input type="text" id="code" name="code" class="form-control" placeholder="Category Code" required>
                @error('code')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Category Name" required>
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