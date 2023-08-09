@push('Head')
<title>Tướng - Liên Minh Huyền Thoại</title>
@endpush

<div class="">
    <div class="w-full py-[50px] flex flex-col items-center relative">
        <h1 class="uppercase text-[25px] italic font-bold text-center fontFamily relative z-[10]">Chọn ngay một</h1>
        <h1 class="uppercase text-[70px] italic font-bold text-center fontFamily leading-[73px] relative z-[10]">Tướng
        </h1>
        <div class="w-[27%] text-center mt-[10px] relative z-[10]">
            <p class="text-[14px]">Với hơn 140 tướng, bạn chắc chắn sẽ tìm thấy một lựa chọn phù hợp với lối chơi của
                mình. Chọn một tướng tủ hoặc sử dụng điêu luyện tất cả.</p>
        </div>
    </div>
    @livewire('champions.search-champions')
    <div class="w-full flexCenter">
        <div class="w-[70%] grid grid-cols-10 gap-[20px] mb-[50px]">
            @if (isset($data_champions))
            @foreach ($data_champions as $champion)
            <div class="col-span-2 h-[350px]">
                @include('components.champions.card-champion' , ['champion' => $champion])
            </div>
            @endforeach
            @endif
        </div>
    </div>
    @include('components.common.trailer')
</div>