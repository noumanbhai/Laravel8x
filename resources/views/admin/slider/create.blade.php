@extends('admin.admin_dashbord')
@section('main')
<div class="content">      
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2>Create Slider</h2>
        </div>
        <div class="card-body">
          <form action="{{route('slid.store')}}" method="POST" enctype="multipart/form-data">
            @csrf                        
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="title">Slider Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Slider title"  >
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <div class="col-md-12 mb-3">
                <label for="description">Slider Description</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="5" placeholder="Sider description"></textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <div class="col-md-12 mb-3">
                <label for="image">Slider Image</label>
                <input type="file" class="form-control" id="image" 
                name="photo">
                @error('image')
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
