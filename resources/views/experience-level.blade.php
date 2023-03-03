<?php $page="experience-level";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Experience Level @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Experience Level @endslot
@endcomponent 
@component('components.search-filder') 
    @slot('title') Add Experience Level @endslot
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Experiance</th>
                                            <th>Status</th>                                 
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>                                      
                                            <td>1 - 2</td>
                                            <td>
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="javascript:void(0);">
                                                    <i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                </div>  
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_job"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>                                      
                                            <td>1 - 3</td>
                                            <td>
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="javascript:void(0);">
                                                    <i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                </div>  
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_job"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>                                      
                                            <td>4 - 7</td>
                                            <td>
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="javascript:void(0);">
                                                    <i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                </div>  
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_job"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="far fa-trash-alt"></i></a>
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