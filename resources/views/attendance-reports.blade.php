<?php $page="attendance-reports";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Attendance Reports @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Attendance Reports @endslot
@endcomponent 
@component('components.search-filder')
 @slot('li_1') Department @endslot
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
                                            <th>Employee</th>
                                            <th>Date</th>
                                            <th>Workday</th>
                                            <th>Work</th>
                                            <th>Late Arrival</th>
                                            <th>Missing Work</th>
                                            <th>Extra Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe <span>Design</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <p class="mb-0">Morning Shift ( 8.0hrs )</p>
                                                <i class="fa fa-arrow-right text-success"></i> 9.30am | <i class="fa fa-arrow-left text-danger"></i> 7.30pm
                                            </td>
                                            <td><button class="btn btn-outline-success btn-sm">09</button></td>
                                            <td><button class="btn btn-outline-warning btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-danger btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-success btn-sm">01</button></td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Richard Miles <span>#0002</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <button class="btn btn-outline-danger btn-sm">Week off</button>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <button class="btn btn-outline-danger btn-sm">Week off</button>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Mike Litorus <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <p class="mb-0">Morning Shift ( 8.0hrs )</p>
                                                <i class="fa fa-arrow-right text-success"></i> 9.30am | <i class="fa fa-arrow-left text-danger"></i> 6.30pm
                                            </td>
                                            <td><button class="btn btn-outline-success btn-sm">08</button></td>
                                            <td><button class="btn btn-outline-warning btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-danger btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-success btn-sm">00</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Wilmer Deluna <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <button class="btn btn-outline-danger btn-sm">Week off</button>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                -
                                            </td>
                                            <td>
                                                -
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Employee Name</th>
                                            <th>Total Days</th>
                                            <th>Total Time</th>
                                            <th>Total Time Worked</th>
                                            <th>Total Late Arrival</th>
                                            <th>Total Missed Work</th>
                                            <th>Total Extra Work</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe <span>Design</span></a>
                                                </h2>
                                            </td>
                                            <td>01</td>
                                            <td>08</td>
                                            <td><button class="btn btn-outline-success btn-sm">09</button></td>
                                            <td><button class="btn btn-outline-warning btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-danger btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-success btn-sm">01</button></td>
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