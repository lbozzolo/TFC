@extends('index')
    @section('content')
        {{ trans('messages.welcome') }}

        <h1>{{Auth::user()->email}}</h1>
        <h1>{{Auth::user()->db}}</h1>
        <h1>{{Auth::user()->Perfil()->first()->profile}}</h1>
    @endsection
@stop