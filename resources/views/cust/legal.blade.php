@extends('layouts.master')
@section('title', 'Invoygo::CreateInvoice')
@section('content')
<!-- Page -->
<div class="page">
<!-- Pop Large Content -->
<div id="examplePopoverLargeContent" hidden>
   <p>{{ isset($helpContent->content) ?  $helpContent->content : "Help content will be provided soon " }}
   </p>
</div>
<!-- End Pop Large Content -->
<div class="page-header">
   <h1 class="page-title">Legal</h1>
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Account</a></li>
      <li class="breadcrumb-item active">Legal</li>
   </ol>
</div>
<!-- Top box Alerts -->
<div class="page-content">
   <div class="panel" style="border:1px solid #808080;">
      <div class="panel-body">
         <div class="row row-lg">
            <div class="col-md-12">
               <!-- Example Tabs Solid -->
               <div class="page-content contact-page-content container-fluid">
                   <!--start of first row-->
                  <div class="row invoice1_dt">
                     <div class="col-md-12">
                        <div class="card" style="margin-bottom:0px;">
                         <p style="color: #3e8ef7;font-weight:bold">Terms Of Use</p>
                          Amice cum distinguantur, pronuntiaret omnesque. Sensum opes bonorum rationis propemodum viros elegantis perpetua impetu,
                           sentiunt probo insidiarum telos eruditus, inanium, inprobitatem sero medium necessitatibus, reperiuntur tolerabiles arbitrarer maxime equidem iniucundus ecce sine possunt, 
                           primo expedire sumitur infinitio dicturum statuam adhibuit, assumenda.   
                           </div>
                           <div class="card" style="margin-bottom:0px;">
                            Sensum opes bonorum rationis propemodum viros elegantis perpetua impetu,
                           sentiunt probo insidiarum telos eruditus, inanium, inprobitatem sero medium necessitatibus, reperiuntur tolerabiles arbitrarer maxime equidem iniucundus ecce sine possunt, 
                           primo expedire sumitur infinitio dicturum statuam adhibuit, assumenda.   
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end of first row-->
              

               </div>
            </div>
         </div>
      </div>
      <!-- <div class="invoicefooter">
         <div class="row">
            <div class="col-md-4 offset-md-8" style="padding:10px 10px;">
               <button type="button" class="btn btn-info" id="pay_now" href="#pay_now1" style="background-color: #fb8c00;border-color: #fb8c00; margin-right:10px;">Pay Now</button>
               <button type="button" class="btn btn-success" id="saveInvoice" style="background-color:green !important; margin-right:10px !important;">Subscribe</button>
               <button type="button" class="btn btn-info" id="inv_save_draft" style="margin-right:10px;">Save invoice</button>
               <a href="/contacts"><button type="button" class="btn btn-info" style="background-color:red;">Cancel</button></a>
            </div>
         </div>
         </div> -->
   </div>
</div>
<!-- End example Floating Labels -->
<!-- End Panel Basic -->
</div>
@endsection
@section('page-scripts')
@endsection
