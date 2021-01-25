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
            @if($images->count())
            <tbody>

              @foreach($images as $image)
<!--              <div class="col-md-4">

<div class="card" style="width: 18rem;">
<ul class="list-group list-group-flush">
<li> <img src="{{ URL::to('/') }}/multipic/{{ $image->image }}" class="img-thumbnail" width="50" height="50" />
</li></ul>
</div></div> -->
<div class="container">

  <div style="width:200px">
    <img src="{{ URL::to('/') }}/multipic/{{ $image->image }}" class="img-thumbnail" style="width:30%">
  </div>
</div>
<br>

@endforeach
@else
</tbody>
</table>
<p class="notfound">
  Not data found
</p>
@endif
{{ $images->links() }}


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

