<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
      <th scope="row">1</th>
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
