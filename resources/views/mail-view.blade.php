<?php $page="mail-view";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') View Message @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') View Message @endslot
@endcomponent 

                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <div class="card settings-menu">
                                        <div class="sidebar-menu">
                                            <ul>
                                                <li>
                                                    <div class="add-emp-section">
                                                        <a href="{{url('compose')}}" class="btn btn-success btn-add-emp"><i class="fas fa-plus"></i> Compose</a>
                                                    </div>
                                                </li>
                                                <li class="mt-4"> 
                                                    <a href="{{url('inbox')}}" class="active">Inbox <span class="mail-count">(21)</span></a>
                                                </li>
                                                <li> 
                                                    <a href="#">Starred</a>
                                                </li>
                                                <li> 
                                                    <a href="#">Sent Mail</a>
                                                </li>
                                                <li> 
                                                    <a href="#">Draft <span class="mail-count">(8)</span></a>
                                                </li>
                                                <li> 
                                                    <a href="#">Trash</a>
                                                </li>
                                                <li class="menu-title">Label <a href="#"><i class="fa fa-plus"></i></a></li>
                                                <li> 
                                                    <a href="#"><i class="fa fa-circle text-success mail-label w-auto"></i> Work</a>
                                                </li>
                                                <li> 
                                                    <a href="#"><i class="fa fa-circle text-danger mail-label w-auto"></i> Office</a>
                                                </li>
                                                <li> 
                                                    <a href="#"><i class="fa fa-circle text-warning mail-label w-auto"></i> Personal</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-md-8 col-lg-9 settings-cont">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mailview-content">
                                                <div class="mailview-header">
                                                    <div class="row">
                                                        <div class="col-sm-9">
                                                            <div class="text-ellipsis m-b-10">
                                                                <span class="mail-view-title">HRMS Bootstrap Admin Template</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="mail-view-action">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="Delete"> <i class="far fa-trash-alt"></i></button>
                                                                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="Reply"> <i class="fa fa-reply"></i></button>
                                                                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="Forward"> <i class="fa fa-share"></i></button>
                                                                </div>
                                                                <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="Print"> <i class="fa fa-print"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sender-info">
                                                        <div class="sender-img">
                                                            <img width="40" alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" class="rounded-circle">
                                                        </div>
                                                        <div class="receiver-details float-start">
                                                            <span class="sender-name">John Doe (johnjoe@example.com)</span>
                                                            <span class="receiver-name">
                                                                to
                                                                <span>me</span>, <span>Richard</span>, <span>Paul</span>
                                                            </span> 
                                                        </div>  
                                                        <div class="mail-sent-time">
                                                            <span class="mail-time">18 Feb 2019 9:42 AM</span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="mailview-inner">
                                                    <p>Hello Richard,</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Thanks,<br>
                                                    John Doe</p>
                                                </div>
                                            </div>
                                            <div class="mail-attachments">
                                                <p><i class="fa fa-paperclip"></i> 2 Attachments - <a href="#">View all</a> | <a href="#">Download all</a></p>
                                                <ul class="attachments clearfix">
                                                    <li>
                                                        <div class="attach-file"><i class="far fa-file-pdf"></i></div>
                                                        <div class="attach-info"> <a href="#" class="attach-filename">daily_meeting.pdf</a> <div class="attach-fileize"> 842 KB</div></div>
                                                    </li>
                                                    <li>
                                                        <div class="attach-file"><i class="far fa-file-word"></i></div>
                                                        <div class="attach-info"> <a href="#" class="attach-filename">documentation.docx</a> <div class="attach-fileize"> 2,305 KB</div></div>
                                                    </li>
                                                    <li>
                                                        <div class="attach-file"><img src="{{ URL::asset('/assets/img/placeholder.jpg')}}" alt="Attachment"></div>
                                                        <div class="attach-info"> <a href="#" class="attach-filename">webdesign.png</a> <div class="attach-fileize"> 1.42 MB</div></div>
                                                    </li>
                                                    <li>
                                                        <div class="attach-file"><img src="{{ URL::asset('/assets/img/placeholder.jpg')}}" alt="Attachment"></div>
                                                        <div class="attach-info"> <a href="#" class="attach-filename">webdevelopment.png</a> <div class="attach-fileize"> 1.1 MB</div></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mailview-footer">
                                                <div class="row">
                                                    <div class="col-sm-6 left-action">
                                                        <button type="button" class="btn btn-white"><i class="fa fa-reply"></i> Reply</button>
                                                        <button type="button" class="btn btn-white"><i class="fa fa-share"></i> Forward</button>
                                                    </div>
                                                    <div class="col-sm-6 right-action">
                                                        <button type="button" class="btn btn-white"><i class="fa fa-print"></i> Print</button>
                                                        <button type="button" class="btn btn-white"><i class="far fa-trash-alt"></i> Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
@endsection