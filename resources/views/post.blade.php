@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ Storage::url('public/blogs/') . $post->image }}" class="rounded" style="width: 100%">
                        <div class="card-text w-25 text-secondary" style="overflow: hidden;
                                    text-overflow: ellipsis; white-space: nowrap;">{!! $post->content !!}</div>
                    </div>
                    <div class="card-header">{{ $post->title }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
