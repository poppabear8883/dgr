@extends('layouts.app')

@section('page', 'Contacts')

@section('content')
    <admin-contacts
            :contacts="{{$contacts}}"
            :daily-data="{{$daily_data}}"
            :monthly-data="{{$monthly_data}}"
    ></admin-contacts>
@stop
