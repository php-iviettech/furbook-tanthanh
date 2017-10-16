@extends('layouts.master')
@section('header')
    @if(isset($breed))
        <a href="{{url('/')}}">Back to overview</a>
    @endif
    <h2>
        {{$cat->name}}
    </h2>
        <a href="{{url('/cats'.$cat->id.'/edit')}}">
            <span class="glyphicon glyphicon-edit"></span>edit</a>

            <a href="{{url('/cats'.$cat->id.'/detele')}}">
                <span class="glyphicon glyphicon-edit"></span>
            detele</a>
    <p> last ;</p>

@endsection
@section('content')
    <p>date of brithday : {{$cat->date_of_birth}}</p>
    <p>

        @if($cat->breed)
            Breed: <a href="{{url('/cats/breed/'.$cat->breed->name)}}">{{$cat->breed->name}}</a>

    @endif
    </p>
@endsection
