@extends('layouts.master')
@section('content')
<!-- Page -->
<div class="page">
    <div class="page-header" style="padding-bottom:0px;">
        <h1 class="page-title">Tasks</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Tools</a></li>
            <li class="breadcrumb-item active">Tasks</li>
        </ol>
    </div>
    <div class="page-content" style="margin-top:30px">
        <div class="row" data-plugin="masonry">
            <div class="col-md-12 masonry-item">
                <div class="panel" style="border:1px solid #808080;">
                    <div class="panel-body">
                        <!-- Example Tabs -->
                        <div class="example-wrap">
                            <div class="nav-tabs-horizontal" data-plugin="tabs">
                                <div class="tab-content pt-20">
                                    <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                                        <table class="table table-hover dataTable table-striped w-full" id="tasks_table">
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
                        <!--Second Table-->
                        <!-- Example Tabs -->
                        <div class="example-wrap">
                            <div class="nav-tabs-horizontal" data-plugin="tabs">
                                <h3>Personal Tasks</h3>
                                <div class="tab-content pt-20">
                                    <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                                        <div style="float:right">
                                            <button class="btn btn-warning btn-xs" data-target="#exampleFormModal" data-toggle="modal"><i class="icon wb-plus" aria-hidden="true" style="font-weight:600; font-size:20px;"></i>
                                            </button>
                                        </div>
                                        <table class="table table-hover dataTable table-striped w-full" id="personal_tasks_table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Subject</th>
                                                    <th>Due Date</th>
                                                    <th>Description</th>
                                                    <th>From/To Date</th>
                                                    <th>Priority</th>
                                                    <th>Status</th>
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
                <div class="modal fade" id="exampleFormModal" aria-labelledby="exampleFormModalLabel" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-simple">
                        <form class="modal-content" id="new_tasks_form" autocomplete="off">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="exampleFormModalLabel">New Tasks</h4>
                            </div>
                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <label class="form-control-label">Subject <span class="required" style="color:red;">*</span>
                                        </label>
                                        <input type="text" class="form-control" placeholder="Enter subject" id="subject" name="subject">
                                        <span class="subject-error error"></span>
                                    </div>
                                    <div class="col-xl-6 form-group">
                                        <label class="form-control-label">Due Date <span class="required" style="color:red;">*</span>
                                        </label>
                                        <input type="text" class="form-control" placeholder="enter a duedate" data-plugin="datepicker" id="due_date" data-date-format="yyyy-mm-dd" data-start-date="d0" name="due_date">
                                        <span class="due_date-error error"></span>
                                    </div>
                                    <div class="col-xl-12 form-group">
                                        <label class="form-control-label">Description <span class="required" style="color:red;">*</span>
                                        </label>
                                        <textarea class="form-control" rows="5" placeholder="enter description here" id="description" name="description"></textarea>
                                        <span class="description-error error"></span>
                                    </div>
                                    <div class="col-xl-6 form-group">
                                        <label class="form-control-label">Priority <span class="required" style="color:red;">*</span>
                                        </label>
                                        <input type="text" class="form-control" placeholder="enter priority" name="priority" id="priority">
                                        <span class="priority-error error" id="errmsg"></span>
                                    </div>
                                    <div class="col-xl-6 form-group">
                                        <label class="form-control-label">Status <span class="required" style="color:red;">*</span>
                                        </label>
                                        <select name="status" id="status" placeholder="please select a status" class="form-control">
                                            <option></option>
                                            <option>Open</option>
                                            <option>Closed</option>
                                        </select>
                                        <span class="status-error error"></span>
                                    </div>
                                    <input type="hidden" class="form-control" id="contact_id" name="contact_id">

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
    </div>
</div>
</div>
<!-- End Page -->
@stop
@section('page-scripts')
<script src=" {{ asset('js/task.js') }} "></script>
@endsection