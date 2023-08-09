@extends('layouts.app')

@section('page_title', 'Details | Todo')

@section('content')
<div class="row my-5 justify-content-center">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">{{ $todo->name }}</h4>
						</div>
						<div class="card-body">
							<p>{{ $todo->details }}</p>
							<p>
								<a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm">Edit</a>
								<a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
							</p>
						</div>
					</div>
				</div>
			</div>  
@endsection