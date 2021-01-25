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
        <div class="float-right"><a href="{{route('slid.create')}}" class="btn btn-primary">Create Slider</a></button></div>
        <div class="card-header"><u>All Brand</u>
        </div>
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Serial No</th>
              <th scope="col">Slider Title</th>
              <th scope="col">Slider Description</th>
              <th scope="col">Slider Image</th>
              {{-- <th scope="col">Create At</th> --}}
              <th scope="col">Action</th>
            </tr>
          </thead>
          @if($sliders->count())
          <tbody>

            @foreach($sliders as $slider)

            <tr>
              <th scope="row">{{$loop->index+1}}</th>
              <td>{{$slider->title}}</td>
              <td>    
                <textarea rows="3" cols="30" readonly>
                  {{$slider->description}}
                </textarea></td>
                <td><img src="{{ URL::to('/') }}/slider/{{ $slider->image }}" class="img-thumbnail" width="50" height="50" /></td>
                {{-- <td>{{$slider->created_at}}</td> --}}
                <td>

                  <form action="{{ route('brand.destroy', $slider->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('brand.edit',$slider->id)}}" class="btn btn-primary">Edit</a> 

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

          <div class="flex items-center justify-between">{{ $sliders->links() }}
          </div> 
        </div>
      </div>
    </div>
  </div>

  @endsection
