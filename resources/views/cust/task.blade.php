@extends('layouts.master')
@section('content')
<!-- Page -->
<div class="page">
    <div class="page-header" style="padding-bottom:0px;">
        <h1 class="page-title">Tasks</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Tasks</li>
        </ol>
    </div>
    <div class="page-content" style="margin-top:30px">
        <div class="row" data-plugin="masonry">
            <div class="col-md-12 masonry-item">
                <div class="panel" style="border:1px solid #808080;">
                    <div class="panel-body" style='background:#e87643 !important'>
                        <!-- Example Tabs -->
                        <div class="example-wrap">
                            <div class="nav-tabs-horizontal" data-plugin="tabs">
                                <h5 style="color:white"><i class='icon wb-eye' style='font-size:15px;'aria-hidden='true'></i><a href="/alltasks" style="color:white;text-decoration:none">View all tasks</a></h5>
                                <div class="tab-content pt-20">
                                    <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                                        <form class="modal-content" id="new_tasks_form" autocomplete="off" style="margin-bottom: 20px; !important">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleFormModalLabel">New Task</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-control-label" style="color:black !important">Subject <span class="required" style="color:red;">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" placeholder="Enter subject" id="subject" name="subject">
                                                        <span class="subject-error error"></span>
                                                    </div>
                                                    <div class="col-xl-6 form-group">
                                                        <label class="form-control-label" style="color:black !important">Select a Date <span class="required" style="color:red;">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" placeholder="select a date" data-plugin="datepicker" id="task_creation_date" data-date-format="yyyy-mm-dd" data-start-date="d0" name="task_creation_date">
                                                        <span class="task_creation_date-error error"></span>
                                                    </div>
                                                    <div class="col-xl-6 form-group">
                                                        <label class="form-control-label" style="color:black !important">Description <span class="required" style="color:red;">*</span>
                                                        </label>
                                                        <textarea class="form-control" rows="5" placeholder="enter description here" id="description" name="description"></textarea>
                                                        <span class="description-error error"></span>
                                                    </div>
                                                    <div class="col-xl-6 form-group">
                                                        <label class="form-control-label" style="color:black !important">Set Priority <span class="required" style="color:red;">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" placeholder="enter priority" name="priority" id="priority">
                                                        <span class="priority-error error" id="errmsg"></span>
                                                    </div>
                                                    <div class="offset-md-5 float-right">
                                                        <button class="btn btn-primary" id="save_new_task" style="margin-top: 38px;" type="button">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Example Tabs -->
                    </div>
                 
                </div><!--Panel  ends-->     
            </div>
        </div>
    </div>

</div>
<!-- End Page -->
@stop
@section('page-scripts')
<script src=" {{ asset('js/task.js') }} "></script>
@endsection