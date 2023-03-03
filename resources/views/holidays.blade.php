<?php $page="holidays";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Holidays @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Holidays @endslot
@endcomponent 
@component('components.search-filder') 
    @slot('title') Add Holidays @endslot
@endcomponent
@section('css')
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title </th>
                                            <th>Holiday Date</th>
                                            <th>Day</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="holiday-completed">
                                            <td>1</td>
                                            <td>New Year</td>
                                            <td>1 Jan 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Sunday</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-completed">
                                            <td>2</td>
                                            <td>Good Friday</td>
                                            <td>14 Apr 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Friday</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-completed">
                                            <td>3</td>
                                            <td>May Day</td>
                                            <td>1 May 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Monday</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-completed">
                                            <td>4</td>
                                            <td>Memorial Day</td>
                                            <td>28 May 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Monday</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-completed">
                                            <td>5</td>
                                            <td>Ramzon</td>
                                            <td>26 Jun 2019</td>
                                            <td><span class="role-info role-bg-two">Monday</span></td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-upcoming">
                                            <td>6</td>
                                            <td>Bakrid</td>
                                            <td>2 Sep 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Saturday</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-upcoming">
                                            <td>7</td>
                                            <td>Deepavali</td>
                                            <td>18 Oct 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Wednesday</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-upcoming">
                                            <td>8</td>
                                            <td>Christmas</td>
                                            <td>25 Dec 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Monday</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
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
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection 
@endsection