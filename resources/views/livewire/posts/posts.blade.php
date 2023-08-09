@push("Head")
<title>Tin tức - Liên Minh Huyền Thoại</title>
@endpush


<div class="w-full flex justify-center">
    <div class="w-[80%] flex ">
        <div class="w-[75%] pt-[50px] mb-[50px] mr-[20px]">
            <div class="border-b-[1px] border-[#9999]">

                @foreach ($data_posts as $post)
                @include('components.posts.Card-post',
                [
                'w_and_h' => "w-[400px] h-[230px]",
                'flex' => 'flex items-start mb-[100px]',
                'border' => 'border-image mr-[20px]',
                'show_desc' => true,
                'new' => array(
                'url' => '/posts/' . $post['category'] . '/' . $post['post_slug'],
                'cate' => $post['category'],
                'title' => $post['title'],
                'desc' => $post['short_content'],
                'image' => $post['post_image'],
                'time' => "1213",
                )
                ])
                @endforeach

            </div>
            <div class="flex justify-end">
                <a href="#" class="uppercase text-[12px] mt-3 font-bold opacity-[.6] hover:underline" href="#">Xem tin
                    mới nhất <i class="fas fa-arrow-right ml-[5px] text-[rgb(11,196,226)]"></i></a>
            </div>
        </div>
        <div class="w-[25%] ">
            <div class="w-full  border-l-[1px] border-[#9999] pl-[50px] pt-[50px] ">
                @foreach ($cateAll as $cate)
                <div class="w-full h-[100px] relative overflow-hidden mb-[30px] item-new">
                    <img class="scale-[1.1] transition-custom w-full h-full"
                        src="{{asset('categoryImage' . '/' . $cate->cate_image)}}" alt="">
                    <div
                        class="absolute top-0 left-[10px] transition-custom w-[150px] p-[10px] uppercase fontFamily italic text-white font-bold text-[20px] title_hover">
                        {{$cate->cate_name}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('components.common.trailer')