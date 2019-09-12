@extends('layouts.master')

@section('content')
<div class="page">
<div class="page-header" style="padding-bottom:0px;">
    <h1 class="page-title">Calendar</h1>
    <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/">Home</a></li>
         <li class="breadcrumb-item"><a href="javascript:void(0)">Tools</a></li>
      </ol>
  </div>
  <div class="page-content" style="margin-top:30px">
    <div class="row" data-plugin="masonry">
      <div class="col-md-12 masonry-item">
        <div class="panel" style="border:1px solid #808080;">
          <div class="panel-body">
            <!--Calendar-->
            <div class="calender"></div>
           <!--Calendar-->
          </div>
        </div>
      </div>  
    </div>
  </div>
</div><!--End Page-->
@endsection
@section('page-scripts')
 <script src=" {{ asset('js/calendar.js') }} "></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>  -->
<!-- <script src="/path/to/jquery.min.js"></script>
<script src="/path/to/moment.min.js"></script> -->
@endsection
