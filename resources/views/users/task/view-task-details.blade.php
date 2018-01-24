@extends('users.master')


@section('main_content')
    <div id="page-wrapper">
        <div class="row">
            <br>
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>Name</th>
                            <td>{{$taskById->name}}</td>
                        </tr>
                        <tr>
                            <th>Task Name</th>
                            <td>{{$taskById->task_name}}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{$taskById->category_name}}</td>
                        </tr>

                        <tr>
                            <th>Task Details</th>
                            <td>{{$taskById->task_description}}</td>
                        </tr>

                        <tr>
                            <th>Finishing Date</th>
                            <td>{{date('g:ia \o\n l jS F Y', strtotime($taskById->finishing_date))}}</td>
                        </tr>

                        <tr>
                            <th>Task Status</th>
                            <td>{{$taskById->status}}</td>
                        </tr>


                    </table>
                </div>

            </div>
        </div>
    </div>
    @endsection