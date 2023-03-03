<?php $page="invoices";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Invoices @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Invoices @endslot
@endcomponent 
@component('components.search-filder') 
@slot('li_1') Add Invoice @endslot
@endcomponent  
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Invoice Number</th>
                                            <th>Client</th>
                                            <th>Created Date</th>
                                            <th>Due Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="{{url('invoice-view')}}">#INV-0001</a></td>
                                            <td>Global Technologies</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-one">Paid</span></td>
                                            <td class="text-end ico-sec">
                                                <a href="{{url('edit-invoice')}}"><i class="fas fa-pen"></i></a>
                                                <a href="{{url('edit-invoice')}}"><i class="fas fa-eye"></i></a>
                                                <a href="#"><i class="fas fa-download"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="{{url('invoice-view')}}">#INV-0002</a></td>
                                            <td>Delta Infotech</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-two">Sent</span></td>
                                            <td class="text-end ico-sec">
                                                <a href="{{url('edit-invoice')}}"><i class="fas fa-pen"></i></a>
                                                <a href="{{url('edit-invoice')}}"><i class="fas fa-eye"></i></a>
                                                <a href="#"><i class="fas fa-download"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="{{url('invoice-view')}}">#INV-0003</a></td>
                                            <td>Cream Inc</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-three">Partially Paid</span></td>
                                            <td class="text-end ico-sec">
                                                <a href="{{url('edit-invoice')}}"><i class="fas fa-pen"></i></a>
                                                <a href="{{url('edit-invoice')}}"><i class="fas fa-eye"></i></a>
                                                <a href="#"><i class="fas fa-download"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
@endsection                  
@endsection