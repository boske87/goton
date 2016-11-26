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
            {!! link_to_route('admin.home_slide.create', 'Add', null, ['class' => 'cms-options-action btn btn-lg btn-primary']) !!}
        </div>
        <div class="cms-options-filter">


            {!! admin_reorder_link() !!}
        </div>

    </div> <!-- =cms-options -->
@stop

@section('index_content')
    <span id="tableName" style="display: none; visibility: hidden;">home_slides</span>
    <div class="table-responsive">
        @if($items->count()>0)

            <table id="sortable-table" class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>Title {!! admin_sort_links('title') !!}</th>
                    <th>Created {!! admin_sort_links('created_at') !!}</th>
                    <th>Updated {!! admin_sort_links('updated_at') !!}</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr id="{{ $item->id }}">
                        <td>
                            <img src="{{ Image::load('home_slide/' . $item->image, ['h' => 60]) }}" alt="">
                        </td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->formattedCreatedDate()}}</td>
                        <td>{{$item->formattedUpdatedDate()}}</td>
                        <td class="cms-column-actions">
                            <div class="btn-group btn-group-xs cms-table-actions">
                                <a href="{{ route('admin.home_slide.edit', $item->id) }}" type="button" class="btn btn-default"><span class="entypo entypo-pencil"></span></a>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.home_slide.destroy', $item->id], 'onsubmit' => "return confirm('Are you sure you want to DELETE this item?')"]) !!}
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

    </div>
    @include('admin.layouts.crud.pagination')
@endsection