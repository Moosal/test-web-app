<?php $page="payments-reports";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Payments Report @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Payments Report @endslot
@endcomponent 
@component('components.search-filder') 
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
                                            <th>Transaction ID</th>
                                            <th>Date</th>
                                            <th>Client Name</th>
                                            <th>Payment Method</th>
                                            <th>Invoice</th>
                                            <th class="text-center">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#">834521</a></td>
                                            <td>2nd Dec 2020</td>
                                            <td>Dreams</td>
                                            <td>Online</td>
                                            <td><a href="#">INV0001</a></td>
                                            <td class="text-center">$4,329,970.7</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="#">834521</a></td>
                                            <td>2nd Dec 2020</td>
                                            <td>Dreams</td>
                                            <td>Online</td>
                                            <td><a href="#">INV0001</a></td>
                                            <td class="text-center">$4,329,970.7</td>
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
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection             
@endsection