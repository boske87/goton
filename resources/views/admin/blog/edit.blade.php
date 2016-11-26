@extends('admin.layouts.admin')

@section('content')

    @include('admin/blog/js_edit')

    <h1>{{ $template['section_name'] }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url('admin/blog') }}">{{ $template['title'] }}</a></li>
        <li class="active">Edit</li>
    </ol>


    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead">{{ $template['title'] }} - Edit</p>
        </div>
    </div>
    @include('admin.layouts.crud.validation_flash_error')
    <ul id="forms-tabs" class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1">Blog</a></li>
        <li><a data-toggle="tab" href="#tab-2">Meta Data</a></li>
    </ul>


    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.blog.update', $item->id],'files' => true, 'class' => 'form-horizontal']) !!}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <fieldset>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            {!! Form::label('Category', 'Category*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                @foreach($blog_categories as $key=>$category)
                                    <div class="checkbox inline">
                                        <label>
                                            <input class="fnc-cat-checkbox" {{in_array($key, $category_blog) ? 'checked' : ''}} name="category[]"  value="{{ $key }}" type="checkbox" >{{ $category }}
                                        </label>
                                    </div>
                                @endforeach
                                {!! $errors ->first('category', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('title') ? ' has-error' : '' !!}">
                            {!! Form::label('title', 'Title*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title', $item->title, ['class' => 'form-control']) !!}
                                {!! $errors ->first('title', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>


                        <!-- Description Body Form Input -->
                        <div class="form-group{!! $errors ->has('text') ? ' has-error' : '' !!}">
                            {!! Form::label('text', 'Text*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('text', $item->text, ['class' => 'form-control']) !!}
                                {!! $errors ->first('text', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('published_at') ? ' has-error' : '' !!}">
                            {!! Form::label('published_at', 'Publish Date*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-2">
                                {!! Form::text('published_at',$item->published_at->format('m/d/Y') , ['class' => 'form-control datepicker', 'id' => 'datepicker']) !!}
                                {!! $errors ->first('published_at', '<span class="help-block">:message</span>') !!}
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
                          'label' => 'Featured Image',
                          'inputName' => 'image_file',
                          'directory' => 'blog',
                          'img' => $item->image_file,
                          'hint' => 'Optimal image dimensions: 1430 px width'
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
                                {!! Form::text('meta_title', $item->meta_title, ['class' => 'form-control']) !!}
                                {!! $errors ->first('meta_title', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Meta Description Form Input -->
                        <div class="form-group{!! $errors ->has('meta_desc') ? ' has-error' : '' !!}">
                            {!! Form::label('meta_desc', 'Meta Description', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('meta_desc', $item->meta_desc, ['class' => 'form-control', 'rows' => 3]) !!}
                                {!! $errors ->first('meta_desc', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>


                        <!-- Meta Keywords Form Input -->
                        <div class="form-group{!! $errors ->has('meta_keys') ? ' has-error' : '' !!}">
                            {!! Form::label('meta_keys', 'Meta Keywords', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('meta_keys', $item->meta_keys, ['class' => 'form-control', 'rows' => 2]) !!}
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
                    <a href="{{ url('admin/blog') }}" class="btn btn-link pull-right">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}


@stop