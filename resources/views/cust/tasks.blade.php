@extends('layouts.master')
@section('content')
<!-- Page -->
<div class="page">
    <div class="page-header" style="padding-bottom:0px;">
        <h1 class="page-title">Tasks</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">AllTasks</li>
        </ol>
    </div>
    <div class="page-content" style="margin-top:30px">
        <div class="row" data-plugin="masonry">
            <div class="col-md-12 masonry-item">
                <div class="panel" style="border:1px solid #808080;">
                    <div class="panel-body">
                        <h3>All Tasks</h3>
                        <table class="table table-hover dataTable table-striped w-full" id="tasks_retreive_table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Subject</th>
                                    <th>Due Date</th>
                                    <th>Description</th>
                                    <th>Priority</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!--Panel  ends-->
            </div>
        </div>
    </div>

</div>
<!-- End Page -->
@stop
@section('page-scripts')
<script src=" {{ asset('js/gettasks.js') }} "></script>
@endsection