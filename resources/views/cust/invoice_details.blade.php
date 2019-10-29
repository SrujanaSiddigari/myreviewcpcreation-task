@extends('layouts.master')
@section('content')
<!-- Page -->
<div class="page">
   <div class="page-header" style="padding-bottom:0px;">
      <h1 class="page-title">Invoices</h1>
   </div>
   <div class="page-content" style="margin-top:30px">
      <div class="row" data-plugin="masonry">
         <div class="col-lg-12 masonry-item">
            <div class="panel" style="border:1px solid #808080;">
               <div class="panel-body">
                  <!-- Example Tabs -->
                  <div class="example-wrap">
                     <div class="nav-tabs-horizontal" data-plugin="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                           <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab">Invoice Details</a></li>
                           <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab">Payment History</a></li>
                        </ul>
                        <div class="tab-content pt-20">
                           <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                              <div class="row" data-plugin="masonry">
                                 <div class="col-lg-4 masonry-item">
                                    <!-- Panel -->
                                    <div class="card">
                                       <div class="row no-space py-20 px-30 text-left">
                                          <div class="col-12">
                                             <p class="list-group-item-heading mt-0 mb-15">
                                                Invoice #:5612 {{ isset($invoice->invoice_id) ? $invoice->invoice_id : '' }}
                                             </p>
                                             <p class="list-group-item-heading mt-0 mb-15">
                                                Status: Low {{ isset($invoice->invoice_status) ? $invoice->invoice_status : '' }}
                                             </p>
                                             <p class="list-group-item-heading mt-0 mb-15">
                                                Service Provider: Herman Beck {{ isset($contact->first_name) ? $contact->first_name : '' }}
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- End Panel -->
                                 </div>
                                 <div class="col-lg-8 masonry-item">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="card card-block p-10" style="border:1px solid #808080;">
                                             <div class="counter counter-md vertical-align h-150">
                                                <div class="counter-number-group font-size-25 vertical-align-middle">
                                                   <span class="counter-number">Past Due</span>
                                                   <span class="counter-number-related">$33{{ isset($invoice->payment_amount) ? $invoice->payment_amount : '' }}</span>
                                                   <div class="font-size-20 mt-3"><button type="button" id="paynow" class="btn btn-danger" style="border:none;">
                                                      Pay Now</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="card card-block p-10" style="border:1px solid #808080;">
                                             <div class="counter counter-md vertical-align h-150">
                                                <div class="counter-number-group font-size-30 vertical-align-middle">
                                                   <span class="counter-number">Invoice Balance</span>
                                                   <span class="counter-number-related">$332 {{ isset($invoice->invoice_balance) ? $invoice->invoice_balance : '' }}</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Panel Message -->
                                 </div>
                              </div>
                              <div class="card bg-purple-600 p-30 clearfix">
                                 <h4 class="list-group-item-heading mt-0 mb-15 white">Invoice Details</h4>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <p class="mb-5 text-nowrap white">
                                          Total Amount:$999 {{ isset($invoice->invoice_payment_amount) ? $invoice->invoice_payment_amount : '' }}
                                       </p>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="mb-5 text-nowrap white">
                                          Next Payment:12/12/9999 {{ isset($invoice->start_date) ? $invoice->start_date : '' }}
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <p class="mb-5 text-nowrap white">
                                          Fee:45 {{ isset($invoice->invoice_payment_amount) ? $invoice->invoice_payment_amount : '' }}
                                       </p>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="mb-5 text-nowrap white">
                                          Payment $:55 {{ isset($invoice->payment_amount_per_cycle) ? $invoice->payment_amount_per_cycle : '' }}
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <p class="mb-5 text-nowrap white">
                                          Description:XYZ {{ isset($invoice->invoice_status) ? $invoice->invoice_status : '' }}
                                       </p>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="mb-5 text-nowrap white">
                                          Last Payment:12/12/9999 {{ isset($invoice->start_date) ? $invoice->start_date : '' }}
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <p class="mb-5 text-nowrap white">
                                          Term (Mo’s):44 {{ isset($invoice->payment_amount_per_cycle) ? $invoice->payment_amount_per_cycle : '' }}
                                       </p>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="mb-5 text-nowrap white">
                                          Payment $: 55 {{ isset($invoice->payment_amount_per_cycle) ? $invoice->payment_amount_per_cycle : '' }}
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <p class="mb-5 text-nowrap white">
                                          Start Date:12/12/9999 {{ isset($invoice->start_date) ? $invoice->start_date : '' }}
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 offset-md-3">
                                
                              </div>
                              <!-- End Panel Message -->
                           </div>
                           <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                              <table class="table table-hover dataTable table-striped w-full" id="payments-details">
                                 <thead>
                                    <tr>
                                       <th>id</th>
                                       <th>Invoice Date</th>
                                       <th>Type</th>
                                       <th>Invoice #</th>
                                       <th>Amount</th>
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
         </div>

      </div>
   </div>
</div>
<!-- End Page -->
@endsection
@section('page-scripts')
<script src=" {{ asset('js/invoice.js') }} "></script>
@endsection