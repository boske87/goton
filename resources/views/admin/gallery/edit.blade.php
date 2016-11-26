@extends('admin.layouts.admin')

@section('content')



    <h1>{{ $template['section_name'] }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url('admin/photos') }}">{{ $template['title'] }}</a></li>
        <li class="active">Edit</li>
    </ol>

    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead">{{ $template['title'] }} - Edit</p>
        </div>
    </div>

    @include('admin.layouts.crud.validation_flash_error')
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">

                    <fieldset>
    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.photos.update', $item->id], 'class' => 'form-horizontal', 'files' => true]) !!}
    <!-- Caption Form Input -->
    <div class="form-group{!! $errors ->has('caption') ? ' has-error' : '' !!}">
        {!! Form::label('caption', 'Caption*', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('caption', $item->caption, ['class' => 'form-control']) !!}
            {!! $errors ->first('caption', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
                        <!-- Image ALT Form Input -->
                        <div class="form-group">
                            {!! Form::label('image_alt', 'Image Alt', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('image_alt', $item->image_alt, ['class' => 'form-control']) !!}
                            </div>
                        </div>
    @include('admin.layouts.modules.file_input', [
                     'label' => 'Image',
                     'inputName' => 'image',
                     'directory' => 'gallery',
                     'img' => $item->image,
                      'imgConfig' => ['h' => 200],
                      'hint'=>'Upload the highest resolution possible for optimal results'
                   ])

    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::hidden('_token',csrf_token()) !!}
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{{ url('admin/photos') }}" class="btn btn-link pull-right">Cancel</a>
        </div>
    </div>
    {!! Form::close() !!}
                    </fieldset>
                </div>
            </div>
        </div></div>
@endsection