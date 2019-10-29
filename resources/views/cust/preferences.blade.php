@extends('layouts.master')
@section('content')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Preference</h1>
   </div>
   <div class="page-content">
      <div class="panel" style="border:1px solid #808080;">
         <div class="panel-body">
            <div class="card" style="margin-bottom:0px;">
               <div class="card-header" style="background-color:#bdc4c7 !important;padding-bottom:1px">
                  <div class="page-title" style="color:white;text-align:center">Contact Information</div>
               </div>
               <div class="card-body">
                  <div class="row" style="margin-bottom:15px;">
                     <div class="col-md-4 offset-md-2">
                        <address>
                           <div class="textinvoice"><span style="color:#424242;"><span>Name: John Doe</span>&nbsp;<span id="contact-unit-display"></span></span></div>
                           <div class="textinvoice"><span style="color:#424242;"><span>Address: 222 XYZ</span>&nbsp;<span id="contact-unit-display"></span></span></div>
                           <div class="textinvoice"><span style="color:#424242;"><span>City: Boston</span>&nbsp;<span id="contact-unit-display"></span></span></div>
                           <div class="textinvoice"><span style="color:#424242;"><span>State: MA</span>&nbsp;<span id="contact-unit-display"></span></span></div>
                        </address>
                     </div>
                     <div class="col-md-1"></div>
                     <div class="col-md-4">
                        <address>
                           <div class="textinvoice"><span style="color:#424242;"><span>Phone:111-111-1111 </span>&nbsp;<span id="contact-unit-display"></span></span></div>
                           <div class="textinvoice"><span style="color:#424242;"><span>Email:abc@xyz.com</span>&nbsp;<span id="contact-unit-display"></span></span></div>
                           <div class="textinvoice"><span style="color:#424242;"><span>Country: USA</span>&nbsp;<span id="contact-unit-display"></span></span></div>
                        </address>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card" style="margin-bottom:0px;">
               <div class="card-header" style="background-color:#bdc4c7 !important;padding-bottom:1px">
                  <div class="page-title" style="color:white;text-align:center">Payment Methods</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-6">
                     <table class="table table-striped" style='border:1px solid #d5cbcb'>
                           <thead>
                              <tr>
                                 <th data-field="id" data-sortable="true">Card Last 4</th>
                                 <th data-field="name" data-sortable="true">Expiration</th>
                                 <th data-field="price" data-sortable="true">Default</th>
                              </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>8976</td>
                                   <td>2022</td>
                                   <td><input type='checkbox'></td>
                            </tr>
                            <tr>
                                   <td>2276</td>
                                   <td>2023</td>
                                   <td><input type='checkbox'></td>
                            </tr>
                           </tbody>
                        </table>


                     </div>
                     <div class="col-md-6">
                     </div>
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
<script src=" {{ asset('js/preference.js') }} "></script>
 @endsection