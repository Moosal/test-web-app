<?php $page="payroll-items";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Payroll Items @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Payroll Items @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection     
                    <!-- Page Tab -->
                    <div class="page-menu">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs nav-tabs-bottom">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="{{url('#tab_additions')}}">Additions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="{{url('#tab_overtime')}}">Overtime</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="{{url('#tab_deductions')}}">Deductions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Tab -->
                    
                    <!-- Tab Content -->
                    <div class="tab-content">
                    
                        <!-- Additions Tab -->
                        <div class="tab-pane show active" id="tab_additions">

                            <!-- Add Addition Button -->
                            <div class="row filter-row mt-4">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">
                                    <div class="add-emp-section">
                                        <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_addition"><i class="fas fa-plus"></i> Add Addition</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Add Addition Button -->
                        
                            <!-- Payroll Additions Table -->
                            <div class="payroll-table card">
                                <div class="table-responsive">
                                    <table class="table table-hover table-radius">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Default/Unit Amount</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Leave balance amount</th>
                                                <td>Monthly remuneration</td>
                                                <td>$5</td>
                                                <td class="text-end ico-sec">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_addition"><i class="fas fa-pen"></i></a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_addition"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Arrears of salary</th>
                                                <td>Additional remuneration</td>
                                                <td>$8</td>
                                                <td class="text-end ico-sec">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_addition"><i class="fas fa-pen"></i></a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_addition"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Gratuity</th>
                                                <td>Monthly remuneration</td>
                                                <td>$20</td>
                                                <td class="text-end ico-sec">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_addition"><i class="fas fa-pen"></i></a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_addition"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /Payroll Additions Table -->
                            
                        </div>
                        <!-- Additions Tab -->
                        
                        <!-- Overtime Tab -->
                        <div class="tab-pane" id="tab_overtime">

                            <!-- Add Overtime Button -->
                            <div class="row filter-row mt-4">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">
                                    <div class="add-emp-section">
                                        <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_overtime"><i class="fas fa-plus"></i> Add Overtime</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Add Overtime Button -->

                            <!-- Payroll Overtime Table -->
                            <div class="payroll-table card">
                                <div class="table-responsive">
                                    <table class="table table-hover table-radius">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Rate</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Normal day OT 1.5x</th>
                                                <td>Hourly 1.5</td>
                                                <td class="text-end ico-sec">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_overtime"><i class="fas fa-pen"></i></a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_overtime"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Public holiday OT 3.0x</th>
                                                <td>Hourly 3</td>
                                                <td class="text-end ico-sec">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_overtime"><i class="fas fa-pen"></i></a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_overtime"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Rest day OT 2.0x</th>
                                                <td>Hourly 2</td>
                                                <td class="text-end ico-sec">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_overtime"><i class="fas fa-pen"></i></a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_overtime"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /Payroll Overtime Table -->
                            
                        </div>
                        <!-- /Overtime Tab -->
                        
                        <!-- Deductions Tab -->
                        <div class="tab-pane" id="tab_deductions">

                            <!-- Add Deductions Button -->
                            <div class="row filter-row mt-4">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">
                                    <div class="add-emp-section">
                                        <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_deduction"><i class="fas fa-plus"></i> Add Deduction</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Add Deductions Button -->

                            <!-- Payroll Deduction Table -->
                            <div class="payroll-table card">
                                <div class="table-responsive">
                                    <table class="table table-hover table-radius">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Default/Unit Amount</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Absent amount</th>
                                                <td>$12</td>
                                                <td class="text-end ico-sec">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deduction"><i class="fas fa-pen"></i></a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deduction"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Advance</th>
                                                <td>$7</td>
                                                <td class="text-end ico-sec">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deduction"><i class="fas fa-pen"></i></a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deduction"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Unpaid leave</th>
                                                <td>$3</td>
                                                <td class="text-end ico-sec">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deduction"><i class="fas fa-pen"></i></a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deduction"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /Payroll Deduction Table -->
                            
                        </div>
                        <!-- /Deductions Tab -->
                        
                    </div>
                    <!-- Tab Content -->
 @component('components.model-popup') 
@endcomponent 
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
@endsection                
     
@endsection