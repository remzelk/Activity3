@extends('layouts.mainlayout')
@section('title', 'Create')
@section('content')
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Create Student</h3>
                        <form action="/Home/" method="POST">
                        @csrf
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name">
                            </div>
                            <div class="col-md-12">
                                <p>Birthday:<br>
                                <input class="form-control" type="date" name="birthday" id="birthday" placeholder="Birthday"></p>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" value="add" class="btn btn-primary">Add Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection