<?php $page="clients-list";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Clients @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Clients @endslot
@endcomponent 
@component('components.search-filder')                
    @slot('title') Add Client @endslot
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Client ID</th>
                                            <th>Contact Person</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('client-profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/client-img.png')}}" alt=""></a>
                                                    <a href="{{url('client-profile')}}">Global Technologies</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0001</td>
                                            <td>Barry Cuda</td>
                                            <td>barrycuda@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('client-profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/client-img.png')}}" alt=""></a>
                                                    <a href="{{url('client-profile')}}">Delta Infotech</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0002</td>
                                            <td>Tressa Wexler</td>
                                            <td>tressawexler@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-one">
                                                        <i class="far fa-dot-circle"></i> Inactive
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('client-profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/client-img.png')}}"></a>
                                                    <a href="{{url('client-profile')}}">Cream Inc</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0003</td>
                                            <td>Ruby Bartlett</td>
                                            <td>rubybartlett@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('client-profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/client-img.png')}}"></a>
                                                    <a href="{{url('client-profile')}}">Wellware Company</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0004</td>
                                            <td>Misty Tison</td>
                                            <td>mistytison@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('client-profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/client-img.png')}}" alt=""></a>
                                                    <a href="{{url('client-profile')}}">Mustang Technologies</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0005</td>
                                            <td>Daniel Deacon</td>
                                            <td>danieldeacon@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('client-profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/client-img.png')}}" alt=""></a>
                                                    <a href="{{url('client-profile')}}">International Software Inc</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0006</td>
                                            <td>Walter Weaver</td>
                                            <td>walterweaver@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('client-profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/client-img.png')}}" alt=""></a>
                                                    <a href="{{url('client-profile')}}">Mercury Software Inc</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0007</td>
                                            <td>Amanda Warren</td>
                                            <td>amandawarren@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('client-profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/client-img.png')}}" alt=""></a>
                                                    <a href="{{url('client-profile')}}">Carlson Tech</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0008</td>
                                            <td>Betty Carlson</td>
                                            <td>bettycarlson@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-one">
                                                        <i class="far fa-dot-circle"></i> Inactive
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec d-flex justify-content-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="far fa-trash-alt"></i></a>
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
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script> 
  
 @endsection 
@endsection