<?php $page="attendance";?>
@extends('layout.mainlayout')
@section('content')

@component('components.breadcrumb')                
    @slot('title') Attendance @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Attendance @endslot
@endcomponent 
@component('components.search-filder') 
@endcomponent			
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection 					
                    <div class="row">
                        <div class="col-lg-12">
							<div class="table-responsive att-table">
								<table class="table table-striped custom-table table-nowrap mb-0">
									<thead>
										<tr>
											<th>Employee</th>
											<th>1</th>
											<th>2</th>
											<th>3</th>
											<th>4</th>
											<th>5</th>
											<th>6</th>
											<th>7</th>
											<th>8</th>
											<th>9</th>
											<th>10</th>
											<th>11</th>
											<th>12</th>
											<th>13</th>
											<th>14</th>
											<th>15</th>
											<th>16</th>
											<th>17</th>
											<th>18</th>
											<th>19</th>
											<th>20</th>
											<th>22</th>
											<th>23</th>
											<th>24</th>
											<th>25</th>
											<th>26</th>
											<th>27</th>
											<th>28</th>
											<th>29</th>
											<th>30</th>
											<th>31</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
													<a href="{{url('profile')}}">John Doe</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td>
												<div class="half-day">
													<span class="first-off"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></span> 
													<span class="first-off"><i class="fas fa-times text-danger"></i></span>
												</div>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td>
												<div class="half-day">
													<span class="first-off"><i class="fas fa-times text-danger"></i></span> 
													<span class="first-off"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></span>
												</div>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
													<a href="{{url('profile')}}">Richard Miles</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
													<a href="{{url('profile')}}">John Smith</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
													<a href="{{url('profile')}}">Mike Litorus</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}"></a>
													<a href="{{url('profile')}}">Wilmer Deluna</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}"></a>
													<a href="{{url('profile')}}">Jeffrey Warden</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}"></a>
													<a href="{{url('profile')}}">Bernardo Galaviz</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}"></a>
													<a href="{{url('profile')}}">Lesley Grauer</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
													<a href="{{url('profile')}}">Jeffery Lalor</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}"></a>
													<a href="{{url('profile')}}">Loren Gatlin</a>
												</h2>
											</td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><i class="fas fa-times text-danger"></i> </td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
											<td><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#attendance_info"><i class="fa fa-check text-success"></i></a></td>
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