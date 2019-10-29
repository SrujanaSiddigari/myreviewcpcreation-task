@extends('layouts.master')
@section('content')
<!-- Page -->
<div class="page">
    <div class="page-header" style="padding-bottom:0px;">
        <h1 class="page-title">Documents</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dash">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Tools</a></li>
            <li class="breadcrumb-item active">Documents</li>
        </ol>
    </div>
    <div class="page-content" style="margin-top:30px">
        <div class="panel" style="border:1px solid #808080;">
            <div class="panel-body">
                <div class="row">
                    <!-- dropzone template -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-10 offset-sm-1">

                                <h4 class="page-heading">
                                    File Upload <span id="counter"></span>
                                    <i class="icon md-info" style="font-size:20px;padding-left:5px;background-color:#ffffff;color:#fea82a;" aria-hidden="true" id="i-helpicn" data-toggle="tooltip" data-placement="right" data-tooltip-content="#tooltip_content" data-html="true" title="<head><strong>ALLOWED FILE TYPES</strong></head>
                                    <ul>
                                    <li style='text-align:left;'>WORD(doc,docx)</li>
                                    <li style='text-align:left;'>Excel(xls,xlsx)</li>
                                    <li style='text-align:left;'> PP(PPT,PPTX)</li>
                                    <li style='text-align:left;'>Text (txt)</li>
                                    <li style='text-align:left;'>IMAGE(jpg,jpeg)</li>
                                    <li style='text-align:left;'>PDF(pdf)</li>
                                    </ul>"></i>
                                </h4>
                                <!-- <input type="file" id="inputUpload" name="files[]" multiple="" /> -->
                                <div class="uploader-inline">
                                    <p class="upload-instructions">Click Or Drop Files To Upload.</p>
                                </div>
                                <div class="file-wrap container-fluid">
                                    <div class="file-list row"></div>
                                </div>
                                </form>
                            </div>
                            {{--Dropzone Preview Template--}}
                            <div id="preview1" style="display: none;">
                                <div class="dz-preview dz-file-preview" style="padding-left:10px;">
                                    <div class="dz-image"><img data-dz-thumbnail style="height:85px;" /></div>
                                    <div class="dz-details">
                                        <div class="dz-size"><span data-dz-size></span></div>
                                        <div class="dz-filename"><span data-dz-name></span></div>
                                    </div>
                                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                                    <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                    <div class="dz-success-mark">

                                    </div>
                                    <div class="dz-error-mark">

                                    </div>
                                </div>
                            </div>
                            {{--End of Dropzone Preview Template--}}
                        </div>
                    </div>
                </div>
                <!-- <div class="example-wrap">
                <h4 class="example-title">Your so fresh input file — Default version</h4>
                <div class="example">
                    <input type="file" id="input-file-now" data-plugin="dropify" data-default-file="" />
                </div>
            </div> -->
                <div class="panel">
                    <div class="panel-body">
                        <h4 class="example-title">My Documents</h4>
                        <table class="table table-hover dataTable table-striped w-full" id="documents_table">
                            <thead>
                                <tr>
                                    <!-- <th>Id</th> -->
                                    <th>FileName</th>
                                    <th>FileType</th>
                                    <th>DownloadLink</th>
                                    <th>DeleteLink</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                        <!-- Modal -->
                        <div class="modal fade" id="doc-confirm" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this record?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger" style="background-color:red!important;" id="doc-delete-btn">Delete</button>
                                    </div>
                                </div>
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

@section('styles')
<!-- <link rel="stylesheet" href="{{ url('/css/custom.css') }}"> -->
@endsection
@section('page-scripts')
<script src="{{ asset('js/document.js') }}"></script>
@endsection