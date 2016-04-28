@extends('layouts.app2')

@section('title', 'Home')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Create New User</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="rows">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Horizontal Form</h3>
					</div><!-- /.box-header -->
					<!-- form start -->
					{!! Form::open(array('url' => 'backend/users', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
						<div class="box-body">
							<div class="form-group">
								{!! Form::label('name', 'Name', array('class' => 'col-sm-2 control-label')); !!}
								<div class="col-sm-10">
									{!! Form::text('name', '', array('class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name')); !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('contact', 'Contact', array('class' => 'col-sm-2 control-label')); !!}
								<div class="col-sm-10">
									{!! Form::text('contact', '', array('class' => 'form-control', 'id' => 'contact', 'placeholder' => 'Contact')); !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')); !!}
								<div class="col-sm-10">
									{!! Form::email('email', '', array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email')); !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')); !!}
								<div class="col-sm-10">
									{!! Form::password('password', array('class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password')); !!}
								</div>
							</div>
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