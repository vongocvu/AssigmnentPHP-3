<div class="w-full h-[100vh] overflow-hidden bg-[rgb(0,9,19)] relative">
    <div class="w-[110vw] h-[80%] relative">
        <img class="w-full h-full object-cover ml-[-10px] mt-[-10px]" style="filter: blur(5px)"
            src="{{$Champion['banner']}}" alt="">
        <div class="absolute inset-0 w-full h-full bg-[rgb(0,9,19)] opacity-[.7]"></div>
    </div>
    <div class="absolute z-[3] top-0 left-[50%] w-[65%] h-[80%] translate-x-[-50%] pt-[30px]">
        <img class="w-full h-full object-cover" src="{{ $Champion['banner']}}" alt="">
    </div>

    <div
        class="absolute z-[6] left-[50%] bottom-[8%] w-[60%] h-[30%] border-[1px] border-[#444] translate-x-[-50%] flex flex-col">
        <div class="absolute top-0 left-[50%] text-white translate-x-[-50%] translate-y-[-100%]">
            <h3 class="text-center uppercase italic font-bold text-[23px] leading-[40px]">{{ $Champion['nickname']}}
            </h3>
            <h1 class="text-center uppercase italic font-bold text-[60px] leading-[50px]">{{ $Champion['name']}}</h1>
        </div>
        <div class="flex-1 h-full py-[40px] flex">
            <div class="flex-1 h-full px-[40px] flex items-center justify-around">
                <div class="">
                    <div class="flexCenter h-[30px] hover:bg-[#c7c7c799] transition-custom">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" data-testid="overview:roleicon"
                            class="style__StyledSpecsIcon-sc-8gkpub-17-c dnNsJq fill-[rgb(208,168,92)]">
                            <path
                                d="M67.84 56.35v5.5c8.62-8.62 14.37 0 14.37 0C112.14 40.78 90.35 2 90.35 2s-.72 17.24-15.08 27.77v16.52c-.24 4.79-3.84 7.9-7.43 10.06M17.79 62.09s4.07-6.46 10.78-2.63L20.91 48.2l6.7-16c-17.24-10.54-18-29.93-18-29.93S-12.14 41 17.79 62.09M26.89 83.89l5.51-18.68-.24-.48L19.23 77.9A17.78 17.78 0 017.5 83.17H3l-1 2.39 12 11.5zM92.27 83.89a16.24 16.24 0 01-11.74-5.27L68.8 66.88l3.83 17.72L85.8 98l12-11.49-1-2.4zM55.87 42.7c0 .24-.24.48-.24.71h.72c5.75.48 7.66 2.64 9.1 7.67a9.35 9.35 0 002.39-1.92c1-1 1.68-1.67 1.68-2.63V28.09a2 2 0 00-1.68-1.92l-31.37-5.74H36a2.39 2.39 0 00-2.39 2.39v6.71l24.9 3.35z">
                            </path>
                            <path
                                d="M60.18 54c-1.2-5.27-1.44-4.55-5.75-4.79L40.78 48v-3.87h5.51A4.09 4.09 0 0050.36 41l1-3.35L32.4 35l-5 12.22 11.74 17-5.54 18.47L49.88 98l16.53-15.07s-6.23-28.5-6.23-29M49.88 2.23l-4.79 10.29 4.79 3.83 4.79-3.83zM62.1 9.41l1.43 6h6l2.87-11zM30.25 15.4h6l.24-.72 1.2-5.27-10.3-5z">
                            </path>
                        </svg>
                    </div>
                    <div class=" text-white mt-[20px] text-center">
                        <h3 class="uppercase font-medium text-[10px]">Vai trò</h3>
                        <h1 class="uppercase font-medium text-[11px] text-[rgb(208,168,92)]">{{ $Champion['position']}}
                        </h1>
                    </div>
                </div>
                <div class="">
                    <div class="flexCenter h-[30px] hover:bg-[#c7c7c799] transition-custom">
                        <div class="w-[15px] h-[10px] mr-[2px] bg-blue-400 skew-x-[-45deg]"></div>
                        <div class="w-[15px] h-[10px] mr-[2px] bg-blue-400 opacity-[.4] skew-x-[-45deg]"></div>
                        <div class="w-[15px] h-[10px] mr-[2px] bg-blue-400 opacity-[.4] skew-x-[-45deg]"></div>
                    </div>
                    <div class=" text-white mt-[20px] text-center">
                        <h3 class="uppercase font-medium text-[10px]">Độ khó</h3>
                        <h1 class="uppercase font-medium text-[11px] text-[rgb(208,168,92)]">{{ $Champion['level']}}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="h-[100%] w-[1px] bg-[#444]"></div>
            <div class="flex-1 h-full px-[40px] flexCenter">
                <p class="text-white text-[14px]">{{ $Champion['description']}}</p>
            </div>
        </div>
        <div class="w-full h-[40px] border-t-[1px] border-[#444] flexCenter text-white">
            <h3 class="uppercase font-medium text-[10px] px-[20px]">Thông thạo tướng</h3>
            <h3 class="uppercase font-medium text-[10px] px-[20px]">OP.GG</h3>
            <h3 class="uppercase font-medium text-[10px] px-[20px]">U.GG</h3>
            <h3 class="uppercase font-medium text-[10px] px-[20px]">LEAGUEOFGRAPHS.COM</h3>

        </div>
    </div>
    <div style="background: linear-gradient(transparent, rgb(0, 9, 19) 50%);"
        class="absolute z-[5] bottom-0 left-0 w-full h-[50%]"></div>
</div>