@extends('layouts.app2')

@section('title', 'Home')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>View all Users</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="rows">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<!-- <h3 class="box-title">Bordered Table</h3> -->
					</div><!-- /.box-header -->
					<div class="box-body">
						<table class="table table-bordered">
							<tbody><tr>
								<th style="width: 10px">#</th>
								<th>Name</th>
								<th>Contact</th>
								<th>Email</th>
								<th>Join Date</th>
								<th>Actions</th>
							</tr>
							@foreach($users as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->contact }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->created_at }}</td>
									<td>
										<a href="{{ url('backend/users/' . $user->id . '/edit') }}" class="btn btn-warning">Edit</a>
										{!! Form::open(array('url' => ['backend/users', $user->id], 'method' => 'DELETE', 'class' => 'form-inline')) !!}
											{!! Form::submit('Delete', array('class' => 'btn btn-danger')); !!}
										{!! Form::close() !!}
									</td>
								</tr>
							@endforeach
						</tbody></table>
					</div><!-- /.box-body -->
					<!-- <div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">«</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">»</a></li>
						</ul>
					</div> -->
				</div>				
			</div>
		</div>

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection