@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h4>{{trans('lang.add_category')}}</h4>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
                        @include('admin.posts.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
