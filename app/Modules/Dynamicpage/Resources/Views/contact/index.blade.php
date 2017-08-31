@extends('layouts.backend.master')

@section('title')
    Subject
@endsection

@section('content')

    <div class="uk-overflow-container uk-margin-bottom">
        <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
            <thead>
            <tr>
                <th data-priority="critical"></th>
                <th data-priority="critical">Address</th>
                <th data-priority="6">class</th>
                <th data-priority="1">Description</th>
                <th data-priority="1">created by</th>
                <th data-priority="2">updated by</th>
                <th data-priority="3">created at</th>
                <th data-priority="4">updated at</th>
                <th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>
            </tr>
            </thead>

            <tbody>
            @foreach($subject as $value)
                <tr>
                    <td></td>
                    <td>{!! $value->title !!}</td>
                    <td>{!! $value->classe['name'] !!}</td>
                    <td>{!! $value->description !!}</td>
                    <td>{!! $value->created_by !!}</td>
                    <td>{!! $value->updated_by!!}</td>
                    <td>{!! $value->created_at !!}</td>
                    <td>{!! $value->updated_at !!}</td>

                    <td class="uk-text-center">

                        <a href="{{ route('subject_edit', $value->id)}}" data-uk-tooltip title="edit Item" class="batch-edit"><i class="md-icon material-icons uk-margin-right">&#xE254;</i></a>
                        <a href="{{ route('subject_delete', $value->id)}}" data-uk-tooltip title="delete Item" class="batch-delete"><i class="md-icon material-icons">&#xE872;</i></a>

                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
        <div class="md-fab-wrapper">
            <a class="md-fab md-fab-accent" href="{{ route('subject_create')}}">
                <i class="material-icons">&#xE145;</i>
            </a>
        </div>
    </div>



@endsection