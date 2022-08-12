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
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multiple Column</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                @if($isExist != 1)
                                    <form class="form" data-parsley-validate action="{{route('admin.products.update', $data->id)}}" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mandatory">
                                                <label for="first-name-column" class="form-label"
                                                >Name</label
                                                >
                                                <input
                                                    type="text"
                                                    id="first-name-column"
                                                    class="form-control"
                                                    placeholder="First Name"
                                                    name="name"
                                                    value="{{$data->name}}"
                                                    data-parsley-required="true"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="basicSelect" class="form-label"
                                                >Category</label
                                                >
                                                <select name="menu_id" class="form-select" id="basicSelect">
                                                    @foreach($menus as $menu)
                                                        <option  value="{{$menu->id}}"  {{$menu->id == $data->menu->id ? 'selected' : ""}}>{{$menu->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label for="price-column" class="form-label"
                                                >Price</label>
                                                <input
                                                    type="number"
                                                    id="price-column"
                                                    class="form-control"
                                                    placeholder="First Name"
                                                    name="price"
                                                    value="{{$data->price}}"
                                                    data-parsley-required="true"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-3">
                                            <div class="form-group">
                                                <label for="price-sale-column" class="form-label"
                                                >Price Sale</label>
                                                <input
                                                    type="number"
                                                    id="price-sale-column"
                                                    class="form-control"
                                                    placeholder="First Name"
                                                    name="price_sale"
                                                    value="{{$data->price_sale}}"
                                                    data-parsley-required="true"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label for="first-name-column" class="form-label"
                                                >Description</label
                                                >
                                                <input
                                                    type="text"
                                                    id="first-name-column"
                                                    class="form-control"
                                                    placeholder="Description"
                                                    name="description"
                                                    value="{{$data->description}}"
                                                    data-parsley-required="true"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label for="first-name-column" class="form-label"
                                                >Content</label
                                                >
                                                <input
                                                    type="text"
                                                    id="first-name-column"
                                                    class="form-control"
                                                    placeholder="Content"
                                                    name="content"
                                                    value="{{$data->content}}"
                                                    data-parsley-required="true"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="form-group mandatory">
                                                <label for="first-name-column" class="form-label"
                                                >Add Images</label
                                                >
                                                <input
                                                    type="file"
                                                    id="first-name-column"
                                                    class="form-control"
                                                    placeholder="Content"
                                                    name="images[]"
                                                    multiple
                                                    accept="image/*"
                                                    data-parsley-required="true"
                                                />
                                            </div>
                                            <div class="row">
                                                @foreach($data->images as $image)
                                                    <div class="col-2 " id="{{$image->id}}">
                                                        <img onclick="removeImage({{$image->id}})" class="w-100" src="{{'/storage/'.$image->thumb}}" />
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="form-group mandatory">
                                                <fieldset>
                                                    <label class="form-label">
                                                        Status
                                                    </label>
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            name="active"
                                                            value="1"
                                                            {{$data->active == 1? "checked":""}}
                                                            id="flexRadioDefault1"
                                                        />
                                                        <label
                                                            class="form-check-label form-label"
                                                            for="flexRadioDefault1"
                                                        >
                                                            Show
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            name="active"
                                                            value="0"
                                                            {{$data->active  == 0? "checked":""}}
                                                            id="flexRadioDefault2"
                                                        />
                                                        <label
                                                            class="form-check-label form-label"
                                                            for="flexRadioDefault2"
                                                        >
                                                            Hide
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button
                                                type="submit"
                                                class="btn btn-primary me-1 mb-1"
                                            >
                                                Submit
                                            </button>
                                            <button
                                                type="reset"
                                                class="btn btn-light-secondary me-1 mb-1"
                                            >
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                        <input type="hidden" name="_method" value="PUT">
                                    @csrf
                                </form>
                                @else
                                    I don't have any records!
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')
    <script>
        const removeImage = (id) =>{
            const token = document.querySelector('input[name="_token"]').value;
            fetch(`http://localhost:8000/admin/images/delete/${id}`, {
                method: 'delete',
                headers: {
                    "X-CSRF-Token": token
                },
            })
                .then((response) =>{
                    const status = response.status;
                    if(status != 200)
                        alert('Khong the xoa')
                    else
                        return response.json()
                })
                .then((data) => {
                    if(data){
                        let ids = document.getElementById(id);
                        ids.remove()
                    }
                });
        }
    </script>

@stop

