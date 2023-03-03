<?php $page="budgets";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Budgets @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Budgets @endslot
@endcomponent 
@component('components.search-filder')                
    @slot('title') Add Budgets @endslot
@endcomponent
@section('css')
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Budget No</th>
                                            <th>Budget Title</th>
                                            <th>Budget Type</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Total Revenue</th>
                                            <th>Total Expenses</th>
                                            <th>Tax Amount</th>
                                            <th>Budget Amount</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tender</td>
                                            <td>Project</td>
                                            <td>01 Jan 2021</td>
                                            <td>31 Dec 2021</td>
                                            <td>2500000</td>
                                            <td>1500000</td>
                                            <td>10</td>
                                            <td>999990</td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Project</td>
                                            <td>Project</td>
                                            <td>01 Feb 2021</td>
                                            <td>30 Apr 2021</td>
                                            <td>100000</td>
                                            <td>50000</td>
                                            <td>1000</td>
                                            <td>49000</td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete"><i class="far fa-trash-alt"></i></a>
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
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script> 
  
@endsection

@endsection