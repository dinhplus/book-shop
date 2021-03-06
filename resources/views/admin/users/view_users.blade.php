@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Orders</a> <a href="#" class="current">Add Order</a> </div>
    <h1>Users</h1>
    @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Users</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Male</th>
                  <th>Birthday</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($users as $user)
                <tr class="gradeX">
                  <td class="center">{{ $user->id }}</td>
                  <td class="center">{{ $user->username }}</td>
                  <td class="center">{{ $user->name }}</td>
                  <td class="center">{{ $user->male }}</td>
                  <td class="center">{{ $user->birthday }}</td>
                  <td class="center">{{ $user->email }}</td>
                  <td class="center">{{ $user->phoneNumber }}</td>
                  <td class="center"> 
                    <a href="{{ url('/admin/edit-user/'.$user->id) }}" class="btn btn-primary btn-mini">Edit</a> 
                    <a id="delUser" href = "delete-user/{{ $user->id }}" href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection