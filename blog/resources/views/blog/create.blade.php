@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create Blog</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blog.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('blog.store') }}" method="POST"  enctype="multipart/form-data">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Title:</strong>
		            <input type="text" name="title"  class="form-control" placeholder="title">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
		            <strong>Description:</strong>
		            <input type="text" name="description"  class="form-control" placeholder="Description">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>start_date:</strong>
		            <input type="text" name="start_date" id="start_date"  class="form-control" placeholder="start_date">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>end_date:</strong>
		            <input type="text" name="end_date" id="end_date"  class="form-control" placeholder="end_date">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Image:</strong>
		            <input type="file" name="image"  class="form-control" placeholder="image">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <select name="status" id="status">
                        <option value="active">active</option>
                        <option value="inactive">inactive</option>
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>

</div>
  @endsection

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">


<script>
    // Use datepicker on the date inputs
    jQuery(document).ready(function($) {
        $("#start_date").datepicker({
            dateFormat:'yy-mm-dd'
        });

        $("#end_date").datepicker({
            dateFormat:'yy-mm-dd'
        });

    })
</script>
