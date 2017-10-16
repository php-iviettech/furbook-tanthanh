@extends('layouts.master')
@section('header')
    @if(isset($breed))
        <a href="{{url('/')}}">Back to overview</a>
        @endif
    <h2>
        All @if(isset($breed)){{$breed->name}} @endif Cats
        <a href="{{url('/cats/create')}}" class="btn btn-primary pull-right">
            add new cat
        </a>

    </h2>
    @endsection
    @section('content')
    @foreach($cats as $cat)
        <div class="cat">
            <a href="{{url('/cat'.$cat->id)}}">
                <strong>{{$cat->name}}</strong> - {{$cat->breed->name}}

        </a></div>

        @endforeach
@stop