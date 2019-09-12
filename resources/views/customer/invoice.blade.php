@extends('layouts.master')

@section('content')
<div class="page">
<div class="page-header" style="padding-bottom:0px;">
    <h1 class="page-title">Invoices</h1>
    <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/">Home</a></li>
         <li class="breadcrumb-item"><a href="javascript:void(0)">Tools</a></li>
         <li class="breadcrumb-item active">Calendar</li>
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
                <!-- <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab">Open</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab">Closed</a></li>
                </ul> -->
                <div class="tab-content pt-20">
                  <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                    <!-- <div style="float:right">
                      <button class="btn btn-warning btn-xs" data-target="#exampleFormModal" data-toggle="modal"><i class="icon wb-plus" aria-hidden="true" style="font-weight:600; font-size:20px;"></i>
                      </button>
                    </div> -->
                    <table class="table table-hover dataTable w-full" id="ivoices_table">
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
    </div><!--End Page-Content-->
</div><!--End Page-->
@endsection

@section('page-scripts')
<script src="{{ asset('js/invoice.js') }}"></script>

@endsection