<?php $page="expenses";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Expenses @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Expenses @endslot
@endcomponent 
@component('components.search-filder') 
    @slot('li_1') Item Name @endslot
    @slot('li_2') Loren Gatlin @endslot
    @slot('li_3') Tarah Shropshire @endslot
    @slot('li_4') Purchased By @endslot
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
                                            <th>Item</th>
                                            <th>Purchase From</th>
                                            <th>Purchase Date</th>
                                            <th>Purchased By</th>
                                            <th>Amount</th>
                                            <th>Paid By</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Dell Laptop</strong>
                                            </td>
                                            <td>Amazon</td>
                                            <td>5 Jan 2019</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-04.jpg" alt=""></a>
                                                    <a href="profile">Loren Gatlin</a>
                                                </h2>
                                            </td>
                                            <td>$1215</td>
                                            <td>Cash</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Pending
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_expense"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_expense"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Mac System</strong>
                                            </td>
                                            <td>Amazon</td>
                                            <td>5 Jan 2019</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-03.jpg" alt=""></a>
                                                    <a href="profile">Tarah Shropshire</a>
                                                </h2>
                                            </td>
                                            <td>$1215</td>
                                            <td>Cheque</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_expense"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_expense"><i class="far fa-trash-alt"></i></a>
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