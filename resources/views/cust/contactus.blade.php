@extends('layouts.master')
@section('content')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Contact Us</h1>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/dash">Home</a></li>
         <li class="breadcrumb-item"><a href="javascript:void(0)">Support</a></li>
         <li class="breadcrumb-item active">Contact Us</li>
      </ol>
   </div>
   <div class="page-content">
      <div class="panel" style="border:1px solid #808080;">
         <div class="panel-body">
            <div class="row">
               <div class="col-md-3 col-sm-6" style="">
               <!-- <div class="cardnew border"> -->
                            <div class="card card-block card-inverse bg-primary text-center cardheight">
                                <!-- <blockquote class="blockquote cover-quote card-blockquote"> -->
                                    <p style="font-weight: 700">Call</p>
                                    <footer>
                                        <small>
                                          8888-888-888
                                        </small>
                                    </footer>
                                <!-- </blockquote> -->
                            </div>
                        <!-- </div> -->
               </div>
               <div class="col-md-3 col-sm-6" style="">
               <!-- <div class="cardnew border"> -->
                            <div class="card card-block card-inverse bg-primary text-center cardheight">
                                <!-- <blockquote class="blockquote cover-quote card-blockquote"> -->
                                    <p style="font-weight: 700">Email</p>
                                    <footer>
                                        <small>
                                          email@us.com
                                        </small>
                                    </footer>
                                <!-- </blockquote> -->
                            </div>
                        <!-- </div> -->
               </div>
               <div class="col-md-3 col-sm-6" style="">
               <!-- <div class="cardnew border"> -->
                            <div class="card card-block card-inverse bg-primary text-center cardheight">
                                <!-- <blockquote class="blockquote cover-quote card-blockquote"> -->
                                    <p style="font-weight: 700">Support</p>
                                    <footer>
                                        <small>
                                          support@online.com
                                        </small>
                                    </footer>
                                <!-- </blockquote> -->
                            </div>
                        <!-- </div> -->
               </div>
               <div class="col-md-3 col-sm-6" style="">
               <!-- <div class="cardnew border"> -->
                            <div class="card card-block card-inverse bg-primary text-center cardheight">
                                <!-- <blockquote class="blockquote cover-quote card-blockquote"> -->
                                    <p style="font-weight: 700">Chat Online</p>
                                    <footer>
                                        <small>
                                         chat@online.com
                                        </small>
                                    </footer>
                                <!-- </blockquote> -->
                            </div>
                        <!-- </div> -->
               </div>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top:100px;">
               <!-- Example Basic Form Without Label -->
               <div class="example-wrap">
                  <h4 class="title" style="text-align:center;">Suggestions</h4>
                  <form id="contactus_form">
                  <div class="form-group">
                     <label class="form-control-label" for="inputBasicEmail"><span style="color:red">*</span>Subject</label>
                     <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Here..." autocomplete="off">
                     <span class="subject-error error"></span>
                  </div>
                  <div class="form-group">
                     <label class="form-control-label" for="inputBasicEmail"><span style="color:red">*</span>Email Address</label>
                     <input type="email" class="form-control" id="Email" name="email" placeholder="Enter Here..." autocomplete="off">
                     <span class="email-error error"></span>
                  </div>
                  <div class="form-group">
                     <label class="form-control-label" for="inputBasicEmail"><span style="color:red">*</span>Phone Number</label>
                     <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Here..." autocomplete="off">
                     <span class="phone-error error"></span>
                  </div>
                  <div class="form-group">
                     <label class="form-control-label" for="inputBasicEmail"><span style="color:red">*</span>Message
                     </label>
                     <textarea class="form-control" name="content" placeholder="Briefly Describe Yourself"></textarea>
                     <span class="content-error error"></span>
                  </div>
                  <div class="col-md-2 offset-md-5"><button class="btn btn-info waves-effect waves-classic" id="submitsuggestions">Submit</button></div>
           </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page -->
@endsection

