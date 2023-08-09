@extends('layouts.app')

@section('page_title', 'Home | Todos')

@section('content')
<div class="row my-5 justify-content-center">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Todo List</h4>
			</div>
			<div class="card-body">
				<ul class="list-group">
					@foreach($todos as $data)
					<li class="list-group-item">{{ $data->name }}
						<a href="/todos/{{ $data->id }}" class="btn btn-primary btn-sm float-end">view</a>

						@if(!$data->completed)
                            <a href="/todos/{{ $data->id }}/complete" class="btn btn-warning btn-sm float-end mx-2">Pending</a>
						@endif
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection