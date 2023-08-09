@push('Head')
<title>Teemo Ngoài Vũ Trụ... Gần Như Là Vậy - Liên Minh Huyền Thoại</title>
@endpush

@extends('layouts.mainLayout')

@section('main')
<div class="w-full h-[55vh] mb-[25vh] bg-black relative">
    <div class="w-full h-full overflow-hidden relative">
        <img class="w-full h-full object-cover blur-[10px]"
            src="{{ asset('postImage') . '/' . $postDetail->post_image}}" alt="">
        <div class="absolute inset-0 w-full h-full bg-[black] opacity-[.5]"></div>
    </div>
    <div class="absolute w-[60%] h-[800px] top-[50px] left-[50%] translate-x-[-50%]">
        <div class="w-full h-full relative">
            <div class="w-full h-[75%] overflow-hidden">
                <img class="w-full h-full object-cover" src="{{ asset('postImage') .'/'. $postDetail->post_image}}"
                    alt="">
            </div>
            <div class="w-full h-[25%] pb-[40px] flexCenter">
                <div class="w-[80%] text-center">
                    <h1 class="uppercase text-[40px] italic font-bold">{{ $postDetail->title }}
                    </h1>
                    <p>{{ $postDetail->short_content }}</p>
                </div>
            </div>
            <div
                class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] inset-0 w-[97%] h-[103%] border-[1px] border-[#afafaf]">
                <div class="absolute bottom-0 left-0 w-full h-[50px] border-t-[1px] border-[#afafaf] flex">
                    <div class="w-[15%] h-full border-r-[1px] border-[#afafaf] flexCenter">
                        <p class="uppercase text-[12px] font-medium">{{ $postDetail->created_at }}</p>
                    </div>
                    <div class="flex-1 h-full flexCenter">
                        <div class="w-[80%] h-full flex items-center uppercase text-[12px] ">
                            <a href="" class="block text-[rgb(208,168,92)] font-bold hover:underline">{{
                                $postDetail->cate_name }}</a>
                            <div class="mx-[10px] w-[1px] h-[40%] bg-[#afafaf]"></div>
                            <span>Tác giả</span>
                            <div class="ml-[11px] font-medium opacity-[.6]">CASHMIIR</div>
                        </div>
                    </div>
                    <div class="w-[20%] h-full border-l-[1px] border-[#afafaf] flexCenter">
                        <div class="flex justify-center items-center py-[20px]">
                            <div class="flex items-center justify-center p-[5px] rounded-full mx-[5px]">
                                <i class="fab fa-facebook text-[rgb(208,168,92)]"></i>
                            </div>
                            <div class="flex items-center justify-center p-[5px] rounded-full mx-[5px]">
                                <i class="fab fa-instagram text-[rgb(208,168,92)]"></i>
                            </div>
                            <div class="flex items-center justify-center p-[5px] rounded-full mx-[5px]">
                                <i class="fab fa-youtube text-[rgb(208,168,92)]"></i>
                            </div>
                            <div class="flex items-center justify-center p-[5px] rounded-full mx-[5px]">
                                <i class="fab fa-discord text-[rgb(208,168,92)]"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full flex justify-center">
    <div class="w-[60%] pt-[100px]">
        {!! $postDetail->content !!}
    </div>
</div>
<div class="w-[100vw] flex items-center flex-col">
    <h1 class="uppercase font-bold fontFamily text-[50px]">Bình luận</h1>
    <hr class="w-[60%] border-[1px] border-[#ccc]" />
    <div class="w-[60%] mt-[50px] mb-[100px]" wire:poll.1000ms>
        @livewire('comments.comment', ['post_id' => $postDetail->id])
        <div class="mt-[30px]">
            @livewire('comments.input-comment', [
            'post_id' => $postDetail->id,
            'comment_parent' => 0,
            'level' => 1
            ])
        </div>
    </div>
</div>

@endsection