<div class="min-h-[100vh] py-[100px] relative">
    <div
        class="absolute z-[1] inset-0 bg-[url(https://www.leagueoflegends.com/static/hud-2-2d4279d50f4fffe4012eda7c7f31b5fd.jpg)] bg-cover bg-no-repeat">
    </div>
    <div
        class="absolute z-[2] inset-0 bg-[url(https://www.leagueoflegends.com/static/hud-1-5f4fb1c77b2bb810829436c3bcc0426e.png)] bg-cover bg-no-repeat">
    </div>
    <div class="absolute z-[3] w-full text-center flex flex-col items-center">
        <h1 class="text-[60px] font-bold uppercase italic">MỞ KHÓA KỸ NĂNG</h1>
        <div class="w-[35%] mt-[40px]">
            <p class="text-[14px]">
                Mỗi tướng có 5 kỹ năng chính, 2 phép bổ trợ đặc biệt và có thể sở hữu cùng lúc tối đa 7 trang bị. Khám
                phá ra thứ tự kỹ năng, phép bổ trợ và cách lên đồ tối ưu cho tướng của bạn sẽ giúp bạn cũng như cả đội
                giành được chiến thắng.
            </p>
        </div>

        <div class="py-[50px] w-[35%]">
            <div class="relative w-full border-[1px] border-b-[rgb(193,193,193)] flex justify-center mb-8">

                <div class="third_dots w-[100px] h-[40px] relative active_third_box">
                    <p class="uppercase text-[12px]">Kỹ năng</p>
                    <div
                        class="absolute top-full left-[50%] translate-y-[-50%] translate-x-[-50%] w-[10px] h-[10px] rounded-full bg-[#ccc] hover:bg-black z-[10]">
                    </div>
                </div>

                <div class="third_dots w-[100px] h-[40px] relative">
                    <p class="uppercase text-[12px]">Phép bổ trợ</p>
                    <div
                        class="absolute top-full left-[50%] translate-y-[-50%] translate-x-[-50%] w-[10px] h-[10px] rounded-full bg-[#ccc] hover:bg-black z-[10]">
                    </div>
                </div>

                <div class="third_dots w-[100px] h-[40px] relative">
                    <p class="uppercase text-[12px]">Trang bị</p>
                    <div
                        class="absolute top-full left-[50%] translate-y-[-50%] translate-x-[-50%] w-[10px] h-[10px] rounded-full bg-[#ccc] hover:bg-black z-[10]">
                    </div>
                </div>

                <div class="active_third"></div>
            </div>
            <div class="h-[80px]">
                <div class="dot_detail text-[13px]">Đa số các tướng đều sở hữu một bộ kỹ năng độc nhất bao gồm 5 kỹ
                    năng: 1 Nội
                    Tại, 3 Kỹ Năng
                    Cơ Bản và 1 Chiêu Cuối. Những kỹ năng này được gán mặc định cho các phím Q, W, E và R.</div>

                <div style="display: none" class="dot_detail text-[13px]">Phép bổ trợ là những kỹ năng với hiệu ứng độc
                    đáo mà các
                    tướng có
                    thể sử dụng. Chúng được
                    gán mặc định cho phím D và F. Có rất nhiều phép bổ trợ, nhưng các phép được sử dụng phổ biến là Tốc
                    Biến, Dịch Chuyển, Trừng Phạt và Thiêu Đốt.</div>

                <div style="display: none" class="dot_detail text-[13px]">
                    Các trang bị sẽ cường hóa sức mạnh cho tướng, ví dụ như tăng tốc độ di chuyển, cải thiện sát thương
                    và giảm thời gian hồi chiêu. Khác với Phụ Kiện, người chơi cần sử dụng vàng để mua trang bị.
                </div>
            </div>
        </div>


        <div class="w-full flex justify-center">
            <div
                class="w-[50%] aspect-[5/1] bg-[url(https://www.leagueoflegends.com/static/base-a35ef0f11924ebef6aa19b92e122fde3.png)] bg-cover bg-no-repeat relative">
                <div
                    class="absolute inset-0 bg-[url(https://www.leagueoflegends.com/static/champion-4ca54118d635490143bfb7c545b2b213.png)] bg-cover bg-no-repeat">
                </div>
                <div style="opacity: 1"
                    class="hover:opacity-[.7] third_item absolute w-[38%] left-[18.5%] top-[15.5%] aspect-[5/1] z-[10] bg-[url(https://www.leagueoflegends.com/static/abilities-38ba25f77f8a288f904432f1edccfc8c.png)] bg-cover bg-no-repeat">
                </div>

                <div
                    class="hover:opacity-[.7] third_item absolute w-[11.5%] h-[27%] left-[58.5%] top-[15.5%] z-[10] bg-[url(https://www.leagueoflegends.com/static/spells-7f089c1a8f56f6d2af62bd0ad9a60916.png)] bg-cover bg-no-repeat">
                </div>

                <div
                    class="hover:opacity-[.7] third_item absolute w-[22.3%] h-[57.4%] left-[73.7%] top-[15.5%] z-[10] bg-[url(https://www.leagueoflegends.com/static/items-93b72410a63044875fb44bf1818b112a.png)] bg-cover bg-no-repeat">
                </div>

                <div
                    class="absolute w-[100%]  h-full  left-[0] top-[2px] z-[3] bg-[url(https://www.leagueoflegends.com/static/extras-79d1652d353770fdb532cbf663656da9.png)] bg-cover bg-no-repeat">
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    const active_third = document.querySelector('.active_third')
    const third_dots = document.querySelectorAll('.third_dots')
    const dot_details = document.querySelectorAll('.dot_detail')
    const third_items = document.querySelectorAll('.third_item')

     active_third.style.setProperty("--before-left", ((third_dots[0].offsetWidth / 2) + (parseInt(third_dots[0].getBoundingClientRect().left.toFixed(0) - third_dots[0].parentElement.getBoundingClientRect().left.toFixed(0))) + 'px'))

     third_dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            third_function(index)
        })
     })

     third_items.forEach((item, index) => {
        item.addEventListener('click', () => {
            third_function(index)
        })
     })


     function third_function (index) {
        third_dots.forEach(oldDot => {
                oldDot.classList.remove('active_third_box')
            })
            third_dots[index].classList.add('active_third_box')

            dot_details.forEach(item => {
                item.style.display = "none"
            })

            dot_details[index].style.display = "block"

            third_items.forEach(oldItem => {
                oldItem.style.opacity = "0.3"
            })

            third_items[index].style.opacity = "1"

            active_third.style.setProperty("--before-left", ((third_dots[index].offsetWidth / 2) + (parseInt(third_dots[index].getBoundingClientRect().left.toFixed(0) - third_dots[0].parentElement.getBoundingClientRect().left.toFixed(0))) + 'px'))
     }


</script>