@extends('backend.master')

@section('content')
<div class="container" id="app">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Vue.js Dependent Dropdown Tutorial</h3>
                </div>
            </div>
            <div class="card card-info">
                <form id="validate_form" action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="card-body">
                        <create-student></create-student>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Student</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
