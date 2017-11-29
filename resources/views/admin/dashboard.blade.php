@extends('layouts.app')

@section('page')
Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default card card-red">
            <div class="panel-body">
                <h1>PANEL 1</h1>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default card card-purple">
            <div class="panel-body">
                <h1>PANEL 2</h1>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default card card-magenta">
            <div class="panel-body">
                <h1>PANEL 3</h1>
            </div>
        </div>
    </div>
</div>
@endsection
