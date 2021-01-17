 @extends('admin.admin_dashbord')
 @section('main')
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                  <div class="float-right"><a href="{{route('about.create')}}" class="btn btn-primary">Create Slider</a></button></div>
      <div class="card-header"><u>All About</u>
      </div>
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Serial No</th>
            <th scope="col">Aboute Title</th>
            <th scope="col">Aboute Short Description</th>
            <th scope="col">Aboute Long Description</th>
            {{-- <th scope="col">Create At</th> --}}
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach($aboutes as $aboute)

          <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$aboute->title}}</td>
     <td>    
<textarea rows="3" cols="30" readonly>
  {{$aboute->short_des}}
</textarea></td>
<td>
<textarea rows="3" cols="30" readonly>
  {{$aboute->long_des}}
</textarea>
</td>
{{-- <td>{{$aboute->created_at}}</td> --}}
<td>
 <form action="{{ route('about.destroy', $aboute->id)}}" method="post">
      @csrf
      @method('DELETE')
      <a href="{{route('about.edit',$aboute->id)}}" class="btn btn-primary">Edit</a> 

      <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
    </form>

  </td>
</tr>
@endforeach
</tbody>
</table>

 <div class="flex items-center justify-between">{{ $aboutes->links() }}
 </div> 
      </div>
</div>
  </div>
</div>

@endsection
