@extends('admin.admin_dashbord')
@section('main')
<div class="py-12">
<div class="container">
<div class="row">
<div class="col-md-12">
<div>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button> 
<strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('danger'))
<div class="alert alert-danger alert-block">
<button type="button"  class="close" data-dismiss="alert">×</button> 
<strong>{{ $message }}</strong>
</div>
@endif
</div>
<div class="float-right"><a href="{{route('contact.create')}}" class="btn btn-primary">Create Contact</a></button></div>
<div class="card-header"><u>All Contact</u>
</div>
<table class="table table-bordered">
<thead class="thead-dark">
<tr>
{{-- <th scope="col">Serial No</th> --}}
<th scope="col">Location</th>
<th scope="col">Email</th>
<th scope="col">Call</th>
<th scope="col">Map</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td><p>{{$contacts->first()->address}}</p></td>
<td>{{$contacts->first()->email}}</td>
<td>{{$contacts->first()->contact}}</td>
<td>
<textarea rows="3" cols="30" readonly>
{{$contacts->first()->map}}</textarea>
</td>
<td>
<form action="{{ route('contact.destroy', $contacts->first()->id)}}" method="post">
@csrf
@method('DELETE')
{{-- <a href="{{route('contact.edit',$contacts->first()->id)}}" class="btn btn-primary">Edit</a>  --}}

<button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
</form>
{{-- <button class="btn btn-primary">ok</button>
 --}}
</td>
</tr>
{{-- @endforeach --}}
</tbody>
</table>

<div class="flex items-center justify-between">
</div> 
</div>
</div>
</div>
</div>

@endsection


