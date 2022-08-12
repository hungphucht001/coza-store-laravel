@extends('layouts.admin')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{$title_heading}}</h3>
                    <p class="text-subtitle text-muted">
                        {{$description}}
                    </p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <p class="mb-0">Simple Datatable</p>
                    <a href="{{route('admin.slider.add')}}" class="btn btn-secondary">Add Slider</a>
                </div>
                {{$data}}
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Sort By</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <img width="70" src="{{'/storage/'.$item->thumb}}"/>
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->sort_by}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <span class="badge bg-{{$item->active == 1 ? 'success': 'danger'}}">{{$item->active == 1 ? 'Show': 'Hide'}}</span>
                                </td>
                                <td>
                                    <a href="{{route('admin.slider.delete', $item->id)}}" class="btn btn-danger">
                                        <i class="bi bi-archive"></i>
                                    </a>
                                    <a href="{{route('admin.slider.edit', $item->id)}}" class="btn btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@stop
