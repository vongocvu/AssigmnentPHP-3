<div current-info="0" class="w-[60%] mb-[550px] informaition-play">
    <div class="p-[30px]">
        <h1 class="text-[40px] font-bold italic uppercase">Phá hủy căn cứ</h1>
        <div class="mt-3">
            <p class="text-[13px] leading-6">Nhà Chính là trung tâm căn cứ của cả hai đội. Phá hủy Nhà Chính của
                kẻ địch
                trước để giành chiến
                thắng.</p>
        </div>
    </div>
    <div class="w-full mt-[20px] border-[1px] border-gray-600">
        <div class="w-full p-[30px]">
            <div id="show-number-play-1" class="mb-2 text-[12px] opacity-[.5]">1 / 2</div>
            <div class="w-full flex overflow-hidden mt-3">
                <div id="page-play-1" class="w-full h-full flex">
                    <div class="min-w-full h-full ">
                        <h1 class="uppercase font-bold">Nhà chính của bạn</h1>
                        <p class="text-[12px] leading-5 mt-3">Nhà chính của bản là nơi lính xuất hiện. Phía sau Nhà
                            Chính
                            của bạnlà Bệ Đá Cổ, nơi bạn có thể nhanh chóng hồi máu và hồi năng lượng cũng như mở Cửa
                            Hàng.
                        </p>
                    </div>
                    <div class="min-w-full h-full">
                        <h1 class="uppercase font-bold">Nhà chính của địch</h1>
                        <p class="text-[12px] leading-5 mt-3">Nằm sâu trong căn cứ của đội địch, Nhà Chính của địch cũng
                            giống như của bạn. Phá hủy Nhà Chính của địch sẽ giúp đội của bạn giành chiến thắng.</p>
                    </div>
                </div>
            </div>
            <div class="flex mt-5">
                <button onclick="showImage(0,1)"
                    class="border-[1px] border-[rgb(11,198,227)] py-[8px] px-[15px] text-[rgb(11,198,227)] mr-1 text-[12px] hover:opacity-[.7]">
                    <i class="fas fa-arrow-left"></i> -</button>
                <button onclick="showImage(1,0)"
                    class="border-[1px] border-[rgb(11,198,227)] py-[8px] px-[15px] text-[rgb(11,198,227)] text-[12px] hover:opacity-[.7]">-
                    <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</div>

<script>
    const play_1_images = document.querySelectorAll('.play-1-image')
    const show_page = document.getElementById('show-number-play-1')
    const page = document.getElementById('page-play-1')

   play_1_images[1].style.opacity = 0;

   let last_page = 0;

    function showImage (show, hide) {

        if (last_page ===  1 && show === 1) {
            show = 0
            hide = 1
        }

        if (last_page ===  0 && show === 0) {
            show = 1
            hide = 0
        }
        
        last_page = show;
        show_page.innerText = `${show + 1} / 2`
        page.style.transition = "transform .5s ease" 
        page.style.transform = `translateX(-${show * page.children[0].offsetWidth}px)`
        play_1_images[show].style.opacity = 1;
        play_1_images[hide].style.opacity = 0;
    }

</script>