@extends('layouts.master')
@section('content')
<!-- Page -->
<div class="page">
    <div class="page-content" style="margin-top:30px">
        <div class="row" data-plugin="masonry">
            <div class="col-md-12 masonry-item">
                <div class="panel" style="border:1px solid #808080;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-6" style="">
                                <!-- <div class="cardnew border"> -->
                                <div class="card card-block card-inverse bg-primary text-center cardstyle">
                                    <!-- <blockquote class="blockquote cover-quote card-blockquote"> -->
                                    <div class="card-watermark darker font-size-60 m-15"><i class="fa fa-usd" aria-hidden="true"></i></div>
                                    <div class="counter counter-md counter-inverse text-left">
                                        <div class="counter-number-wrap font-size-30">
                                            <span class="counter-number">$1750</span>
                                            <span class="counter-number-related text-capitalize"></span>
                                        </div>
                                        <div class="counter-label text-capitalize">Invoices</div>
                                    </div>
                                    <!-- </blockquote> -->
                                </div>
                                <!-- </div> -->
                            </div>
                            <div class="col-md-3 col-sm-6" style="">
                                <!-- <div class="cardnew border"> -->
                                <div class="card card-block card-inverse bg-warning text-center cardstyle">
                                    <!-- <blockquote class="blockquote cover-quote card-blockquote"> -->
                                    <div class="card-watermark darker font-size-60 m-15"><i class="fa fa-file-o" aria-hidden="true"></i></div>
                                    <div class="counter counter-md counter-inverse text-left">
                                        <div class="counter-number-wrap font-size-30">
                                            <span class="counter-number">$1750</span>
                                            <span class="counter-number-related text-capitalize"></span>
                                        </div>
                                        <div class="counter-label text-capitalize">Open Invoices</div>
                                    </div>
                                    <!-- </blockquote> -->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6" style="">
                                <!-- <div class="cardnew border"> -->
                                <div class="card card-block card-inverse bg-danger text-center cardstyle">
                                    <!-- <blockquote class="blockquote cover-quote card-blockquote"> -->
                                    <div class="card-watermark darker font-size-60 m-15"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></div>
                                    <div class="counter counter-md counter-inverse text-left">
                                        <div class="counter-number-wrap font-size-30">
                                            <span class="counter-number">$1750</span>
                                            <span class="counter-number-related text-capitalize"></span>
                                        </div>
                                        <div class="counter-label text-capitalize">Payments</div>
                                    </div>
                                    <!-- </blockquote> -->
                                </div>
                                <!-- </div> -->
                            </div>
                            <div class="col-md-3 col-sm-6" style="">
                                <!-- <div class="cardnew border"> -->
                                <div class="card card-block card-inverse bg-success text-center cardstyle">
                                    <!-- <blockquote class="blockquote cover-quote card-blockquote"> -->
                                    <div class="card-watermark darker font-size-60 m-15"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <div class="counter counter-md counter-inverse text-left">
                                        <div class="counter-number-wrap font-size-30">
                                            <span class="counter-number">1750+</span>
                                            <span class="counter-number-related text-capitalize"></span>
                                        </div>
                                        <div class="counter-label text-capitalize">Contacts</div>
                                    </div>
                                    <!-- </blockquote> -->
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- Example Tabs -->
                        <div class="example-wrap">
                            <div class="nav-tabs-horizontal" data-plugin="tabs">
                                <div class="tab-content pt-20">
                                    <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                                        <h3 style="color: #526069">Tasks</h3>
                                        <table class="table table-hover dataTable table-striped w-full" id="dashboard_tasks_table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Subject</th>
                                                    <th>Description</th>
                                                    <th>Contact_full_name</th>
                                                    <th>Name</th>
                                                    <th>Due Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Example Tabs -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- End Page -->
@endsection
@section('page-scripts')
<script src="{{ asset('js/dashboard.js') }}"></script>
@endsection