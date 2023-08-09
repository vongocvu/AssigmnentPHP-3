<div current-info="2" class="w-[60%] mb-[550px] informaition-play">
    <div class="p-[30px]">
        <h1 class="text-[40px] font-bold italic uppercase">KHÁI QUÁT VỀ KHU VỰC RỪNG</h1>
        <div class="mt-3">
            <p class="text-[13px] leading-6">Giữa các đường là khu vực rừng, nơi sinh sống của nhiều loài quái rừng và
                cây cỏ. Hai loài quái vật quan trọng nhất là Baron Nashor và Rồng. Tiêu diệt những quái vật này sẽ ban
                cho đội bạn các bùa lợi độc nhất và thậm chí còn có thể xoay chuyển cục diện trận đấu.</p>
        </div>
    </div>
    <div class="w-full mt-[20px] border-[1px] border-gray-600">
        <div class="w-full p-[30px]">
            <div id="show-number-play-3" class="mb-2 text-[12px] opacity-[.5]">1 / 2</div>
            <div class="w-full flex overflow-hidden mt-3">
                <div id="page-play-3" class="w-full h-full flex">
                    <div class="min-w-full h-full ">
                        <h1 class="uppercase font-bold">BARON NASHOR</h1>
                        <p class="text-[12px] leading-5 mt-3">Baron Nashor là quái vật hùng mạnh nhất trong khu vực
                            rừng. Đội tiêu diệt Baron sẽ được cộng thêm sức mạnh công kích, sức mạnh phép thuật, cường
                            hóa biến về và gia tăng đáng kể sức mạnh của lính xung quanh.
                        </p>
                    </div>
                    <div class="min-w-full h-full">
                        <h1 class="uppercase font-bold">RỒNG</h1>
                        <p class="text-[12px] leading-5 mt-3">
                            Rồng là những quái vật hùng mạnh với khả năng ban bùa lợi độc nhất tùy theo loại Rồng Nguyên
                            Tố mà đội bạn tiêu diệt. Có 5 Rồng Nguyên Tố và 1 Rồng Ngàn Tuổi.</p>
                    </div>
                </div>
            </div>
            <div class="flex mt-5">
                <button onclick="showImage3(0,1)"
                    class="border-[1px] border-[rgb(11,198,227)] py-[8px] px-[15px] text-[rgb(11,198,227)] mr-1 text-[12px] hover:opacity-[.7]">
                    <i class="fas fa-arrow-left"></i> -</button>
                <button onclick="showImage3(1,0)"
                    class="border-[1px] border-[rgb(11,198,227)] py-[8px] px-[15px] text-[rgb(11,198,227)] text-[12px] hover:opacity-[.7]">-
                    <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</div>

<script>
    const play_3_images = document.querySelectorAll('.play-3-image')
    const show_page3 = document.getElementById('show-number-play-3')
    const page_play_3 = document.getElementById('page-play-3')

   play_3_images[1].style.opacity = 0;

   let last_page3 = 0;

    function showImage3 (show, hide) {

        if (last_page3 ===  1 && show === 1) {
            show = 0
            hide = 1
        }

        if (last_page3 ===  0 && show === 0) {
            show = 1
            hide = 0
        }
        
        last_page3 = show;
        show_page3.innerText = `${show + 1} / 2`
        page_play_3.style.transition = "transform .5s ease" 
        page_play_3.style.transform = `translateX(-${show * page_play_3.children[0].offsetWidth}px)`
        play_3_images[show].style.opacity = 1;
        play_3_images[hide].style.opacity = 0;
    }

</script>