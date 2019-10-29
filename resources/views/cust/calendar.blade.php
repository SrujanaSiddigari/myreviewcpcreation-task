@extends('layouts.master')
@section('page-scripts')
<script src=" {{ asset('js/calendar.js') }} "></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
<script></script>
@endsection
@section('content')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Calendar</h1>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/dash">Home</a></li>
         <li class="breadcrumb-item"><a href="javascript:void(0)">Tools</a></li>
         <li class="breadcrumb-item active">Calendar</li>
      </ol>
   </div>
   <div class="page-content">
      <div class="panel" style="border:1px solid #808080;">
         <div class="panel-body">
            <div id="calendar"></div>
            <div class="modal" id="modalEv4ent">
               <div class="modal-dialog">
                  <div class="modal-content">

                     <!-- Modal Header -->
                     <div class="modal-header">
                        <h4 class="modal-title">Calendar Event</h4>

                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color:#000;">×</span>&times;</button>
                     </div>
                     <!-- Modal body -->
                     <div class="modal-body">

                        <div class="row">
                           <div class="col-xl-12 form-group">
                              <label class="form-control-label">Subject<span class="required" style="color:red;">*</span>
                              </label>
                              <input type="text" class="form-control" name="subject">
                           </div>
                           <div class="col-xl-12 form-group">
                              <label class="form-control-label">Description <span class="required" style="color:red;">*</span>
                              </label>
                              <textarea class="form-control" rows="5"></textarea>
                           </div>

                           <div class="col-xl-6 form-group">
                              <label class="form-control-label">Start Date<span class="required" style="color:red;">*</span>
                              </label>
                              <input type="text" class="form-control" id="basicDate" name="startdate" data-input>
                           </div>

                           <div class="col-xl-6 form-group">
                              <label class="form-control-label">End Date<span class="required" style="color:red;">*</span>
                              </label>
                              <input type="text" class="form-control" name="enddate">
                           </div>
                           <div class="col-md-12 float-right">
                              <button class="btn btn-primary" data-dismiss="modal" type="button">Submit</button>
                           </div>
                        </div>

                     </div>
                     <!-- Modal footer -->
                     <div class="modal-footer">
                     </div>

                  </div>
                  <!-- <div class="site-action" data-plugin="actionBtn">
               <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating" data-target="#EventFormModal" data-toggle="modal">
                  <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
                  <i class="back-icon wb-trash animation-scale-up" aria-hidden="true"></i>
               </button>
            </div> -->
                  <div class="modal fade" id="modalEvent" aria-labelledby="exampleFormModalLabel" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
                     <div class="modal-dialog modal-simple">
                        <form class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="exampleFormModalLabel">New Event</h4>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <div class="col-xl-12 form-group">
                                    <label class="form-control-label">Subject<span class="required" style="color:red;">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="subject">
                                 </div>
                                 <div class="col-xl-12 form-group">
                                    <label class="form-control-label">Description <span class="required" style="color:red;">*</span>
                                    </label>
                                    <textarea class="form-control" rows="5"></textarea>
                                 </div>

                                 <div class="col-xl-6 form-group">
                                    <label class="form-control-label">Start Date<span class="required" style="color:red;">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="basicDate" name="startdate" data-input>
                                 </div>

                                 <div class="col-xl-6 form-group">
                                    <label class="form-control-label">End Date<span class="required" style="color:red;">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="enddate">
                                 </div>
                                 <div class="col-md-12 float-right">
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">Submit</button>
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
      <!-- End Page -->
      @endsection