@extends('layouts.app')
@section('content')
<div id="layoutSidenav">
<ol class="breadcrumb">
          <li class="breadcrumb-item pt-5">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Pay Salary</li>
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
	                                  <!--return advacned salary of employees-->
	                                  {{-- @php
	                                   $month = date("F", strtotime('-1 month'));
								       $salary=DB::table('advance_salaries')
								               ->join('employees','advance_salaries.emp_id','employees.id')
								               ->select('advance_salaries.*','employees.name','employees.salary','employees.photo')
								               ->where('month',$month)
								               ->get();

	                                  @endphp --}}


	                                  <!--End php code-->
	                           
	                                  <tbody>
	                                  	@foreach($employee as $row)
	                                      <tr>
	                                          <td>{{ $row->name }}</td>
	                                          <td><img src="{{ $row->photo }}" style="height: 60px; width: 60px;"></td>
	                                          <td>{{ $row->salary }}</td>
	                                          <td><span class="badge badge-success"> {{ date("F", strtotime('-1 months')) }} </span></td> 

	                                          <td></td> 


	                                         <td>
	                                         	
	                                         	<a  class="btn btn-sm btn-primary">Pay Now</a>
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