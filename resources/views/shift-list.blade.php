<?php $page="shift-list";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Shift List @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Shift List @endslot
@endcomponent
@component('components.search-filder') 
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection                     
                    <!-- Content Starts -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Shift Name</th>
                                            <th>Min Start Time</th>
                                            <th>Start Time</th>
                                            <th>Max Start Time</th>
                                            <th>Min End Time</th>
                                            <th>End Time</th>
                                            <th>Max End Time</th>
                                            <th>Break Time</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-end no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10'o clock Shift</td>
                                            <td>09:00:00 am</td>
                                            <td>10:00:00 am</td>
                                            <td>10:30:00 am</td>
                                            <td>06:00:00 pm</td>
                                            <td>06:30:00 pm</td>
                                            <td>07:00:00 pm</td>
                                            <td>30 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>10:30 shift</td>
                                            <td>10:00:00 am</td>
                                            <td>10:30:00 am </td>
                                            <td>11:00:00 am</td>
                                            <td>06:30:00 pm</td>
                                            <td>07:00:00 pm</td>
                                            <td>07:30:00 pm </td>
                                            <td>45 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Daily Rout</td>
                                            <td>06:00:00 am</td>
                                            <td>06:30:00 am</td>
                                            <td>07:00:00 am</td>
                                            <td>03:00:00 pm</td>
                                            <td>03:30:00 pm</td>
                                            <td>04:00:00 pm</td>
                                            <td>60 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>New Shift</td>
                                            <td>06:11:00 am</td>
                                            <td>06:30:00 am</td>
                                            <td>08:12:00 am</td>
                                            <td>09:12:00 pm </td>
                                            <td>09:30:00 pm</td>
                                            <td>09:45:00 pm</td>
                                            <td>45 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Recurring Shift</td>
                                            <td>08:30:00 am</td>
                                            <td>09:00:00 am</td>
                                            <td>09:30:00 am</td>
                                            <td>05:30:00 pm</td>
                                            <td>06:00:00 pm</td>
                                            <td>06:30:00 pm</td>
                                            <td>60 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-one">
                                                        <i class="far fa-dot-circle"></i> Inactive
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Content End -->
                
 @component('components.model-popup') 
@endcomponent            
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection 
@endsection