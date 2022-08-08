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
                                <form class="form" data-parsley-validate>
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
                                                    name="fname-column"
                                                    data-parsley-required="true"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="basicSelect" class="form-label"
                                                >Parent</label
                                                >
                                                <select class="form-select" id="basicSelect">
                                                    <option>IT</option>
                                                    <option>Blade Runner</option>
                                                    <option>Thor Ragnarok</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-check mandatory">
                                                    <input
                                                        type="checkbox"
                                                        id="checkbox5"
                                                        class="form-check-input"
                                                        checked
                                                        data-parsley-required="true"
                                                        data-parsley-error-message="You have to accept our terms and conditions to proceed."
                                                    />
                                                    <label
                                                        for="checkbox5"
                                                        class="form-check-label form-label"
                                                    >I accept these terms and conditions.</label
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                                            name="flexRadioDefault"
                                                            id="flexRadioDefault1"
                                                            data-parsley-required="true"
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
                                                            name="flexRadioDefault"
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop


@section('script')
    <script src="/assets/js/pages/form-element-select.js"></script>
    <script src="/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
@stop


@section('style')
    <link
        rel="stylesheet"
        href="/assets/extensions/choices.js/public/assets/styles/choices.css"
    />
@stop
