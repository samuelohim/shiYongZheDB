@extends('layouts.main')

@section('content')

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th><span class="glyphicon glyphicon-envelope"></span></th>
      <th>Created Date</th>
      <th><span class="glyphicon glyphicon-cog"></span></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr class="active">
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>
      		<ul class="list-inline list-unstyled">
      			
      			<li>
      				<a class="btn btn-warning" href = '/syz/{{$user->id}}/edit'>
      					<span class="glyphicon glyphicon-wrench"></span>
      				</a>
      			</li>
      			<li></li>
      			<li></li>
      		</ul>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection