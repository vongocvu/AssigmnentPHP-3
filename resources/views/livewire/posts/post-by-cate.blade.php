@push('Head')
<title>Cập Nhật Trò Chơi - Liên Minh Huyền Thoại</title>
@endpush

@extends('layouts.mainLayout')

@section('main')
@include('components.posts.Head-post')
<div class="w-full flex justify-center my-[100px]">
    <div class="w-[70%] grid grid-cols-12 gap-[60px]">
        @foreach ($postByCate as $post)
        @include('components.posts.Card-post',
        [
        'w_and_h' => "w-full",
        'flex' => 'col-span-4 ',
        'border' => false,
        'show_desc' => 'hidden',
        'new' => array(
        'url' => '/posts/' . $post['cate_slug'] . '/' . $post['post_slug'],
        'cate' => $post['cate_name'],
        'title' => $post['title'],
        'desc' => $post['short_content'],
        'image' => $post['post_image'],
        'time' => $post['created_at'],
        )
        ])
        @endforeach
    </div>

</div>
@endsection