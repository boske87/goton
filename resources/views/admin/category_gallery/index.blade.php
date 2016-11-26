@extends('admin/layouts/crud/index')

@section('index_header')
    <h1>{{ $template['section_name'] }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.category.index') }}">Category</a></li>
        <li class="active">{{$category->name}} {{ $template['title'] }}</li>
    </ol>
    <div class="cms-options">
        <div class="cms-options-title-action">
            @include('admin.layouts.crud.flash_message')
            <h3 class="cms-options-title">{{ $template['title'] }}</h3>
            @if(isset($category))
                {!! link_to('admin/gallery/create?category_id=' . $category->id, 'Add', ['class' => 'cms-options-action btn btn-lg btn-primary']) !!}
            @endif
        </div>
        <div class="cms-options-filter">


            {!! admin_reorder_link() !!}
        </div>
    </div> <!-- =cms-options -->
@stop

@section('index_content')
    <span id="tableName" style="display: none; visibility: hidden;">galleries</span>
    <div class="table-responsive">
        @if ($items->count())
            <table id="sortable-table" class="table">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Created {!! admin_sort_links('created_at') !!}</th>
                    <th>Updated {!! admin_sort_links('updated_at') !!}</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr id="{{ $item->id }}">
                        <td>
                            @if ($item->image_file)
                                <a href="{{ url('uploads/admin_gallery/' . $item->category_id . '/gallery/' . $item->image_file) }}"><img src="{{ Image::load('admin_gallery/' . $item->category_id . '/gallery/' . $item->image_file, ['w' => 100,'max'=>40])}}" alt=""/></a>
                            @endif
                        </td>
                        <td>{{ $item->formattedCreatedDate() }}</td>
                        <td>{{ $item->formattedUpdatedDate() }}</td>
                        <td class="cms-column-actions">
                            <div class="btn-group btn-group-xs cms-table-actions">
                               <a href="{{ route('admin.gallery.edit', $item->id) }}" type="button" class="btn btn-default"><span
                                            class="entypo entypo-pencil"></span></a>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.gallery.destroy', $item->id], 'onsubmit' => "return confirm('Are you sure you want to delete this item?')"]) !!}
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

@stop






