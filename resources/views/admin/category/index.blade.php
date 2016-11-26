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
                    <th width="80"></th>
                    <th>Name {!! admin_sort_links('name') !!}</th>
                    <th>Gallery </th>
                    <th>Created {!! admin_sort_links('created_at') !!}</th>
                    <th>Updated {!! admin_sort_links('updated_at') !!}</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr id="{{ $item->id }}">
                        <td>
                            @if($item->image_file)
                                <a href="{{ route('admin.category.edit',$item->id) }}"><img src="{{ Image::load('categories/' . $item->image_file, ['h' => 80, 'w' => 80, 'fit' => 'crop']) }}" alt=""/></a>
                            @endif
                        </td>
                        <td><a href="{{ route('admin.category.edit', $item->id) }}">{{ $item->name }}</a></td>
                        <td>{!! link_to('admin/gallery?category_id=' . $item->id, 'Slider (' . $item->countGalleries() . ')') !!}</td>
                        <td>{{ $item->formattedCreatedDate() }}</td>
                        <td>{{ $item->formattedUpdatedDate() }}</td>
                        <td class="cms-column-actions">
                            <div class="btn-group btn-group-xs cms-table-actions">
                                @if($item->parent_category_id==0)
                                    <a href="{{route('directory',$item->slug)}}" target="_blank" type="button" class="btn btn-default"><span class="entypo entypo-eye"></span></a>
                                @else
                                    <a href="{{route('directory',$item->parent_id($item->parent_category_id)->slug.'/'.$item->slug)}}" type="button" class="btn btn-default"><span class="entypo entypo-eye"></span></a>
                                @endif

                                <a href="{{ route('admin.category.edit', $item->id) }}" type="button" class="btn btn-default"><span class="entypo entypo-pencil"></span></a>

                            </div>
                        </td>


                    </tr>
                    @foreach($item->parent($item->id) as $item_sub)

                        <tr class="subcategory-row">
                            <td class="subcategory-item">
                                @if($item_sub->image_file)
                                    <a href="{{ route('admin.category.edit',$item_sub->id) }}"><img src="{{ Image::load('categories/' . $item_sub->image_file, ['h' => 80, 'w' => 80, 'fit' => 'crop']) }}" alt=""/></a>
                                @endif
                            </td>
                            <td class="subcategory-item"><a href="{{ route('admin.category.edit', $item_sub->id) }}">{{ $item_sub->name }}</a></td>
                            <td>{!! link_to('admin/gallery?category_id=' . $item_sub->id, 'Slider (' . $item_sub->countGalleries() . ')') !!}</td>
                            <td>{{ $item->formattedCreatedDate() }}</td>
                            <td>{{ $item->formattedUpdatedDate() }}</td>
                            <td class="cms-column-actions">
                                <div class="btn-group btn-group-xs cms-table-actions">
                                    @if($item_sub->parent_category_id==0)
                                        <a href="{{route('directory',$item_sub->slug)}}" target="_blank" type="button" class="btn btn-default"><span class="entypo entypo-eye">adasddsa</span></a>
                                    @else
                                        <a href="{{route('directory',$item_sub->parent_id($item_sub->parent_category_id)->slug.'/'.$item_sub->slug)}}"  target="_blank"  type="button" class="btn btn-default"><span class="entypo entypo-eye"></span></a>
                                    @endif

                                    <a href="{{ route('admin.category.edit', $item_sub->id) }}" type="button" class="btn btn-default"><span class="entypo entypo-pencil"></span></a>

                                </div>
                            </td>
                        </tr>

                    @endforeach
                @endforeach
                </tbody>
            </table>
        @else
            <p class="alert alert-warning">There are no items.</p>
        @endif
    </div><!-- =table-responsive -->

    @include('admin.layouts.crud.pagination')
@stop






