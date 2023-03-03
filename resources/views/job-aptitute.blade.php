<?php $page="job-aptitute";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Aptitude @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Jobs @endslot
    @slot('li_4') Interviewing @endslot
    @slot('li_2') Aptitude @endslot
@endcomponent 
@component('components.nav-content') 
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection
                    
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Name : <b>John Richerd</b></p>
                                        <p>Code : <b>#1245</b></p>
                                        <p class="mb-0">Job Type : <b>UI Development</b></p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <p class="m-b-30">Click button to answer your question.</p>
                                        <div class="row">
                                            <div class="col-md-6 text-center m-b-30">
                                                <a href="{{url('questions')}}" class="btn btn-primary w-100 submit-btn">Html</a>
                                            </div>
                                            <div class="col-md-6 text-center m-b-30">
                                                <a href="{{url('questions')}}" class="btn btn-primary w-100 submit-btn">Css</a>
                                            </div>
                                            <div class="col-md-6 text-center m-b-30">
                                                <a href="{{url('questions')}}" class="btn btn-primary w-100 submit-btn">Design</a>
                                            </div>
                                            <div class="col-md-6 text-center m-b-30">
                                                <a href="{{url('questions')}}" class="btn btn-primary w-100 submit-btn">Javascript</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection 
@endsection