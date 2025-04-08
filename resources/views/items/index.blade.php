@extends('layouts.app')

@section('title', 'Home Items')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"> List Items </h1>
        <a href="{{route('items.create')}}" class="btn btn-primary"> Add Item </a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success " role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th> # </th>
                <th> Code </th>
                <th> Name </th>
                <th> Brand </th>
                <th> Category </th>
                <th> Status (Active/Inactive) </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @if($items->count() > 0)
                @foreach($items as $item)
                    <tr>
                        <td class="align-middle"> {{ $loop->iteration }} </td>
                        <td class="align-middle"> {{ $item->code }} </td>
                        <td class="align-middle"> {{ $item->name }} </td>
                        <td class="align-middle"> {{ $item->brand->name }} </td>
                        <td class="align-middle"> {{ $item->category->name }} </td>
                        <td class="align-middle"> {{ $item->status }} </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('items.show', $item->id)}}" class="btn btn-secondary"> Detail </a>
                                <a href="{{route('items.edit', $item->id)}}" class="btn btn-warning"> Edit </a>
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0"> Delete </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center"> No Items Found </td>
                </tr>
            @endif
        </tbody>                     
    </table>
@endsection
