<?php $page="job-list";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Jobs @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Jobs @endslot
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection 


                    <div class="row">
                        <div class="col-md-6">
                            <a class="job-list" href="{{url('job-view')}}">
                                <div class="job-list-det">
                                    <div class="job-list-desc">
                                        <h3 class="job-list-title">Web Devloper</h3>
                                        <h4 class="job-department">Development</h4>
                                    </div>
                                    <div class="job-type-info">
                                        <span class="job-types">Full Time</span>
                                    </div>
                                </div>
                                <div class="job-list-footer">
                                    <ul>
                                        <li><i class="fa fa-map-signs"></i> California</li>
                                        <li><i class="far fa-money-bill-alt"></i> $35000-$38000</li>
                                        <li><i class="far fa-clock"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="job-list" href="{{url('job-view')}}">
                                <div class="job-list-det">
                                    <div class="job-list-desc">
                                        <h3 class="job-list-title">Android Devloper</h3>
                                        <h4 class="job-department">App Development</h4>
                                    </div>
                                    <div class="job-type-info">
                                        <span class="job-types">Part Time</span>
                                    </div>
                                </div>
                                <div class="job-list-footer">
                                    <ul>
                                        <li><i class="fa fa-map-signs"></i> California</li>
                                        <li><i class="far fa-money-bill-alt"></i> $35000-$38000</li>
                                        <li><i class="far fa-clock"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="job-list" href="{{url('job-view')}}">
                                <div class="job-list-det">
                                    <div class="job-list-desc">
                                        <h3 class="job-list-title">Web Devloper</h3>
                                        <h4 class="job-department">Development</h4>
                                    </div>
                                    <div class="job-type-info">
                                        <span class="job-types">Full Time</span>
                                    </div>
                                </div>
                                <div class="job-list-footer">
                                    <ul>
                                        <li><i class="fa fa-map-signs"></i> California</li>
                                        <li><i class="far fa-money-bill-alt"></i> $35000-$38000</li>
                                        <li><i class="far fa-clock"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="job-list" href="{{url('job-view')}}">
                                <div class="job-list-det">
                                    <div class="job-list-desc">
                                        <h3 class="job-list-title">Android Devloper</h3>
                                        <h4 class="job-department">App Development</h4>
                                    </div>
                                    <div class="job-type-info">
                                        <span class="job-types">Part Time</span>
                                    </div>
                                </div>
                                <div class="job-list-footer">
                                    <ul>
                                        <li><i class="fa fa-map-signs"></i> California</li>
                                        <li><i class="far fa-money-bill-alt"></i> $35000-$38000</li>
                                        <li><i class="far fa-clock"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="job-list" href="{{url('job-view')}}">
                                <div class="job-list-det">
                                    <div class="job-list-desc">
                                        <h3 class="job-list-title">Web Devloper</h3>
                                        <h4 class="job-department">Development</h4>
                                    </div>
                                    <div class="job-type-info">
                                        <span class="job-types">Full Time</span>
                                    </div>
                                </div>
                                <div class="job-list-footer">
                                    <ul>
                                        <li><i class="fa fa-map-signs"></i> California</li>
                                        <li><i class="far fa-money-bill-alt"></i> $35000-$38000</li>
                                        <li><i class="far fa-clock"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="job-list" href="{{url('job-view')}}">
                                <div class="job-list-det">
                                    <div class="job-list-desc">
                                        <h3 class="job-list-title">Android Devloper</h3>
                                        <h4 class="job-department">App Development</h4>
                                    </div>
                                    <div class="job-type-info">
                                        <span class="job-types">Part Time</span>
                                    </div>
                                </div>
                                <div class="job-list-footer">
                                    <ul>
                                        <li><i class="fa fa-map-signs"></i> California</li>
                                        <li><i class="far fa-money-bill-alt"></i> $35000-$38000</li>
                                        <li><i class="far fa-clock"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="job-list" href="{{url('job-view')}}">
                                <div class="job-list-det">
                                    <div class="job-list-desc">
                                        <h3 class="job-list-title">Web Devloper</h3>
                                        <h4 class="job-department">Development</h4>
                                    </div>
                                    <div class="job-type-info">
                                        <span class="job-types">Full Time</span>
                                    </div>
                                </div>
                                <div class="job-list-footer">
                                    <ul>
                                        <li><i class="fa fa-map-signs"></i> California</li>
                                        <li><i class="far fa-money-bill-alt"></i> $35000-$38000</li>
                                        <li><i class="far fa-clock"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="job-list" href="{{url('job-view')}}">
                                <div class="job-list-det">
                                    <div class="job-list-desc">
                                        <h3 class="job-list-title">Android Devloper</h3>
                                        <h4 class="job-department">App Development</h4>
                                    </div>
                                    <div class="job-type-info">
                                        <span class="job-types">Part Time</span>
                                    </div>
                                </div>
                                <div class="job-list-footer">
                                    <ul>
                                        <li><i class="fa fa-map-signs"></i> California</li>
                                        <li><i class="far fa-money-bill-alt"></i> $35000-$38000</li>
                                        <li><i class="far fa-clock"></i> 2 days ago</li>
                                    </ul>
                                </div>
                            </a>
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