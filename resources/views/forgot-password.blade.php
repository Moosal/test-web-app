<?php $page="forgot-password";?>
@extends('layout.mainlayout-without-nav')
@section('content')		

				<div class="account-wrapper">
					<h3 class="account-title">Forgot Password?</h3>
					<p class="account-subtitle">Enter your email to get a password reset link</p>
					
					<!-- Account Form -->
					<form>
						<div class="form-group">
							<label>Email Address</label>
							<input class="form-control" type="text">
						</div>
						<div class="form-group text-center">
							<button class="btn btn-primary account-btn" type="submit">Reset Password</button>
						</div>
						<div class="account-footer">
							<p>Remember your password? <a href="{{url('login')}}">Login</a></p>
						</div>
					</form>
					<!-- /Account Form -->
				</div>
				
@endsection