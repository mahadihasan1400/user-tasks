@extends('users.master');
@section('main_content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="well">
                    <h1 class="text-center">{{Session::get('message')}}</h1>
                    <form action="{{url('new-category')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-sm-3 control-label">category name</label>
                            <div class="col-sm-9">
                                <input type="text" name="category_name" class="form-control"
                                       placeholder="Category Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"> Category Description</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" name="category_description" rows="10" style="resize: none">

                            </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <select name="publication_status" class="form-control">
                                    <option value="1"> Published</option>
                                    <option value="0"> Unpublished</option>
                                </select>

                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Save Category Info
                                </button>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection