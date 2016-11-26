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
            {!! link_to_route('admin.blog.create', 'Add', null, ['class' => 'cms-options-action btn btn-lg btn-primary']) !!}
        </div>

    </div> <!-- =cms-options -->
@stop

@section('index_content')
    <span id="tableName" style="display: none; visibility: hidden;">sample_module</span>
    <div class="table-responsive">
        @if ($items->count())
            <table id="sortable-table" class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>Title {!! admin_sort_links('title') !!}</th>
					<th>Published {!! admin_sort_links('published_at') !!}</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr id="{{ $item->id }}">
                        <td>
                            @if($item->image_file)
                                <a href="{{ route('admin.blog.edit',$item->id) }}"><img src="{{ Image::load('blog/' . $item->image_file, ['h' => 80]) }}" alt=""/></a>
                            @endif
                        </td>
                        <td><a href="{{ route('admin.blog.edit', $item->id) }}">{{ $item->title }}</a></td>



                        <td>{!! date('M d, Y',strtotime($item->published_at)) !!}</td>
                        <td class="cms-column-actions">
                            <div class="btn-group btn-group-xs cms-table-actions">
                                    <a href="{{route('blog.show',$item->id)}}" type="button" target="_blank" class="btn btn-default"><span class="entypo entypo-eye"></span></a>

                                <a href="{{ route('admin.blog.edit', $item->id) }}" type="button" class="btn btn-default"><span class="entypo entypo-pencil"></span></a>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.blog.destroy', $item->id], 'onsubmit' => "return confirm('Are you sure you want to DELETE this item?')"]) !!}
                                <button type="submit" class="btn btn-default"><span class="entypo entypo-cross"></span></button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p class="alert alert-warning">There are no items.</p>
        @endif
    </div><!-- =table-responsive -->

    @include('admin.layouts.crud.pagination')
@stop






