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
                    <a href="{{route('admin.products.add')}}" class="btn btn-secondary">Add Product</a>
                </div>
                <div class="card-body">
                    @if(count($data) > 0)
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Price Sale</th>
                            <th>Category</th>
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
                                <td>{{number_format($item->price,2, ',', '.').' đ'}}</td>
                                <td>{{number_format($item->price_sale,2, ',', '.').' đ'}}</td>
                                <td>{{$item->menu->name}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>


                                <td>
                                    <span class="badge bg-{{$item->active == 1 ? 'success': 'danger'}}">{{$item->active == 1 ? 'Show': 'Hide'}}</span>
                                </td>
                                <td>
                                    <a href="{{route('admin.products.delete', $item->id)}}" class="btn btn-danger">
                                        <i class="bi bi-archive"></i>
                                    </a>
                                    <a href="{{route('admin.products.edit', $item->id)}}" class="btn btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <p>No Products</p>
                    @endif
                </div>
            </div>
        </section>
    </div>
@stop
