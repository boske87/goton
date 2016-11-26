@extends('admin/layouts/crud/index')

@section('index_header')
    <h1>{{ $template['section_name'] }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="active">{{ $template['title'] }}</li>
    </ol>

    <div class="cms-options">
        <div class="cms-options-title-action">
            @include('admin.layouts.crud.flash_message')
            <h3 class="cms-options-title">{{ $template['title'] }}</h3>
            {!! link_to_route('admin.users.create', 'Add', null, ['class' => 'cms-options-action btn btn-lg btn-primary']) !!}

        </div>
        <div class="cms-options-filter">
            {!! Form::open(['method' => 'get', 'class' => 'cms-options-filter-form form-inline']) !!}
                @foreach($filters as $name => $filter)
                    <div class="form-group">
                        {!! Form::select($filter['fieldName'], ['' => 'Filter by ' . $name] + $filter['fieldValues'], Input::get($filter['fieldName']), ['class' => 'form-control']) !!}
                    </div>
                @endforeach
                <div class="form-group">
                    {!! Form::input('search', 'q', Input::get('q'), ['placeholder' => 'Enter keyword...', 'class' => 'form-control']) !!}
                </div>

                {!! Form::hidden('sortBy', Input::get('sortBy')) !!}
                {!! Form::hidden('order', Input::get('order')) !!}

                <button class="btn btn-default" type="submit">Search</button>
                <a class="btn btn-link" href="{{ route(Route::currentRouteName()) }}">Reset</a>
            {!! Form::close() !!}
        </div>


    </div> <!-- =cms-options -->
@stop

@section('index_content')
    <span id="tableName" style="display: none; visibility: hidden;">users</span>
    <div class="table-responsive">
        @if ($items->count())
        <table id="sortable-table" class="table">
            <thead>
            <tr>
                <th></th>
                <th>Username {!! admin_sort_links('username') !!}</th>
                <th>Full Name {!! admin_sort_links('first_name') !!}</th>
                <th>User Type {!! admin_sort_links('user_type') !!}</th>
                <th colspan="2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
            <tr id="{{ $item->id }}" class="{{ $item->deleted_at ? 'danger' : ''}}">
                <td>@if($item->avatar)[Avatar Placeholder]@endif</td>
                <td><a href="{{ route('admin.users.show', $item->id) }}">{{ $item->username }}</a></td>
                <td>{{  $item->full_name }}</td>
                <td>{{  userTypeName($item->user_type )}}</td>
                <td>
                @if(userTypeName($item->user_type) != 'admin')
                    @if($item->deleted_at)
                        {!! Form::open(['method' => 'PATCH', 'route' => ['admin.users.update', $item->id], 'onsubmit' => "return confirm('Are you sure you want to ACTIVATE this user?')"]) !!}
                            {!! Form::hidden('restore', true) !!}
                            <button type="submit" class="btn btn-sm btn-success cms-table-actions"><span class="entypo entypo-user"></span></span> Activate User</button>
                    @else
                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $item->id], 'onsubmit' => "return confirm('Are you sure you want to SUSPEND this user?')"]) !!}
                            <button type="submit" class="btn btn-sm btn-warning cms-table-actions"><span class="entypo entypo-user"></span> Suspend User</button>
                        @endif
                    {!! Form::close() !!}
                @endif


                </td>

                <td class="cms-column-actions">
                    <div class="btn-group btn-group-xs cms-table-actions">
                        <a href="{{ route('admin.users.show', $item->id)}}" type="button" class="btn btn-default"><span class="entypo entypo-eye"></span></a>
                        <a href="{{ route('admin.users.edit', $item->id) }}" type="button" class="btn btn-default"><span class="entypo entypo-pencil"></span></a>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $item->id], 'onsubmit' => "return confirm('Are you sure you want to DELETE PERMANENTLY this user?')"]) !!}
                            {!! Form::hidden('force_delete', true) !!}
                            <button type="submit" class="btn btn-default"><span class="entypo entypo-cross"></span></button>
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
            <p class="alert alert-warning">There are no users.</p>
        @endif
    </div><!-- =table-responsive -->

    @include('admin.layouts.crud.pagination')
@stop






