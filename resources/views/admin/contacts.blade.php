@extends('layouts.app')

@section('page', 'Contacts')

@section('content')
    <admin-contacts :contacts="{{$contacts}}" :chart-data="{{$chartdata}}"></admin-contacts>
@stop
