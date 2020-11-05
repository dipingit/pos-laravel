@extends('layouts.app')
@section('content')
  <div class="content">
    <div class="container pt-5">
        <div class= "row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-info pt-5">
                   
                        <a href="{{ route('export') }}" class="btn btn-danger btn-sm">Download Xlsx</a></h3>
                    </div>


                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="panel-body pt-3">
                        <form role="form" action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <div class="form-group">
                                <label for="exampleInputPassword20">Xlsx File Import</label>
                                <input type="file"  name="import_file"  required>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light">Upload</button>
                        </form>
                    </div><!-- panel-body -->
                </div> <!-- panel -->
               
                    <strong class=" text-danger">You can import and export your products from here.</strong>
               
            </div> <!-- col-->
        </div>


    </div>
</div> 

</div> 
</div>


@endsection