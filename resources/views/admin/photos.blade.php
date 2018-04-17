@extends('layouts.app')

@section('page', 'Photos')

@section('content')
    <admin-photos :photos="{{$photos}}" :galleries="{{$galleries}}"></admin-photos>
@stop