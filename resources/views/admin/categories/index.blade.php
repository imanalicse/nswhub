@extends('admin.layouts.app')

@section('content')
    <h1>Categories</h1>

    @if(count($categories) > 0)
        @foreach($categories as $category)
            <div class="well">    
                {{-- <h3><a href="{{url('/categories/'.$category->id)}}">{{$category->title}}</a></h3> --}}
                {{$category->title}}                       
            </div>
        @endforeach
    @else
        <p>No category found</p>
    @endif
@endsection