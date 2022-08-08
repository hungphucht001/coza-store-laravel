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
                    <a href="{{route('admin.menu.add')}}" class="btn btn-secondary">Add Menu</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Statusp</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->slug}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <span class="badge bg-{{$item->active == 1 ? 'success': 'danger'}}">{{$item->active == 1 ? 'Show': 'Hide'}}</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger">
                                        <i class="bi bi-archive"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary">
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
