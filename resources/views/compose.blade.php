<?php $page="compose";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Compose @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Compose @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/summernote/dist/summernote-bs4.css')}}">
@endsection

                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="card settings-menu">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li> 
                                            <a href="{{url('inbox')}}"><i class="la la-home"></i> <span>Back to Inbox</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('inbox')}}">Inbox <span class="mail-count">(21)</span></a>
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
                                    <form>
                                        <div class="form-group">
                                            <input type="email" placeholder="To" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Cc" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Bcc" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Subject" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="text-center">
                                                <button class="btn btn-primary"><span>Send</span> <i class="fas fa-paper-plane m-l-5"></i></button>
                                                <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i class="far fa-save m-l-5"></i></button>
                                                <button class="btn btn-success m-l-5" type="button"><span>Delete</span> <i class="far fa-trash-alt m-l-5"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Summernote Core JS -->
    <script src="{{ URL::asset('/assets/libs/summernote/dist/summernote-bs4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/summernote.init.js')}}"></script>
  
@endsection            

@endsection