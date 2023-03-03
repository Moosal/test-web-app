<?php $page="sub-category";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Sub Categories @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Sub Categories @endslot
@endcomponent 
@component('components.search-filder') 
    @slot('title') Add Sub Categories @endslot
@endcomponent
@section('css')
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection                         
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name </th>
                                            <th>Sub-Category Name</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Hardware</td>
                                            <td>Hardware Expenses</td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Material</td>
                                            <td>Material Expenses</td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Vehicle</td>
                                            <td>Company Vehicle Information</td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete"><i class="far fa-trash-alt"></i></a>
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