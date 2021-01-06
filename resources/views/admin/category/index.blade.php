<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            <span>All<u class="text-primary">Category</u></span>
            <b class="float-right">Total user
                <span class="badge badge-pill badge-info"></span>
            </b>

        </h2>
    </x-slot>

    <div class="py-12">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-header"><u>All Category</u>
                    </div>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Serial No</th>
                          <th scope="col">Cateory Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Create At</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($categorys as $category)
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$category->category_name}}</td>
                      <td>{{$category->user_id}}</td>
                  <td>{{$category->created_at->diffForHumans()}}</td>
                  </tr>
                  @endforeach


              </tbody>
          </table>

      </div>

      <div class="col-md-4">
        <div class="card-header"><u>Create Category</u></div>
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="category">Etnter Category</label>
                <input type="text" class="form-control" name="category_name" id="category" aria-describedby="emailHelp" placeholder="Enter new Category" required="">
                @error('category_name')
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
