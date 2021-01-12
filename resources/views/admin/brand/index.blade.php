<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            <span>All<u class="text-primary">Brand</u></span>
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
                  <div class="card-header"><u>All Brand</u>
                  </div>
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Serial No</th>
                          <th scope="col">Brand Name</th>
                          <th scope="col">Brand Image</th>
                          <th scope="col">Create At</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>

                    @foreach($brands as $brand)

                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$brand->brand_name}}</td>
                      <td><img src="{{ URL::to('/') }}/images/{{ $brand->brand_image }}" class="img-thumbnail" width="50" height="50" /></td>
                 <td>{{$brand->created_at->diffForHumans()}}</td>
<td>


    <a href="{{route('brand.edit',$brand->id)}}" class="btn btn-primary">Edit</a> 
    <a href="{{url('softdelete/brand/'.$brand->id)}}" class="btn btn-danger">Delete</a>
</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $brands->links() }}

     <!--      @if(empty($categorys))
          @else
          <div class="alert alert-warning" role="alert">
            Record is not Found
        </div>
        @endif -->

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


</div>
</div>
</x-app-layout>
<hr>

