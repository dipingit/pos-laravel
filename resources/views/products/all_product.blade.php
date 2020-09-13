@extends('layouts.app')
@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
	<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Products</li>
        </ol>
        <!-- Icon Cards-->
       <div class="row container pt-5">
         <div class="card col-lg-12">
            <div class="card-body">
                <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
	                                          <th>Name</th>
	                                          <th>Code</th>
	                                          <th>Selling Price</th>
	                                          <th>Image</th>
	                                          <th>Garage</th>
	                                          <th>Route</th>
	                                          <th>Action</th>
	                                      </tr>
	                                  </thead>
	                                  <tbody>
	                                  	@foreach($product as $row)
	                                      <tr>
	                                          <td>{{ $row->product_name }}</td>
	                                          <td>{{ $row->product_code }}</td>
	                                          <td>{{ $row->selling_price }}</td>
	                                          <td><img src="{{ $row->product_image }}" style="height: 60px; width: 60px;"></td>
	                                          <td>{{ $row->product_garage }}</td>
	                                          <td>{{ $row->product_route }}</td>
	                                         <td>
	                                         	<a href="{{ URL::to('edit-product/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
	                                         	<a href="{{ URL::to('delete-product/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	                                         	<a href="{{ URL::to('view-product/'.$row->id) }}" class="btn btn-sm btn-primary">View</a>
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
	    


@endsection