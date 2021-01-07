<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			<!-- {{ __('Dashboard') }} -->
			<span>Edit <u class="text-primary"> Category</u></span>
			<b class="float-right">Total user
				<span class="badge badge-pill badge-info"></span>
			</b>

		</h2>
	</x-slot>

	<div class="py-12">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="card-header"><u>Edit Category</u></div>
					<form action="{{route('category.update',$category->id)}}" method="post">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
						<input type="hidden" name="id" value="{{$category->id}}">
						<div class="form-group">
							<label for="category">Etnter Category</label>
							<input type="text" class="form-control" value="{{$category->category_name}}" name="category_name"  placeholder="Enter Category">
		<!-- 					@error('category_name')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror -->

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
