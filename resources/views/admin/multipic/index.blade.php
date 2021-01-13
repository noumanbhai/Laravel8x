<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            <span>All<u class="text-primary">Multi Images</u></span>
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
                  <div class="card-header"><u>Multi Images</u>
                  </div>
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Serial No</th>
                         <th scope="col">Brand Image</th>
                       </tr>
                  </thead>
                  <tbody>

                    @foreach($images as $image)

                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$image->image}}</td>
                     </tr>
                @endforeach
            </tbody>
        </table>
        {{ $images->links() }}

     <!--      @if(empty($categorys))
          @else
          <div class="alert alert-warning" role="alert">
            Record is not Found
        </div>
        @endif -->

    </div>

    <div class="col-md-4">
        <div class="card-header"><u>Create Brand</u></div>
        <form action="{{route('multipics.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- image -->
            <div class="form-group">
                <label for="image">Brand Image</label>
                <input type="file" class="form-control" name="images[]" id="image" multiple>
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

