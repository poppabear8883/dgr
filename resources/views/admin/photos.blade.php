@extends('layouts.app')

@section('page', 'Photos')

@section('content')
    <admin-photos :photos="{{$photos}}"></admin-photos>
@stop