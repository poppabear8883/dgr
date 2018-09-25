@extends('layouts.app')

@section('page', 'Giveaway')

@section('content')
    <admin-giveaway :giveaway="{{$giveaway}}"></admin-giveaway>
@stop