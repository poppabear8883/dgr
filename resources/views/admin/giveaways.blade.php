@extends('layouts.app')

@section('page', 'Giveaways')

@section('content')
    <admin-giveaway :giveaway="{{$giveaway}}"></admin-giveaway>
@stop