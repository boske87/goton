@extends('admin.layouts.admin')

@section('content')
    @include('admin/category/js_edit')


    <h1>{{ $template['section_name'] }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.category.index') }}">Dashboard</a></li>
        <li><a href="{{ url('admin/category') }}">{{ $template['title'] }}</a></li>
        <li class="active">Edit</li>
    </ol>

    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead">{{ $template['title'] }} - Edit</p>
        </div>
    </div>
    @include('admin.layouts.crud.validation_flash_error')
    <ul id="forms-tabs" class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1">Category</a></li>
        <li><a data-toggle="tab" href="#tab-2">Meta Data</a></li>
    </ul>
    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.category.update', $item->id],'files' => true, 'class' => 'form-horizontal']) !!}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <fieldset>

                        <div class="form-group{!! $errors ->has('name') ? ' has-error' : '' !!}">
                            {!! Form::label('name', 'Name*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('name', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                                <!-- Title Form Input -->
                        <div class="form-group{!! $errors ->has('title') ? ' has-error' : '' !!}">
                            {!! Form::label('title', 'Title*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('title', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        @include('admin.layouts.modules.slug_input',['fieldName'=>'slug'])

                        <!-- Description Body Form Input -->
                        <div class="form-group{!! $errors ->has('intro') ? ' has-error' : '' !!}">
                            {!! Form::label('intro', 'Intro*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('intro', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('intro', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        @if($item->parent_category_id!=0)
                            <div class="form-group{!! $errors ->has('parent_category_id') ? ' has-error' : '' !!}">
                                {!! Form::label('parent_category_id', 'Parent Category', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('parent_category_id', $categories, $item->parent_category_id, ['class' => 'form-control']) !!}
                                    {!! $errors ->first('parent_category_id', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        @endif
                        <div class="form-group{!! $errors ->has('search_placeholder') ? ' has-error' : '' !!}">
                            {!! Form::label('search_placeholder', 'Search Placeholder', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('search_placeholder', $item->search_placeholder, ['class' => 'form-control']) !!}
                                {!! $errors ->first('search_placeholder', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Image ALT Form Input -->
                        <div class="form-group">
                            {!! Form::label('image_alt', 'Image Alt', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('image_alt', $item->image_alt, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <!-- Image Form Input -->
                        @include('admin.layouts.modules.file_input', [
                            'label' => 'Image',
                            'inputName' => 'image_file',
                            'directory' => 'categories',
                            'img' => $item->image_file,
                            'hint' => 'Optimal image dimensions:  1920x1250 px (WxH)'
                         ])
                    </fieldset>
                </div>
                <!-- =tab-1 -->


                <div class="tab-pane fade in" id="tab-2">
                    <fieldset>

                        <!-- Meta Title Form Input -->
                        <div class="form-group{!! $errors ->has('meta_title') ? ' has-error' : '' !!}">
                            {!! Form::label('meta_title', 'Meta Title', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('meta_title', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Meta Description Form Input -->
                        <div class="form-group{!! $errors ->has('meta_desc') ? ' has-error' : '' !!}">
                            {!! Form::label('meta_desc', 'Meta Description', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('meta_desc', null, ['class' => 'form-control', 'rows' => 3]) !!}
                                {!! $errors ->first('meta_desc', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>


                        <!-- Meta Keywords Form Input -->
                        <div class="form-group{!! $errors ->has('meta_keys') ? ' has-error' : '' !!}">
                            {!! Form::label('meta_keys', 'Meta Keywords', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('meta_keys', null, ['class' => 'form-control', 'rows' => 2]) !!}
                                {!! $errors ->first('meta_keys', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>


                    </fieldset>
                </div>

            </div>
            <!-- =tab-content -->
            <div class="row">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    {!! link_to_route('admin.category.index', 'Cancel', null, ['class' => 'btn btn-link pull-right']) !!}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop