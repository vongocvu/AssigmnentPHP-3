<div current-info="1" class="w-[60%] mb-[550px] informaition-play">
    <div class="p-[30px]">
        <h1 class="text-[40px] font-bold italic uppercase">Dọn đường</h1>
        <div class="mt-3">
            <p class="text-[13px] leading-6">Đội của bạn cần dọn được ít nhất một đường để có thể tiến tới Nhà Chính của
                địch. Trên đường sẽ có các chốt chặn phòng thủ gọi là trụ và nhà lính. Mỗi đường sẽ có 3 trụ và 1 nhà
                lính, mỗi Nhà Chính được bảo vệ bởi 2 trụ.</p>
        </div>
    </div>
    <div class="w-full mt-[20px] border-[1px] border-gray-600">
        <div class="w-full p-[30px]">
            <div id="show-number-play-2" class="mb-2 text-[12px] opacity-[.5]">1 / 2</div>
            <div class="w-full flex overflow-hidden mt-3">
                <div id="page-play-2" class="w-full h-full flex">
                    <div class="min-w-full h-full ">
                        <h1 class="uppercase font-bold">TRỤ</h1>
                        <p class="text-[12px] leading-5 mt-3">Trụ gây sát thương lên lính và tướng địch, đồng thời cung
                            cấp tầm nhìn giới hạn trong Sương Mù cho đồng minh. Hãy cho lính đi vào trước khi tấn công
                            các công trình này để tránh nhận sát thương và xông lên chiến đấu.
                        </p>
                    </div>
                    <div class="min-w-full h-full">
                        <h1 class="uppercase font-bold">NHÀ LÍNH</h1>
                        <p class="text-[12px] leading-5 mt-3">
                            Mỗi Nhà Lính đều được bảo vệ bởi 1 Trụ. Khi bị phá hủy, Lính Siêu Cấp sẽ xuất hiện trên
                            đường đó trong vòng vài phút. Sau đó, Nhà Lính sẽ được khôi phục và Lính Siêu Cấp sẽ ngừng
                            xuất hiện.</p>
                    </div>
                </div>
            </div>
            <div class="flex mt-5">
                <button onclick="showImage2(0,1)"
                    class="border-[1px] border-[rgb(11,198,227)] py-[8px] px-[15px] text-[rgb(11,198,227)] mr-1 text-[12px] hover:opacity-[.7]">
                    <i class="fas fa-arrow-left"></i> -</button>
                <button onclick="showImage2(1,0)"
                    class="border-[1px] border-[rgb(11,198,227)] py-[8px] px-[15px] text-[rgb(11,198,227)] text-[12px] hover:opacity-[.7]">-
                    <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</div>

<script>
    const play_2_images = document.querySelectorAll('.play-2-image')
    const show_page2 = document.getElementById('show-number-play-2')
    const page_play_2 = document.getElementById('page-play-2')

   play_2_images[1].style.opacity = 0;

   let last_page2 = 0;

    function showImage2 (show, hide) {

        if (last_page2 ===  1 && show === 1) {
            show = 0
            hide = 1
        }

        if (last_page2 ===  0 && show === 0) {
            show = 1
            hide = 0
        }
        
        last_page2 = show;
        show_page2.innerText = `${show + 1} / 2`
        page_play_2.style.transition = "transform .5s ease" 
        page_play_2.style.transform = `translateX(-${show * page_play_2.children[0].offsetWidth}px)`
        play_2_images[show].style.opacity = 1;
        play_2_images[hide].style.opacity = 0;
    }

</script>