@extends('admin.admin_dashbord')
@section('main')
<div class="content">      
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2>Create Contact</h2>
        </div>
        <div class="card-body">
          <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
            @csrf                        
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="address">Contact Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Contact Address"  >
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
               </div>
                <div class="col-md-12 mb-3">
                <label for="email">Contact Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Contact Email"  >
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
               </div>
               <div class="col-md-12 mb-3">
                <label for="contact">Contact Number</label>
                <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact Number"  >
                @error('contact')
                <span class="text-danger">{{ $message }}</span>
                @enderror
               </div>
              <div class="col-md-12 mb-3">
                <label for="map">Contact Map Iframe</label>
                <a href="https://www.google.com/maps" target="_blank">Google map iframe</a>
              <textarea name="map" class="form-control" id="map" cols="30" rows="5" placeholder="Contact Map Iframe"></textarea>
              @error('map')
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
