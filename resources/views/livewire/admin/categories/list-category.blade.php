@push('HeadAdmin')
<title>List Categories - Liên Minh Huyền Thoại</title>
@endpush

<div class="w-full p-[40px] grid grid-cols-12 gap-[30px]">
    @foreach ($cateAll as $cate)
    <div class="col-span-3 h-[150px]">
        <div class="w-full h-[150px] relative overflow-hidden mb-[30px] item-new cursor-pointer">
            <img class="scale-[1.1] transition-custom w-full h-full"
                src="{{asset('categoryImage' . '/' . $cate->cate_image)}}" alt="">
            <div
                class="absolute top-0 left-[10px] transition-custom w-[150px] p-[10px] uppercase fontFamily italic text-white font-bold text-[20px] title_hover">
                {{$cate->cate_name}}
            </div>
        </div>
    </div>
    @endforeach
</div>