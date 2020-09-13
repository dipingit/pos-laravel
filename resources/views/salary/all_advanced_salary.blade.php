@extends('layouts.app')
@section('content')
<div id="layoutSidenav">
<ol class="breadcrumb">
          <li class="breadcrumb-item pt-5">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Advance Salary</li>
        </ol>
        <!-- Icon Cards-->
       <div class="row container pt-5">
         <div class="card col-lg-12">
            <div class="card-body">
                <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
	                                          <th>Name</th>
	                                          <th>Photo</th>
	                                          <th>Salary</th>
	                                          <th>Month</th>
	                                          <th>Advanced</th>
	                                          <th>Action</th>
	                                      </tr>
	                                  </thead>

	                           
	                                  <tbody>
	                                  	@foreach($salary as $row)
	                                      <tr>
	                                          <td>{{ $row->name }}</td>
	                                          <td><img src="{{ $row->photo }}" style="height: 60px; width: 60px;"></td>
	                                          <td>{{ $row->salary }}</td>
	                                          <td>{{ $row->month }}</td>
	                                          <td>{{ $row->advanced_salary }}</td>
	                                         <td>
	                                         	<a href="{{ URL::to('/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
	                                         	<a href="{{ URL::to(''.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	                                         	<a href="{{ URL::to(''.$row->id) }}" class="btn btn-sm btn-primary">View</a>
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