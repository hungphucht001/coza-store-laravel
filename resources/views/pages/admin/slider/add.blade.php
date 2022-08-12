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
                                    <form class="form" data-parsley-validate action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
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
                                                        value="{{old('name')}}"
                                                        data-parsley-required="true"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mandatory">
                                                    <label for="first-name-column" class="form-label"
                                                    >Sort By</label
                                                    >
                                                    <input
                                                        type="text"
                                                        id="first-name-column"
                                                        class="form-control"
                                                        placeholder="First Name"
                                                        name="sort_by"
                                                        value="{{old('sort_by')}}"
                                                        data-parsley-required="true"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group mandatory">
                                                    <label for="url-column" class="form-label"
                                                    >Url</label
                                                    >
                                                    <input
                                                        type="text"
                                                        id="url-column"
                                                        class="form-control"
                                                        placeholder="Content"
                                                        name="url"
                                                        data-parsley-required="true"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group mandatory">
                                                    <label for="first-name-column" class="form-label"
                                                    >Image</label
                                                    >
                                                    <input
                                                        type="file"
                                                        id="first-name-column"
                                                        class="form-control"
                                                        placeholder="Content"
                                                        name="image"
                                                        accept="image/*"
                                                        data-parsley-required="true"
                                                    />
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
                                                                {{old('active') == 1? "checked":""}}
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
                                                                {{old('active')  == 0? "checked":""}}
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
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

