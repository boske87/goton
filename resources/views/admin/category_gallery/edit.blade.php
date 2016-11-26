@extends('admin/layouts/crud/index')

@section('index_header')
    <h1>{{ $template['section_name'] }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.category.index') }}">Category</a></li>
        <li><a href="{{ url('admin/category?category_id=' . $item->category_id  ) }}">{{ $category->name }} Gallery</a></li>
        <li class="active">Edit</li>
    </ol>


    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead">{{ $item->title }} Gallery - Edit</p>
        </div>
    </div>
    @include('admin.layouts.crud.validation_flash_error')

    <ul id="forms-tabs" class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1">Gallery Item</a></li>
    </ul>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.gallery.update', $item->id], 'files' => true, 'class' => 'form-horizontal']) !!}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <fieldset>


                        <!-- Image alt Form Input -->
                        <div class="form-group">
                            {!! Form::label('image_alt', 'Image Alt', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('image_alt', $item->image_alt, ['class' => 'form-control']) !!}

                            </div>
                        </div>
                        <!-- Image Form Input -->
                        <div class="form-group{{ $errors->has('image_file') ? ' has-error' : '' }}">
                            {!! Form::label('image_file', 'Image*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::file('image_file') !!}
                                {!! $errors->first('image_file', '<span class="help-block">:message</span>') !!}
                                    <p class="help-block hint">Optimal image dimensions: 2880x1530 px (WxH)</p>
                                @if ($item->image_file)
                                    <p class="help-block">
                                        <a href="{{ url('uploads/admin_gallery/' . $item->category_id . '/gallery/' . $item->image_file) }}">
                                            <img src="{{ Image::load('admin_gallery/' . $item->category_id . '/gallery/' . $item->image_file, ['w' => 400])}}" alt=""/></a>

                                    </p>
                                @endif
                            </div>
                        </div>

                    </fieldset>
                </div>
                <!-- =tab-1 -->
            </div>
            <!-- =tab-content -->
            <div class="row">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    {!! link_to_route('admin.gallery.index', 'Cancel', 'category_id='.$item->category_id, ['class' => 'btn btn-link pull-right']) !!}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop