<?php $page="assets1";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Assets @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Assets @endslot
@endcomponent 
@component('components.search-filder') 
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <!-- Datepicker CSS -->
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
                                            <th>Asset User</th>
                                            <th>Asset Name</th>
                                            <th>Asset Id</th>
                                            <th>Purchase Date</th>
                                            <th>Warrenty</th>
                                            <th>Warrenty End</th>
                                            <th>Amount</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-end"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Richard Miles</td>
                                            <td>
                                                <strong>Dell Laptop</strong>
                                            </td>
                                            <td>#AST-0001</td>
                                            <td>5 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>5 Jan 2019</td>
                                            <td>$1215</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Pending
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>
                                                <strong>Seagate Harddisk</strong>
                                            </td>
                                            <td>#AST-0002</td>
                                            <td>14 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>14 Jan 2019</td>
                                            <td>$300</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John Smith</td>
                                            <td>
                                                <strong>Canon Portable Printer</strong>
                                            </td>
                                            <td>#AST-0003</td>
                                            <td>14 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>14 Jan 2019</td>
                                            <td>$2500</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-info"></i> Returned
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mike Litorus</td>
                                            <td>
                                                <strong>Dell Laptop</strong>
                                            </td>
                                            <td>#AST-0004</td>
                                            <td>5 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>5 Jan 2019</td>
                                            <td>$1215</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Pending
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wilmer Deluna</td>
                                            <td>
                                                <strong>Seagate Harddisk</strong>
                                            </td>
                                            <td>#AST-0005</td>
                                            <td>14 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>14 Jan 2019</td>
                                            <td>$300</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jeffrey Warden</td>
                                            <td>
                                                <strong>Canon Portable Printer</strong>
                                            </td>
                                            <td>#AST-0006</td>
                                            <td>14 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>14 Jan 2019</td>
                                            <td>$2500</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-info"></i> Returned
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bernardo Galaviz</td>
                                            <td>
                                                <strong>Dell Laptop</strong>
                                            </td>
                                            <td>#AST-0007</td>
                                            <td>5 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>5 Jan 2019</td>
                                            <td>$1215</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Pending
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lesley Grauer</td>
                                            <td>
                                                <strong>Seagate Harddisk</strong>
                                            </td>
                                            <td>#AST-0008</td>
                                            <td>14 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>14 Jan 2019</td>
                                            <td>$300</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jeffery Lalor</td>
                                            <td>
                                                <strong>Canon Portable Printer</strong>
                                            </td>
                                            <td>#AST-0009</td>
                                            <td>14 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>14 Jan 2019</td>
                                            <td>$2500</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-info"></i> Returned
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Loren Gatlin</td>
                                            <td>
                                                <strong>Dell Laptop</strong>
                                            </td>
                                            <td>#AST-0010</td>
                                            <td>5 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>5 Jan 2019</td>
                                            <td>$1215</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Pending
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tarah Shropshire</td>
                                            <td>
                                                <strong>Seagate Harddisk</strong>
                                            </td>
                                            <td>#AST-0011</td>
                                            <td>14 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>14 Jan 2019</td>
                                            <td>$300</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Catherine Manseau</td>
                                            <td>
                                                <strong>Canon Portable Printer</strong>
                                            </td>
                                            <td>#AST-0012</td>
                                            <td>14 Jan 2019</td>
                                            <td>12 Months</td>
                                            <td>14 Jan 2019</td>
                                            <td>$2500</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-info"></i> Returned
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Returned</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_asset"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_asset"><i class="far fa-trash-alt"></i></a>
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