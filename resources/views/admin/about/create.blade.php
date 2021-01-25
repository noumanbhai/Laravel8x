@extends('admin.admin_dashbord')
@section('main')
<div class="content">      
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2>Create About</h2>
        </div>
        <div class="card-body">
          <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
            @csrf                        
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="title">About Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="About title"  >
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <div class="col-md-12 mb-3">
                <label for="short_des">Short Description</label>
                <textarea name="short_des" class="form-control" id="short_des" cols="30" rows="5" placeholder="Short description"></textarea>
              @error('short')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="col-md-12 mb-3">
                <label for="long_des">Long Description</label>
                <textarea name="long_des" class="form-control" id="long_des" cols="30" rows="5" placeholder="Long description"></textarea>
                @error('long')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

            </div>

            <button class="btn btn-primary" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection
