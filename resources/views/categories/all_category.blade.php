@extends('layouts.app')
@section('content')
<div id="layoutSidenav">
<ol class="breadcrumb mt-5">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Categories</li>
        </ol>
        <!-- Icon Cards-->
       <div class="row container pt-5">
         <div class="card col-lg-12">
            <div class="card-body">
                <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
	                                          <th>Sl</th>
	                                          <th>Name</th>
	                                          <th>Action</th>
	                                      </tr>
	                                  </thead>

	                           
	                                  <tbody>
	                                  	@foreach($category as $row)
	                                      <tr>
	                                          <td>{{ $row->id }}</td>
	                                          <td>{{ $row->cat_name }}</td>
	                                         <td>
	                                         	<a href="{{ URL::to('/edit-category/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
	                                         	<a href="{{ URL::to('/delete-category/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	                                         	
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