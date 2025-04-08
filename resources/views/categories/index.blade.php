@extends('layouts.app')

@section('title', 'Home Category')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"> List Category </h1>
        <a href="{{route('categories.create')}}" class="btn btn-primary"> Add Category </a>
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
                <th> Status (Active/Inactive) </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @if($category->count() >0)
                @foreach($category as $re)
                    <tr>
                        <td class ="align-middle"> {{ $loop->iteration }} </td>
                        <td class ="align-middle"> {{ $re->code }} </td>
                        <td class ="align-middle"> {{ $re->name }} </td>
                        <td class ="align-middle"> {{ $re->status }} </td>
                        <td class ="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('categories.show', $re->id)}}" type="button" class="btn btn-secondary"> Detail </a>
                                <a href="{{route('categories.edit', $re->id)}}" type="button" class="btn btn-warning"> Edit </a>
                                <form action="{{ route('categories.destroy', $re->id) }}" method="POST" class="btn btn-danger">
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
                    <td colspan="5" class="text-center"> No Brands Found </td>
                
                </tr>
            @endif
        </tbody>                     
    </table>
@endsection
        
    
            