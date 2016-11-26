@extends('admin/layouts/crud/index')

@section('index_header')
    <h1>{{ $template['section_name'] }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.category.index') }}">Category</a></li>
        @if($category)
            <li><a href="{{ url('admin/gallery?category_id=' . Input::get('category_id') ) }}">{{ $category->name }} Gallery</a></li>
        @else
            <li><a href="{{ url('admin/gallery') }}">Galleries</a></li>
        @endif

        <li class="active">Add</li>
    </ol>


    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead">{{ $category ? $category->name : null }}  - Add image</p>
        </div>
    </div>
    @include('admin.layouts.crud.flash_message')

    <ul id="forms-tabs" class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1">Gallery Item</a></li>

    </ul>

    {!! Form::open(['route' => 'admin.gallery.store', 'files' => true, 'class' => 'form-horizontal']) !!}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">


                <div class="tab-pane fade in active" id="tab-1">
                    <fieldset>
                        {!! Form::hidden('category_id', $category->id) !!}
                                <!-- Image alt Form Input -->
                        <div class="form-group">
                            {!! Form::label('image_alt', 'Image Alt', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('image_alt', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>
                        <!-- Image Form Input -->
                        <div class="form-group{{ $errors->has('image_file') ? ' has-error' : '' }}">
                            {!! Form::label('image_file', 'Image*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::file('image_file') !!}
                                {!! $errors->first('image_file', '<span class="help-block">:message</span>') !!}
                                    <p class="help-block hint">Optimal image dimensions: 2880x1530 px (WxH)</p>
                            </div>
                        </div>

                    </fieldset>
                </div>
                <!-- =tab-1 -->

            </div><!-- =tab-content -->

            <div class="row">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ url('admin/gallery?category_id='.$category->id) }}" class="btn btn-link pull-right">Cancel</a>

                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop