@extends('layouts.app')
@section('content')
<div class="content-page">
  <div class="content">
        <div class="container">
      

            <!-- Start Widget -->
            <div class="row">
	           <!-- Basic example -->
	           <div class="col-md-2"></div>
                <div class="col-md-8 ">
                    <div class="panel panel-info">
                        <div class="panel-heading pt-5"><h3 class="panel-title text-white">Category</h3>

                        </div>
                        <a href="{{ route('all.category') }}" class="pull-right btn btn-danger btn-sm">All Category</a>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="panel-body">
                            <form role="form" action="{{ url('/insert-category') }}" method="post">
                            	@csrf
                                <div class="form-group">
                                  <div class="form-group">
                                    <label for="exampleInputPassword20">Category Name</label>
                                    <input type="text" class="form-control" name="cat_name" placeholder="Category Name" required>
                                  </div>
                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            </form>
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->

            </div>
        </div> <!-- container -->
                   
    </div> <!-- content -->
</div>


@endsection