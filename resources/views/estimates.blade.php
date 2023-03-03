<?php $page="estimates";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Estimates @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Estimates @endslot
@endcomponent 
@component('components.search-filder') 
@slot('li_1') Add Estimate @endslot
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
                                            <th>Estimate Number</th>
                                            <th>Client</th>
                                            <th>Estimate Date</th>
                                            <th>Expiry Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="{{url('estimate-view')}}">EST-0001</a></td>
                                            <td>Global Technologies</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-one">Accepted</span></td>
                                            <td class="text-end ico-sec">
                                                <a href="{{url('edit-estimate')}}"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_estimate"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('estimate-view')}}">EST-0002</a></td>
                                            <td>Delta Infotech</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-two">Declined</span></td>
                                            <td class="text-end ico-sec">
                                                <a href="{{url('edit-estimate')}}"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_estimate"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('estimate-view')}}">EST-0003</a></td>
                                            <td>Cream Inc</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-three">Sent</span></td>
                                            <td class="text-end ico-sec">
                                                <a href="{{url('edit-estimate')}}"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_estimate"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('estimate-view')}}">EST-0004</a></td>
                                            <td>International Software Inc</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-two">Expired</span></td>
                                            <td class="text-end ico-sec">
                                                <a href="{{url('edit-estimate')}}"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_estimate"><i class="far fa-trash-alt"></i></a>
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
@endsection

@endsection