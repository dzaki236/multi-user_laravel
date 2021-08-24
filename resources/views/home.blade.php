@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($post as $item)
                <div class="col-12 col-md-4">
                    <a href="{{ route('detail-post',$item->id) }}">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ Storage::url('public/blogs/') . $item->image }}" class="rounded"
                                    style="width: 150px">
                                <div class="card-text w-25 text-secondary" style="overflow: hidden;
                                    text-overflow: ellipsis; white-space: nowrap;">{!! $item->content !!}</div>
                            </div>
                            <div class="card-header">{{ $item->title }}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
