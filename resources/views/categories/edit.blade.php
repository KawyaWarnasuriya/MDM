@extends('layouts.app')
@section('title', 'Edit Category')

@section('contents')
    <h1 class="mb-0"> Edit Category </h1>
    <hr />
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Category Code</label>
                <input type="text" name="code" class="form-control" placeholder="Category Code" value="{{ $category->code }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" placeholder="Category name" value="{{ $category->name }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="Active" {{ $category->status == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ $category->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
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
