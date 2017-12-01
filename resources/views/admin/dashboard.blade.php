@extends('layouts.app')

@section('page', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-3 hidden-xs">

        <div class="card card-red">
            <div class="row">

                <div class="col-sm-2 col-md-4 col-lg-4">
                    <div class="card-icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-8">
                    <div class="pull-right">
                        <div class="card-value">
                            65
                        </div>

                        <div class="card-title">
                            Contacts
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="#">View Contacts <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>

    </div>
    <div class="col-md-3 hidden-xs">
        <div class="card card-blue">
            <div class="row">

                <div class="col-sm-2 col-md-4 col-lg-4">
                    <div class="card-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-8">
                    <div class="pull-right">
                        <div class="card-value">
                            680
                        </div>

                        <div class="card-title">
                            Visits Today
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="#">View Details <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 hidden-xs">
        <div class="card card-green">
            <div class="row">

                <div class="col-sm-2 col-md-4 col-lg-4">
                    <div class="card-icon">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-8">
                    <div class="pull-right">
                        <div class="card-value">
                            10k
                        </div>

                        <div class="card-title">
                            Sales Today
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="#">View Sales <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 hidden-xs">
        <div class="card card-purple">
            <div class="row">

                <div class="col-sm-2 col-md-4 col-lg-4">
                    <div class="card-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-8">
                    <div class="pull-right">
                        <div class="card-value">
                            142
                        </div>

                        <div class="card-title">
                            Reviews
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="#">View Reviews <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
@stop
