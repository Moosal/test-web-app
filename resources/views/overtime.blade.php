<?php $page="overtime";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Overtime @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Overtime @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection
                    
                    <!-- Overtime Statistics -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 d-flex">
                            <div class="stats-info ot-div flex-fill">
                                <h4>12</h4>
                                <h6>Overtime Employee</h6>
                                <span>this month</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 d-flex">
                            <div class="stats-info ot-div flex-fill">
                                <h4>118</h4>
                                <h6>Overtime Hours</h6>
                                <span>this month</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 d-flex">
                            <div class="stats-info ot-div flex-fill">
                                <h4>23</h4>
                                <h6>Pending Request</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 d-flex">
                            <div class="stats-info ot-div flex-fill">
                                <h4>5</h4>
                                <h6>Rejected</h6>
                            </div>
                        </div>
                    </div>
                    <!-- /Overtime Statistics -->

                    <!-- Search Filter -->
                    <div class="row filter-row mt-4">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_overtime" style="width: auto;"><i class="fas fa-plus"></i> Add Overtime</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>OT Date</th>
                                            <th class="text-center">OT Hours</th>
                                            <th>OT Type</th>
                                            <th>Description</th>
                                            <th class="text-center">Status</th>
                                            <th>Approved by</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar blue-link">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe</a>
                                                </h2>
                                            </td>
                                            <td>8 Mar 2019</td>
                                            <td class="text-center">2</td>
                                            <td>Normal day OT 1.5x</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-one">
                                                        <i class="far fa-dot-circle"></i> New
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar avatar-xs"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt=""></a>
                                                    <a href="#">Richard Miles</a>
                                                </h2>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_overtime"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_overtime"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection                     
   
@endsection