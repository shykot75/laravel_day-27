
@extends('master')

@section('title')
    Add Student Page
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">ADD Student Form</div>

                        <div class="card-body">
                            <form action="{{route('new-student')}}" method="POST">
                                    @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" name="mobile" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-primary" value="Create Students">
                                    </div>
                                </div>



                            </form>
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


