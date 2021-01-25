 @extends('admin.admin_dashbord')
 @section('main')
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
      <div class="card-header"><u>All Brand</u>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Serial No</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Brand Image</th>
            <th scope="col">Create At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
      @if($brands->count())
        <tbody>

          @foreach($brands as $brand)

          <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$brand->brand_name}}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $brand->brand_image }}" class="img-thumbnail" width="50" height="50" /></td>
            <td>{{$brand->created_at->diffForHumans()}}</td>
            <td>

    <form action="{{ route('brand.destroy', $brand->id)}}" method="post">
      @csrf
      @method('DELETE')
      <a href="{{route('brand.edit',$brand->id)}}" class="btn btn-primary">Edit</a> 

      <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
    </form>

  </td>
</tr>
@endforeach
@else
</tbody>
</table>
  <p class="notfound">
  Not data found
  </p>
 @endif

 <div class="flex items-center justify-between">{{ $brands->links() }}
 </div> 
      </div>

      <div class="col-md-4">
        <div class="card-header"><u>Create Brand</u></div>
        <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="brand">Brand Name</label>
            <input type="text" class="form-control" name="brand_name" id="brand" aria-describedby="emailHelp" placeholder="Enter new Brand" >
            @error('brand_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          </div>
          <!-- image -->
          <div class="form-group">
            <label for="image">Brand Image</label>
            <input type="file" class="form-control" name="brand_image" id="image" >
            @error('brand_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>

    </div>
  </div>
</div>

@endsection
