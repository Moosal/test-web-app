<?php $page="policies";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Policies @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Policies @endslot
@endcomponent 
@component('components.search-filder') 
    @slot('title') Add Policy @endslot
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection 
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px;">#</th>
                                            <th>Policy Name </th>
                                            <th>Department </th>
                                            <th>Description </th>
                                            <th>Created </th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Leave Policy</td>
                                            <td>All Departments</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>19 Feb 2019</td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#"><i class="fas fa-download"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_policy"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_policy"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Permission Policy</td>
                                            <td>Marketing</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>20 Feb 2019</td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#"><i class="fas fa-download"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_policy"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_policy"><i class="far fa-trash-alt"></i></a>
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
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection 
@endsection