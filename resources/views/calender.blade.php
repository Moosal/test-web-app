<?php $page="calender";?>
@extends('layout.mainlayout')
@section('content')

@component('components.breadcrumb')                
    @slot('title') Events @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Events @endslot
@endcomponent 
@component('components.search-filder')                
    @slot('title') Add Event @endslot
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!--  Full Calendar JS -->
    <link rel="stylesheet" href="{{url('assets/libs/fullcalendar/fullcalendar.min.css')}}">
@endsection
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                        
                                            <!-- Calendar -->
                                            <div id="calendar"></div>
                                            <!-- /Calendar -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@component('components.model-popup') 
@endcomponent 
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script> 
    <!--  Full Calendar JS -->
    <script src="{{ URL::asset('/assets/libs/fullcalendar/fullcalendar.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/fullcalendar.init.js')}}"></script>
 @endsection 
@endsection