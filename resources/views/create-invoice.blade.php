<?php $page="create-invoice";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Create Invoice @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Create Invoice @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">

@endsection                   
                    <div class="row">
                        <div class="col-sm-12">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Client <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Please Select</option>
                                                <option selected>Barry Cuda</option>
                                                <option>Tressa Wexler</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Project <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select Project</option>
                                                <option selected>Office Management</option>
                                                <option>Project Management</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Tax</label>
                                            <select class="select">
                                                <option>Select Tax</option>
                                                <option>VAT</option>
                                                <option>GST</option>
                                                <option>No Tax</option>
                                            </select>
                                        </div>
                                    </div>                                  
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Invoice date <span class="text-danger">*</span></label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label>Due Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Client Address</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Billing Address</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-white">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px">#</th>
                                                        <th class="col-sm-2">Item</th>
                                                        <th class="col-md-6">Description</th>
                                                        <th style="width:100px;">Unit Cost</th>
                                                        <th style="width:80px;">Qty</th>
                                                        <th>Amount</th>
                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <input class="form-control" type="text" style="min-width:150px">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" style="min-width:150px">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:100px" type="text">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:80px" type="text">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" readonly style="width:120px" type="text">
                                                    </td>
                                                    <td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <input class="form-control" type="text" style="min-width:150px">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" style="min-width:150px">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:100px" type="text">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:80px" type="text">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" readonly style="width:120px" type="text">
                                                    </td>
                                                    <td><a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="far fa-trash-alt"></i></a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-white">
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text-end">Total</td>
                                                        <td style="text-align: right; padding-right: 30px;width: 230px">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="text-end">Tax</td>
                                                        <td style="text-align: right; padding-right: 30px;width: 230px">
                                                            <input class="form-control text-end" value="0" readonly type="text">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="text-end">
                                                            Discount %
                                                        </td>
                                                        <td style="text-align: right; padding-right: 30px;width: 230px">
                                                            <input class="form-control text-end" type="text">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" style="text-align: right; font-weight: bold">
                                                            Grand Total
                                                        </td>
                                                        <td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                            $ 0.00
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>                               
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Other Information</label>
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn m-r-10">Save & Send</button>
                                    <button class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
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