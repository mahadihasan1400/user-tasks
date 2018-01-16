@extends('users.master');
@section('main_content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="well">
                   <h1 class="text-center"> {{Session::get('message_task')}}</h1>
                    <form action="{{url('/new-task')}}" method="POST" class="form-horizontal">
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
                                <input type="text" name="task_name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Task Description</label>
                            <div class="col-sm-9">
                                <textarea name="task_description" rows="10" style="resize: none"
                                          class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Finishing Date</label>
                            <div class="col-sm-9">
                                <input type="datetime-local" name="finishing_date" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-success btn-block" name="btn">Save Task Info
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection