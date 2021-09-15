
@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blogs</h2>
            </div>
            @if(Auth::user())
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('blog.create') }}"> Create New blog</a>
            </div>
            @endif
        </div>
    </div>




    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>

            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($blog as $row)
            <tr>
                <td>
                    <img src="images/{{$row->image}}" alt="tatavasoft" width="100" height="100">
                </td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->description }}</td>
                <td>{{ $row->start_date }}</td>
                <td>{{ $row->end_date }}</td>
                <td>
                    @if(Auth::user())
                    <form action="{{ route('blog.destroy',$row->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('blog.edit',$row->id) }}">Edit</a>



                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    @else
                     ---
                    @endif
                </td>
            </tr>
	    @endforeach
    </table>




  @endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">


<script>
    // Use datepicker on the date inputs
    jQuery(document).ready(function($) {
        $("#from_date").datepicker({
            dateFormat:'yy-mm-dd'
        });
        $("#to_date").datepicker({
            dateFormat:'yy-mm-dd'
        });
    })
</script>
