@extends('users.master')
@section('main_content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">{{Session::get('message')}}</h1>

                <div class="well">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php(
                            $i = 0
                            )
                            @foreach($categoryByUser as $category)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$category -> category_name}}</td>
                                    <td>{{$category -> category_description}}</td>
                                    <td>{{$category -> publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{url('/edit-category/'.$category -> id)}}" class="btn btn-info btn-xs" title="Edit">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                        <a onclick="return confirm('Are You sure to delete this...')"
                                           href="{{url('/delete-category/'.$category -> id)}}"
                                           class="btn btn-danger btn-xs" title="Delete">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>

                                        @if($category -> publication_status == 1)

                                            <a href="{{url('/unpublished-category/'.$category -> id)}}"
                                               class="btn btn-success btn-xs" title="Published">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/published-category/'.$category -> id)}}"
                                               class="btn btn-warning btn-xs" title="Unpublished">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
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
    </div>
@endsection