@extends('admin.layouts.admin')


@section('content')


    <h1>{{ $template['section_name'] }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url('admin/home_slide') }}">{{ $template['title'] }}</a></li>
        <li class="active">Edit</li>
    </ol>


    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead">{{ $template['title'] }} - Edit</p>
        </div>
    </div>
    @include('admin.layouts.crud.validation_flash_error')
    @include('admin.home_slide.js_edit')
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">

                    <fieldset>
    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.home_slide.update', $item->id], 'class' => 'form-horizontal', 'files' => true]) !!}

            <!-- Title Form Input -->
    <div class="form-group{!! $errors ->has('title') ? ' has-error' : '' !!}">
        {!! Form::label('title', 'Title*', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('title', $item->title, ['class' => 'form-control']) !!}
            {!! $errors ->first('title', '<span class="help-block">:message</span>') !!}
        </div>
    </div>

    <!-- Description Body Form Input -->
    <div class="form-group{!! $errors ->has('description') ? ' has-error' : '' !!}">
        {!! Form::label('description', 'Description*', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('description', $item->description, ['class' => 'form-control']) !!}
            {!! $errors ->first('description', '<span class="help-block">:message</span>') !!}
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
                     'directory' => 'home_slide',
                      'img' => $item->image,
                      'imgConfig' => ['h' => 200],
                      'hint' => 'Optimal image dimensions: 2880x1530 px (WxH)'
                   ])

    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{{ url('admin/home_slide') }}" class="btn btn-link pull-right">Cancel</a>
        </div>
    </div>
    {!! Form::close() !!}
                    </fieldset>
                </div>
            </div>
        </div></div>
@endsection