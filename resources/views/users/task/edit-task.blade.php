@extends('users.master')
@section('main_content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="well">
                    <h1 class="text-center"> {{Session::get('message')}}</h1>
                    <form name="editTaskForm" action="{{url('/update-task')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Category</label>
                            <div class="col-sm-9">
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Task Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="task_name" class="form-control"
                                       value="{{$taskById->task_name}}">
                                <input type="hidden" name="task_id" class="form-control"
                                       value="{{$taskById->id}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Task Description</label>
                            <div class="col-sm-9">
                                <textarea name="task_description" rows="10" style="resize: none" class="form-control">{{$taskById->task_description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Current Date&Time</label>
                            <div class="col-sm-9">

                                <p class="form-control">{{$taskById->finishing_date}}</p>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Update Date</label>
                            <div class="col-sm-9">
                                <input type="datetime-local" name="finishing_date" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Status</label>
                            <div class="col-sm-9">
                                <select name="status" class="form-control">
                                    @if($taskById->status == 'Complite')
                                        <option value="{{$taskById->status}}">{{$taskById->status}}</option>
                                        <option value="Pending">Pending</option>
                                    @else
                                        <option value="{{$taskById->status}}">{{$taskById->status}}</option>
                                        <option value="Complite">Complite</option>
                                    @endif
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-success btn-block" name="btn">Update Task Info
                                </button>
                            </div>
                        </div>

                    </form>


                </div>
            </div>

        </div>
    </div>

    <script>
        document.forms['editTaskForm'].elements['category_id'].value = '{{$taskById->category_id}}';
        //document.forms['editTaskForm'].elements['status'].value = '{{$taskById->status}}';
    </script>
@endsection