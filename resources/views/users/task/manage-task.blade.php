@extends('users.master')
@section('main_content')
    <div id="page-wrapper">
        <div class="row">
            <br>

            <h1 class="text-success text-center">{{Session::get('message')}}</h1>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>Sl</th>
                            <th>Task Name</th>
                            <th>Category Name</th>
                            <th>Task Status</th>
                            <th>Finishing Date</th>
                            <th>Action</th>

                        </tr>

                        @php(
                        $i = 0
                        )
                        @foreach($tasks as $task)
                            <tr>
                                <td width="1%">{{++$i}}</td>
                                <td width="10%">{{$task->task_name}}</td>
                                <td width="10%">{{$task->category_name}}</td>
                                <td width="10%">{{$task->status}}
                                </td>
                                <td width="10%">{{date('g:ia \o\n l jS F Y', strtotime($task->finishing_date)) }}</td>
                                <td width="10%">
                                    <a href="{{url('/edit-task/'.$task->id)}}" class="btn btn-info btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{url('/delete-task/'.$task->id)}}" class="btn btn-danger btn-xs"
                                       onclick="return confirm('Are you sure to delete this!!')" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>

                                    <a href="{{url('/view-task-deatils/'.$task->id)}}" class="btn btn-primary btn-xs" title="View Task details">
                                        <span class="glyphicon glyphicon-zoom-in"></span>

                                    </a>

                                    @if($task -> status == 'Pending')
                                        <a href="{{url('/task-complited/'.$task->id)}}" class="btn btn-warning btn-xs" title="Pending">
                                            <span class="glyphicon glyphicon-arrow-down"></span>

                                        </a>
                                    @else
                                        <a href="" class="btn btn-success btn-xs" title="Complited">
                                            <span class="glyphicon glyphicon-check"></span>
                                        </a>
                                    @endif

                                </td>


                            </tr>
                        @endforeach
                    </table>

                </div>

            </div>

        </div>
    </div>


@endsection