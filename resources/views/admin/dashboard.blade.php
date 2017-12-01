@extends('layouts.app')

@section('page', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-3 hidden-xs">
            <card color="default"
                  icon="users"
                  title="Contacts"
                  url="/admin/contacts"
                  value="65"
                  chart="line"></card>
        </div>
        <div class="col-md-3 hidden-xs">
            <card color="blue"
                  icon="globe"
                  title="Visitors"
                  url="/admin/visitors"
                  value="120"
                  chart="line"></card>
        </div>
        <div class="col-md-3 hidden-xs">
            <card color="green"
                  icon="bar-chart"
                  title="YTD Sales"
                  url="/admin/sales"
                  value="10k"
                  chart="line"></card>
        </div>
        <div class="col-md-3 hidden-xs">
            <card color="purple"
                  icon="comments"
                  title="Reviews"
                  url="/admin/reviews"
                  value="40"
                  chart="line"></card>
        </div>
    </div>
@stop
