@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <table class="table table-bordered">
      	<thead>
      		<tr>
      			<th> Sno</th>
      			<th> User name</th>
      			<th> User email</th>
      			<th> Created date</th>
      		</tr>
      	</thead>
      	<tbody>
      		@php ($i = 1)
      		@foreach($users as $user)
	      		<tr>
	      			<td>{{$i}}</td>
	      			<td>{{$user->name}}</td>
	      			<td>{{$user->email}}</td>
	      			<td>{{date("d-m-y",strtotime($user->created_at))}}</td>
	      		</tr>
      		@php ($i++)
      		@endforeach
      	</tbody>
      </table>
    </div>
</div>
@endsection