@extends('layouts.app2')

@section('title', 'Home')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			@if(isset($user))
				Update {{$user->name}}'s Account
			@else
				Create New User
			@endif
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="rows">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title"></h3>
					</div><!-- /.box-header -->
					<!-- form start -->
					@if(isset($updateable) && $updateable === true)
						{!! Form::model($user, array('url' => ['backend/users', $user->id], 'method' => 'PATCH', 'class' => 'form-horizontal')) !!}
					@else
						{!! Form::open(array('url' => 'backend/users', 'method' => 'POST', 'class' => 'form-horizontal')) !!}

					@endif
						<div class="box-body">
							<div class="form-group">
								{!! Form::label('name', 'Name', array('class' => 'col-sm-2 control-label')); !!}
								<div class="col-sm-10">
									{!! Form::text('name', null, array('class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name', )); !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('contact', 'Contact', array('class' => 'col-sm-2 control-label')); !!}
								<div class="col-sm-10">
									{!! Form::text('contact', null, array('class' => 'form-control', 'id' => 'contact', 'placeholder' => 'Contact')); !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')); !!}
								<div class="col-sm-10">
									{!! Form::email('email', null, array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email')); !!}
								</div>
							</div>
							@if(!isset($user))
								<div class="form-group">
									{!! Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')); !!}
									<div class="col-sm-10">
										{!! Form::password('password', array('class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password')); !!}
									</div>
								</div>
							@endif
						</div>
						<div class="box-footer">
							{!! Form::submit('Store', array('class' => 'btn btn-info pull-right')); !!}
						</div>
					{!! Form::close() !!}
				</div>				
			</div>
		</div>

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection