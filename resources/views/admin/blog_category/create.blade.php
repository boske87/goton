@extends('admin.layouts.admin')

@section('content')

    @include('admin/category/js_edit')

    <h1>{{ $template['section_name'] }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url('admin/blog') }}">{{ $template['title'] }}</a></li>
        <li class="active">Add</li>
    </ol>


    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead">{{ $template['title'] }} - Add</p>
        </div>
    </div>
    @include('admin.layouts.crud.validation_flash_error')


    {!! Form::open(['route' => 'admin.blog_category.store', 'files' => true, 'class' => 'form-horizontal']) !!}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <fieldset>

                        <div class="form-group{!! $errors ->has('name') ? ' has-error' : '' !!}">
                            {!! Form::label('name', 'Category Name*', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('name', '<span class="help-block">:message</span>') !!}
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
                    <a href="{{ url('admin/blog_category') }}" class="btn btn-link pull-right">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@stop