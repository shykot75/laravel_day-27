
@extends('master')

@section('title')
    Add Blog Page
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">ADD Blog Form</div>

                        <div class="card-body">
                            <form action="{{route('new-blog')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" name="blog_title" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Author Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="author_name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea name="blog_description" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-primary" value="Create Blogs">
                                    </div>
                                </div>



                            </form>
                            <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


