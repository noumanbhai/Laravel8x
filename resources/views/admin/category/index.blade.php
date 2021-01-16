<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            <span>All<u class="text-primary">Category</u></span>
            <b class="float-right">Total user
                <span class="badge badge-pill badge-info"></span>
            </b>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
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
                  <div class="card-header"><u>All Category</u>
                  </div>
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Serial No</th>
                          <th scope="col">Cateory Name</th>
                          <th scope="col">User</th>
                          <th scope="col">Create At</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>

                    @foreach($categorys as $category)

                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$category->category_name}}</td>
                      <td>{{$category->userget->name}}</td>
                      <td>{{$category->created_at->diffForHumans()}}</td>
                      <td>


    <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a> 
    <a href="{{url('softdelete/category/'.$category->id)}}" class="btn btn-danger">Delete</a>
</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categorys->links() }}


    </div>

    <div class="col-md-4">
        <div class="card-header"><u>Create Category</u></div>
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="category">Etnter Category</label>
                <input type="text" class="form-control" name="category_name" id="category" aria-describedby="emailHelp" placeholder="Enter new Category" required="">
                @error('category_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>
</div>
</div>


</div>
</div>
</x-app-layout>
<hr>

<!-- Trash part -->
<div class="container">
<div class="row">
<div class="col-md-8">
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
<div class="card-header"><u>Trash List</u>
</div>
<table class="table table-hover">
<thead>
<tr>
<th scope="col">Serial No</th>
<th scope="col">Category Name</th>
<th scope="col">User</th>
<th scope="col">Create At</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>

@foreach($trashcat as $book)

<tr>
<th scope="row">{{$loop->index+1}}</th>
<td>{{$book->category_name}}</td>
<td>{{$book->userget->name}}</td>
<td>{{$book->created_at->diffForHumans()}}</td>
<td>
<form action="{{ url('category/delete',$book->id)}}" method="POST">
   
   <input name="_method" type="hidden" value="DELETE">
   <button class="btn btn-primary" onclick="return confirm('Sure want Delete')">Delete</button>
    {{ csrf_field() }}
<a href="{{url('category/restore',$book->id)}}" class="btn btn-primary">Restore</a>
</form>
</td>

<!-- @csrf
@method('DELETE') -->

</tr>
@endforeach
</tbody>
</table>
{{ $trashcat->links() }}

<!--      @if(empty($categorys))
@else
<div class="alert alert-warning" role="alert">
Record is not Found
</div>
@endif -->

</div>
</div>
</div>