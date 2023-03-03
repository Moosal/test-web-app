<?php $page="departments";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Department @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Department @endslot
@endcomponent 
@component('components.search-filder') 
@slot('title') Add Department @endslot
@endcomponent
@section('css')
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection 

                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px;">#</th>
                                            <th>Department Name</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Web Development</td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_department"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_department"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Application Development</td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_department"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_department"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>IT Management</td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_department"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_department"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Accounts Management</td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_department"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_department"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Support Management</td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_department"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_department"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Marketing</td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_department"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_department"><i class="far fa-trash-alt"></i></a>
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
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection                  

@endsection