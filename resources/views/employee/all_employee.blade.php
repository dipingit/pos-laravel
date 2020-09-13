@extends('layouts.app')
@section('content')
<div id="layoutSidenav">
    {{-- <div id="layoutSidenav_content"> --}}
	<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Employees</li>
        </ol>
        <!-- Icon Cards-->
       <div class="row container pt-5">
         <div class="card col-lg-12">
            <div class="card-body">
                <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
	                                          <th>Name</th>
	                                          <th>Phone</th>
	                                          <th>Address</th>
	                                          <th>Image</th>
	                                          <th>Salary</th>
	                                          <th>Action</th>
	                                      </tr>
	                                  </thead>

	                           
	                                  <tbody>
	                                  	@foreach($employees as $row)
	                                      <tr>
	                                          <td>{{ $row->name }}</td>
	                                          <td>{{ $row->phone }}</td>
	                                          <td>{{ $row->address }}</td>
	                                          <td><img src="{{ $row->photo }}" style="height: 60px; width: 60px;"></td>
	                                          <td>{{ $row->salary }}</td>
	                                         <td>
	                                         	<a href="{{ URL::to('edit-employee/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
	                                         	<a href="{{ URL::to('delete-employee/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	                                         	<a href="{{ URL::to('view-employee/'.$row->id) }}" class="btn btn-sm btn-primary">View</a>
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
        </div> <!-- container -->            
    </div> <!-- content -->
</div>


@endsection