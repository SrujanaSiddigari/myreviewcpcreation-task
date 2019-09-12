@extends('layouts.master')
@section('content')
<!-- Page -->
<div class="page">
   <div class="page-header" style="padding-bottom:0px;">
      <h1 class="page-title">Payments</h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)"></a>Payments</li>
   </ol>
   </div>
   <div class="page-content" style="margin-top:30px">
   <div class="panel" style="border:1px solid #808080;">
        <div class="panel-body">
         <table class="table table-hover dataTable w-full" id="payments_table"> 
                <thead>
                    <tr>
                    <th>Id</th>                
                    <th>Payment Date</th>                 
                    <th>Invoice #</th>  
                    <th>TransactionID</th>
                    <th>Status</th> 
                    <th>Name</th>                 
                    <th>Company</th>
                    <th>Due Date</th>
                    <th>Payment Amount</th>         
                    <th>$ Past Due</th> 
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<!-- End Page -->
@endsection
@section('page-scripts')
<script src=" {{ asset('js/payment.js') }} "> <script>
@endsection

