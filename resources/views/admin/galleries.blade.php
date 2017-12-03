@extends('layouts.app')

@section('page', 'Galleries')

@section('content')
    <admin-galleries :galleries="{{$galleries}}"></admin-galleries>
@stop
