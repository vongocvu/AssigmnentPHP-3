<div current-info="3" class="w-[60%] informaition-play">
    <div class="p-[30px]">
        <h1 class="text-[40px] font-bold italic uppercase">CHỌN ĐƯỜNG BẠN MUỐN</h1>
        <div class="mt-3">
            <p class="text-[13px] leading-6">Có 5 vị trí tạo nên đội hình được đề xuất cho trò chơi. Mỗi đường phù hợp
                với một số tướng và vị trí nhất định—hãy thử tất cả hoặc chọn một đường bạn cảm thấy thích hợp nhất..
            </p>
        </div>
    </div>
    <div class="w-full mt-[20px] border-[1px] border-gray-600">
        <div class="w-full p-[30px]">
            <div id="show-number-play-4" class="mb-2 text-[12px] opacity-[.5]">1 / 5</div>
            <div class="w-full flex overflow-hidden mt-3">
                <div id="page-play-4" class="w-full h-full flex transition-custom">
                    <div class="min-w-full h-full px-1">
                        <h1 class="uppercase font-bold">ĐƯỜNG TRÊN</h1>
                        <p class="text-[12px] leading-5 mt-3">Các vị tướng đường trên là những đấu sĩ đơn độc ngoan
                            cường của cả đội. Nhiệm vụ của họ là bảo vệ đường của mình và tập trung xử lý các thành viên
                            nguy hiểm nhất của đội địch.
                        </p>
                    </div>
                    <div class="min-w-full h-full px-1">
                        <h1 class="uppercase font-bold">RỪNG</h1>
                        <p class="text-[12px] leading-5 mt-3">
                            Các vị tướng đi rừng rất đam mê săn mồi. Rình rập giữa các đường một cách lén lút và khéo
                            léo, họ để mắt tới những con quái rừng quan trọng nhất và nhảy ra đoạt mạng khi kẻ địch mất
                            cảnh giác.</p>
                    </div>
                    <div class="min-w-full h-full px-1">
                        <h1 class="uppercase font-bold">ĐƯỜNG GIỮA</h1>
                        <p class="text-[12px] leading-5 mt-3">
                            Các vị tướng đường giữa là những nhân tố "chẳng ngán ai" với khả năng dồn sát thương—cho dù
                            là trong chiến đấu đơn lẻ hay giao tranh tổng. Đối với họ, giao tranh là một vũ điệu nguy
                            hiểm, nơi họ luôn tìm kiếm sơ hở của kẻ địch để tiễn chúng lên bảng đếm số.</p>
                    </div>
                    <div class="min-w-full h-full px-1">
                        <h1 class="uppercase font-bold">ĐƯỜNG DƯỚI</h1>
                        <p class="text-[12px] leading-5 mt-3">
                            Các vị tướng đường dưới giống như những khẩu pháo thủy tinh vậy. Vì rất mong manh, dễ vỡ nên
                            họ cần được bảo vệ trong giai đoạn đầu trận trước khi có thể tích lũy đủ vàng và kinh nghiệm
                            để đưa cả đội tới chiến thắng.</p>
                    </div>
                    <div class="min-w-full h-full px-1">
                        <h1 class="uppercase font-bold">HỖ TRỢ</h1>
                        <p class="text-[12px] leading-5 mt-3">
                            Các vị tướng hỗ trợ là hộ vệ của cả đội. Họ giúp giữ cho đồng đội sống sót và tập trung vào
                            trợ giúp kiến tạo các pha hạ gục, bảo vệ đồng đội ở đường dưới cho tới khi họ trở nên mạnh
                            mẽ.</p>
                    </div>
                </div>
            </div>
            <div class="flex mt-5">
                <button onclick="showImage4_down()"
                    class="border-[1px] border-[rgb(11,198,227)] py-[8px] px-[15px] text-[rgb(11,198,227)] mr-1 text-[12px] hover:opacity-[.7]">
                    <i class="fas fa-arrow-left"></i> -</button>
                <button onclick="showImage4_up()"
                    class="border-[1px] border-[rgb(11,198,227)] py-[8px] px-[15px] text-[rgb(11,198,227)] text-[12px] hover:opacity-[.7]">-
                    <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</div>

<script>
    const show_page4 = document.getElementById('show-number-play-4')
    const page_play_4 = document.getElementById('page-play-4')
    const play_4_image_small = document.querySelector('.play-4-image-small')
    const play_4_image_large = document.querySelector('.play-4-image-large')
    const lands_line = document.querySelectorAll('.land-line')

    let last_page4 = 0;
    var currentPage = 0;

    function showImage4 (dataPX) {
        lands_line.forEach(land => {
            land.style.opacity = 0
        })
        lands_line[dataPX].style.opacity = 1

        for(let i = 0; i < play_4_image_small.children.length; i++) {
            play_4_image_small.children[i].style.opacity = 1
        }
        play_4_image_small.children[dataPX].style.opacity = 0

        
        for(let i = 0; i < play_4_image_large.children.length; i++) {
            play_4_image_large.children[i].style.opacity = 0
        }
        play_4_image_large.children[dataPX].style.opacity = 1

        page_play_4.style.transform = `translateX(-${page_play_4.children[0].offsetWidth * dataPX}px)`
        showPage(dataPX)
    }

   
    function showImage4_up () {
        currentPage++
            if (currentPage > page_play_4.children.length - 1) {
                currentPage = 0
            } 
            showImage4 (currentPage)
    }

    function showImage4_down () {
        currentPage--
            if (currentPage < 0) {
                currentPage = page_play_4.children.length - 1
            } 
            showImage4 (currentPage)
    }

    function showPage (dataPX) {
        show_page4.innerText = `${dataPX + 1} / ${page_play_4.children.length}`
    }

</script>