@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver entrada
                </div>

                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $post->name }}</p>
                    <p><strong>Slug</strong> {{ $post->slug }}</p>
                    <p><strong>Descripción</strong> {{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
