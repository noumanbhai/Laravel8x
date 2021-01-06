<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            <span>Welcom to <u class="text-primary">{{Auth::user()->name}}</u></span>
            <b class="float-right">Total user
                <span class="badge badge-pill badge-info">{{count($users)}}</span>
            </b>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Serial No</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Create At</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <th scope="row">{{$loop->index+1}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at->diffForHumans()}}</td>
              </tr>
              @endforeach


          </tbody>
      </table>
  </div>
</div>


</div>
</div>
</x-app-layout>
