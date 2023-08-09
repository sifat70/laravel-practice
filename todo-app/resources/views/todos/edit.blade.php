@extends('layouts.app')

@section('page_title', 'Edit | Todos')

@section('content')

			<div class="row my-5 justify-content-center">
				<div class="col-lg-6">
 
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                   @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
              </ul>
          </div>
             @endif
 
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Edit Todo</h4>
						</div>
						<div class="card-body">
							<form action="/todos/{{ $todo->id }}/update" method="POST">
								@csrf
								<div class="my-3">
									<label>Name</label>
									<input type="text" name="name" value="{{ $todo->name }}" class="form-control">
								</div>
								<div class="my-3">
									<label>Details</label>
									<textarea name="details" class="form-control">{{ $todo->name }}</textarea>
								</div>
								<div class="d-grid">
									<input type="submit" name="submit" value="Update" class="btn btn-success">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
@endsection