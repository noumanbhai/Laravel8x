 @extends('admin.admin_dashbord')
 @section('main')
<div class="py-12 border ">
		<div class="container m-5">
			<div class="row">
				<div class="col-md-8 align-content-center">
					<div class="card-header"><u>Edit Brand</u></div>
					<form action="{{route('brand.update',$brand->id)}}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
						<input type="hidden" name="id" value="{{$brand->id}}">
						<div class="form-group">
							<label for="brand">Brand Name</label>
							<input type="text" id="brand" class="form-control" value="{{$brand->brand_name}}" name="brand_name"  placeholder="Enter Brand name">
						</div>
						<!-- file upload -->
						<div class="form-group">
							<label for="brand">Brand Image</label>
							<input type="file" id="brand" class="form-control"  name="brand_image"  placeholder="Enter Brand name">
						</div>
						<!-- old image -->
						 <div class="form-group">
							<label for="brand">Old Image</label>
							<input type="hidden" name="old_image" value="{{$brand->brand_image}}">

						<img src="{{ URL::to('/') }}/images/{{ $brand->brand_image }}" class="img-thumbnail" width="70" height="70" />
						
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>

				</div>

			</div>
		</div>
	</div>
	@endsection


