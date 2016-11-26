@extends('admin.layouts.admin')

@section('content')

	<h1>{{ $template['section_name'] }}</h1>

	<ol class="breadcrumb">
		<li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
		<li><a href="{{ url('admin/news') }}">{{ $template['title'] }}</a></li>
		<li class="active">{{ $item->title }}</li>
	</ol>

	@if (Session::has('flash_message'))
		<div class="alert alert-{{ Session::has('flash_type') ? Session::get('flash_type') : 'warning' }} alert-dismissable fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<p>{{ Session::get('flash_message') }}</p>
		</div>
	@endif

	<div class="form-horizontal">

		<div class="cms-options">
			<div class="cms-options-title-action">
				<p class="cms-options-title lead">{{ $template['title'] }} - Detail</p>
				<a class="cms-options-action btn btn-info btn-sm" href="{{ route('admin.news.index') }}">Go Back</a>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">

				<div class="tab-content">

					<div id="tab-1" class="tab-pane fade in active">
						<fieldset>

							<div class="form-group">
								<label class="col-sm-2 control-label">Title</label>
								<div class="col-sm-10"><p class="form-control-static">{{ $item->title }}</p></div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Text</label>
								<div class="col-sm-10"><p class="form-control-static">{{ strip_tags($item->text) }}</p></div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Published at</label>
								<div class="col-sm-10"><p class="form-control-static">{{ $item->published_at->toFormattedDateString() }}</p></div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Updated at</label>
								<div class="col-sm-10">
									<p class="form-control-static">
										@if($item->created_at == $item->updated_at)
											Not Yet
										@else
											{{ $item->updated_at->toFormattedDateString() }}
										@endif
									</p>
								</div>
							</div>

						</fieldset>

					</div>

					<div class="row">
						<div class="fnc-button-holder col-sm-offset-2 col-sm-10">
							<a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-primary fnc-save">EDIT</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

@stop