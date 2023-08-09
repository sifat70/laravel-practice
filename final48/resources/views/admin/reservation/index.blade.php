@extends('layouts.app')

@section('title', 'reservation')

@section('admin_content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Reservation</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date & Time</th>
                    <th>Person</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                <tbody>
                      @foreach($reservations as $key=>$reservation)
                         <tr>
                         	<td>{{ $key + 1 }}</td>
                         	<td>{{ $reservation->name }}</td>
                         	<td>{{ $reservation->email }}</td>
                         	<td>{{ $reservation->phone }}</td>
                         	<td>{{ $reservation->date }}  {{ $reservation->time }}</td>
                         	<td>{{ $reservation->person }}</td>
                         	<td>
                         		@if($reservation->status == 1)
                         		   <span class="badge badge-success">Confirmed</span>
                         		@endif
                         		@if($reservation->status == 0)
                                    <span class="badge badge-warning">Waiting</span>
                                @endif    
                         	</td>
                         	<td>
                         		@if($reservation->status == 0)
                         		<form id="status-form-{{ $reservation->id }}" action="{{ route('reservation.status', $reservation->id) }}" method="POST">
                         			@csrf
                         		</form>

                         		<button type="button" class="btn btn-info" onclick="if(confirm('Are you veryfy request by phone?')){
                         			event.preventDefault();
                         			document.getElementById('status-form-{{ $reservation->id }}').submit();
                         		}else{
                         			event.preventDefault();
                         		}">Confirm</button>
                         		@endif

                         		{{-- delete process --}}
                         		<form id="" action="" method="POST">
                         			@csrf
                         		</form>
                         		<button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure delete this?')){ event.preventDefault();
                         			document.getElementById('').submit();
                         		}else{
                         			event.preventDefault();
                         		}
                         		">Delete</button>
                         	</td>
                         </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection