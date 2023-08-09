<div
    class="w-full h-[80px] bg-[#111] flex items-center px-[30px] py-[10px] justify-between sticky top-0 left-0 right-0 z-[100]">
    <div class="flex items-center h-full">
        <div class="">
            @include('components.logo.logo')
        </div>
        <div class="ml-[30px]">
            @include('components.logo.second_logo')
        </div>
        <div class="px-[10px] h-full flex">
            <div class="relative h-full flex flex-col justify-center mx-[10px] nav-main-items mycursor">
                <div
                    class="text-white uppercase font-medium text-sm mycursor hover:bg-[rgba(128,128,128,.3)] py-[5px] px-[10px] rounded-[6px] ">
                    <a href="{{ URL::to('/how-to-play/') }}">Trò chơi</a>
                </div>
                <div class="absolute w-full left-0 right-0 top-[100%] bg-[rgb(0,160,186)] rounded-[4px] line-nav-main">
                </div>
            </div>

            <div class="relative h-full flex flex-col justify-center mx-[10px] nav-main-items mycursor">
                <div
                    class="text-white uppercase font-medium text-sm mycursor hover:bg-[rgba(128,128,128,.3)] py-[5px] px-[10px] rounded-[6px] ">
                    <a href="{{ URL::to('/champions/') }}">Tướng</a>
                </div>
                <div class="absolute w-full left-0 right-0 top-[100%] bg-[rgb(0,160,186)] rounded-[4px] line-nav-main">
                </div>
            </div>

            <div class="relative h-full flex flex-col justify-center mx-[10px] nav-main-items mycursor">
                <div
                    class="flex items-center text-white uppercase font-medium text-sm mycursor hover:bg-[rgba(128,128,128,.3)] py-[5px] px-[10px] rounded-[6px] ">
                    <div>Tin tức</div>
                    <div class="text-white ml-[5px] opacity-[.5]">
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>
                <div
                    class="hidden absolute w-[200px] left-0 top-[100%] border-t-[3px] border-[rgb(0,160,186)] rounded-[4px] drop-nav-main bg-[#292929]">
                    <ul class="list-none text-white p-[10px]">
                        <li>
                            <a class="p-[8px] text-[14px] text-[#ccc] hover:bg-[#9999] hover:text-white rounded-[5px] block"
                                href="{{ URL::to('/posts')}}">TẤT CẢ</a>
                        </li>

                        @foreach ($cateAll as $cate )
                        <li>
                            <a class="p-[8px] text-[14px] text-[#ccc] hover:bg-[#9999] hover:text-white rounded-[5px] block uppercase"
                                href="{{ URL::to('/posts/' . $cate->cate_slug)}}">{{ $cate->cate_name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="relative h-full flex flex-col justify-center mx-[10px] nav-main-items mycursor">
                <div
                    class="text-white uppercase font-medium text-sm mycursor hover:bg-[rgba(128,128,128,.3)] py-[5px] px-[10px] rounded-[6px] ">
                    <a href="{{ URL::to('/update-details/') }}">Chi tiết cập nhật</a>
                </div>
                <div class="absolute w-full left-0 right-0 top-[100%] bg-[rgb(0,160,186)] rounded-[4px] line-nav-main">
                </div>
            </div>

            <div class="relative h-full flex flex-col justify-center mx-[10px] nav-main-items mycursor">
                <div
                    class=" flex items-center text-white uppercase font-medium text-sm mycursor hover:bg-[rgba(128,128,128,.3)] py-[5px] px-[10px] rounded-[6px] ">
                    <a href="{{ URL::to('/esports/') }}">Esports</a>
                    <div class="ml-[7px] opacity-[.5] rotate-[45deg] text-[10px]"><i class="fas fa-arrow-up"></i></div>
                </div>
                <div class="absolute w-full left-0 right-0 top-[100%] bg-[rgb(0,160,186)] rounded-[4px] line-nav-main">
                </div>
            </div>

            <div class="relative h-full flex flex-col justify-center mx-[10px] nav-main-items mycursor">
                <div
                    class=" flex items-center text-white uppercase font-medium text-sm mycursor hover:bg-[rgba(128,128,128,.3)] py-[5px] px-[10px] rounded-[6px] ">
                    <a href="{{ URL::to('/universe/') }}">Vũ trụ</a>
                    <div class="ml-[7px] opacity-[.5] rotate-[45deg] text-[10px]"><i class="fas fa-arrow-up"></i></div>
                </div>
                <div class="absolute w-full left-0 right-0 top-[100%] bg-[rgb(0,160,186)] rounded-[4px] line-nav-main">
                </div>
            </div>

            <div class="relative h-full flex flex-col justify-center mx-[10px] nav-main-items mycursor">
                <div
                    class=" flex items-center text-white uppercase font-medium text-sm mycursor hover:bg-[rgba(128,128,128,.3)] py-[5px] px-[10px] rounded-[6px] ">
                    <a href="{{ URL::to('/support/') }}">Hỗ trợ</a>
                    <div class="ml-[7px] opacity-[.5] rotate-[45deg] text-[10px]"><i class="fas fa-arrow-up"></i></div>
                </div>
                <div class="absolute w-full left-0 right-0 top-[100%] bg-[rgb(0,160,186)] rounded-[4px] line-nav-main">
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-end items-center">
        <div
            class="w-[40px] h-[40px] rounded-full bg-[rgba(128,128,128,.2)] flex items-center justify-center mycursor hover:opacity-[.9] mycursor ml-[10px]">
            <i class="fas fa-search text-white"></i>
        </div>
        <div
            class="w-[40px] h-[40px] rounded-full bg-[rgba(128,128,128,.2)] flex items-center justify-center mycursor hover:opacity-[.9] mycursor ml-[10px]">
            <i class="fas fa-globe text-white"></i>
        </div>


        @if(Auth::check())
        <div
            class="flex bg-[rgba(128,128,128,.2)] text-white px-[20px] py-[5px] rounded-[10px] font-medium uppercase text-sm ml-[15px] mycursor hover:opacity-[.9]">
            <p>Xin chào, {{ Auth::user()->name}}</p>
        </div>
        <a href=" {{URL::to('logout')}} "
            class="block ml-[20px] text-white bg-[rgba(128,128,128,.2)] px-[20px] py-[5px] rounded-[15px]">Đăng
            xuất</a>
        @else
        <div
            class="bg-[rgba(128,128,128,.2)] text-white px-[20px] py-[5px] rounded-[10px] font-medium uppercase text-sm ml-[15px] mycursor hover:opacity-[.9]">
            <a href="{{ URL::to('login') }}">Đăng nhập</a>
        </div>
        @endif
        <div
            class="bg-[rgb(11,196,226)] px-[20px] py-[5px] rounded-[10px] font-medium uppercase text-sm ml-[15px] mycursor hover:opacity-[.9]">
            <a href="">Chơi ngay</a>
        </div>

    </div>
</div>