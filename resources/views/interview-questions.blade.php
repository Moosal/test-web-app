<?php $page="interview-questions";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Interview Questions @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Interview Questions @endslot
@endcomponent
@component('components.search-filder') 
    @slot('li_1') Add Question @endslot
    @slot('li_2') Add Category @endslot
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
                                            <th>Questions</th>
                                            <th>Option A</th>
                                            <th>Option B</th>
                                            <th>Option C</th>
                                            <th>Option D</th>
                                            <th class="text-center">Correct Answer</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                IS management has decided to rewrite a legacy <br>customer relations system using fourth generation <br>languages (4GLs). Which of the following risks is<br> MOST often associated with system development using 4GLs?
                                            </td>
                                            <td>design facilities </td>
                                            <td> language subsets  </td>
                                            <td>Lack of portability  </td>
                                            <td>Inability to perform data  </td>
                                            <td class="text-center">A</td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_question"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                Which of the following would be the BEST<br> method for ensuring that critical fields in a<br> master record have been updated properly?
                                            </td>
                                            <td>design facilities </td>
                                            <td> language subsets  </td>
                                            <td>Lack of portability  </td>
                                            <td>Inability to perform data  </td>
                                            <td class="text-center">A</td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_question"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="far fa-trash-alt"></i></a>
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