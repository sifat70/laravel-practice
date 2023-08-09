@extends('layouts.app')
@section('admin_content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Create</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Category Create</li>
				</ol>
			</div>
		</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Create New</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form action="{{ route('category.store') }}" method="POST">
							@csrf
							<div class="card-body">
								<div class="form-group">
									<label for="name">Category Name</label>
									<input type="text" name="name" class="form-control" id="name" placeholder="Input Category Name">
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-success">Create</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
					
				</div>
				<!--/.col (left) -->
				<!-- right column -->
				
			</div>
			<!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
		@endsection