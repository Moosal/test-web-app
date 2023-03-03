<?php $page="payslip-reports";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Payslip Reports @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Payslip Reports @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection 
                    
                    <!-- Content Starts -->
                    <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Employee Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <select class="form-control floating select">
                                        <option>
                                            Jan
                                        </option>
                                        <option>
                                            Feb
                                        </option>
                                        <option>
                                            Mar
                                        </option>
                                    </select>
                                </div>
                                <label class="focus-label">Month</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <select class="form-control floating select">
                                        <option>
                                            2018
                                        </option>
                                        <option>
                                            2019
                                        </option>
                                        <option>
                                            2020
                                        </option>
                                    </select>
                                </div>
                                <label class="focus-label">Year</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
                        </div>     
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Employee Name</th>
                                            <th>Paid Amount</th>
                                            <th>Payment Month</th>
                                            <th>Payment Year</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Bernardo Galaviz <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>$200</td>
                                            <td>Apr</td>
                                            <td>2019</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Jeffrey Warden <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>$300</td>
                                            <td>Dec</td>
                                            <td>2020</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td>$400</td>
                                            <td>Jun</td>
                                            <td>2020</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>$500</td>
                                            <td>Feb</td>
                                            <td>2020</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Mike Litorus <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>$600</td>
                                            <td>Jan</td>
                                            <td>2020</td>
                                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                    <!-- /Content End -->
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