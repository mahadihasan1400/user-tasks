@extends('users.master')

@section('main_content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <h1 style="margin-top: 150px" class="text-center"> Hello {{Auth::user()->name}}</h1>
    </div>
@endsection