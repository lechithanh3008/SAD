@extends('admin.layouts.master')

@section('title')
	<a>Danh Mục</a>
@endsection
@section('title2')
	<a>Mail Box</a>
@endsection

@section('content')
<div class="container">
	<div class="col-md-5">
		<h4 class="page-header">Laravel Queues </h4> 
		@foreach ($errors->all() as $error)
			<p class="alert alert-danger">{{ $error }}</p>
		@endforeach
		@if (session('status'))
			<div class="alert alert-success">
			{{ session('status')}}
			</div>
		@endif
		<form class="form-vertical" role="form" method="post" action="mail/posts">
		{{csrf_field()}}
			<div class="form-group">
				<input type="text" name="title" class="form-control" placeholder="Title">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="5" name="body" class="form-control" placeholder="Content"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info">Submit Post</button>
			</div>
		</form>
	</div>
</div>


@endsection