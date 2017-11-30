@extends('layouts.app')

@section('page', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4 hidden-xs">
        <div class="card card-red">
            <div class="row">

                <div class="col-sm-2 col-md-4 col-lg-4">
                    <i class="fa fa-bar-chart card-icon"></i>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-title">
                                Visitors
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <i class="fa fa-home"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card-footer">
                        <button class="btn btn-xs btn-default">View Stats</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 hidden-xs">
        <div class="card card-blue">
            <div class="row">

                <div class="col-sm-2 col-md-4 col-lg-4">
                    <i class="fa fa-bar-chart card-icon"></i>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                This is a cool Card
                            </div>
                            <div class="col-md-12">
                                <i class="fa fa-home"></i>
                                This is a row with an icon!
                            </div>
                            <div class="col-md-12">
                                This is a 3rd row in the body!
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-xs btn-default">Button</button>
                                <button class="btn btn-xs btn-primary">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-4 hidden-xs">
        <div class="card card-green">
            <div class="row">

                <div class="col-sm-2 col-md-4 col-lg-4">
                    <i class="fa fa-bar-chart card-icon"></i>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                This is a cool Card
                            </div>
                            <div class="col-md-12">
                                <i class="fa fa-home"></i>
                                This is a row with an icon!
                            </div>
                            <div class="col-md-12">
                                This is a 3rd row in the body!
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-xs btn-default">Button</button>
                                <button class="btn btn-xs btn-primary">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop
