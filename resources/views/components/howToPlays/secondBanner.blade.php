<div class="w-full my-[100px]">
    <div class="w-full text-center flex flex-col items-center">
        <h1 class="text-[60px] font-bold uppercase italic">Tăng sức mạnh cho tướng</h1>
        <div class="w-[35%] mt-[40px]">
            <p class="text-[14px]">
                Các vị tướng trở nên mạnh mẽ hơn bằng cách thu thập điểm kinh nghiệm để thăng cấp và kiếm vàng để mua
                những
                trang bị uy lực hơn theo tiến trình của trận đấu. Luôn dẫn đầu trong hai yếu tố này là điều quan trọng
                để áp
                đảo đội địch và phá hủy căn cứ của họ.
            </p>
        </div>
        <div
            class="border-after w-[80%] h-[600px] flex mt-[40px] border-[2px] border-[rgb(193,193,193)] relative py-[10px]">
            <div class="w-[68%] h-full relative oveflow-hidden translate-x-[-10px]">
                <video class="absolute inset-0 thirdVideo transition-custom max-w-none w-full h-[100%] " loop
                    autoplay="true" muted="true">
                    <source
                        src="https://www.leagueoflegends.com/static/experience-720-d5afe06bd7f50d8078d0a7b635c726b2.webm"
                        type="video/webm">
                </video>

                <video class="absolute inset-0 thirdVideo transition-custom max-w-none w-full h-[100%]" loop
                    autoplay="true" muted="true">
                    <source src="https://www.leagueoflegends.com/static/gold-720-6154cdb7e69cba368f79ce3215ba8d65.webm"
                        type="video/webm">
                </video>

                <div class="absolute inset-0 thirdVideo transition-custom max-w-none w-full h-[100%]">
                    <img src="https://www.leagueoflegends.com/static/shopkeeper-b3c23be268a6ca5e2be8888cb145f50c.jpg"
                        alt="anh">
                </div>


            </div>
            <div class="flex-1 relative">
                <div class="flex flex-col justify-center items-center text-left h-full relative">
                    <div class="w-[75%] py-[30px] thirdItem">
                        <h2 class="block p-[5px] uppercase font-bold text-[14px] hover:text-[rgb(11,198,227)]">- Tích
                            lũy kinh nghiệm
                        </h2>
                        <p class="transition-custom text-[13px] block pl-[10px] mt-[10px] overflow-hidden">Khi một tướng
                            thu thập đủ lượng
                            điểm kinh
                            nghiệm nhất
                            định, họ sẽ thăng
                            cấp và có thể mở khóa
                            hoặc cường hóa các kỹ năng cũng như gia tăng chỉ số cơ bản. Thu thập điểm kinh nghiệm bằng
                            cách tiêu diệt/hỗ trợ tiêu diệt lính và tướng địch, cũng như phá hủy các công trình phòng
                            thủ.</p>

                    </div>
                    <hr class="w-[75%] border-[1px] border-[rgb(193,193,193)]" />
                    <div class="w-[75%] py-[30px] thirdItem">
                        <h2 class="block p-[5px] uppercase font-bold text-[14px] hover:text-[rgb(11,198,227)]">+ KIẾM
                            VÀNG</h2>
                        <p class="transition-custom text-[13px] pl-[10px] block mt-[10px] overflow-hidden"
                            style="height: 0px">Vàng là đơn
                            vị tiền tệ
                            trong trận đấu
                            được sử dụng
                            để mua
                            trang bị cho tướng. Thu thập vàng bằng cách tiêu diệt/hỗ trợ tiêu diệt lính và tướng địch,
                            cũng như phá hủy các công trình phòng thủ và sử dụng những trang bị cộng thêm vàng.</p>
                    </div>
                    <hr class="w-[75%] border-[1px] border-[rgb(193,193,193)]" />
                    <div class="w-[75%] py-[30px] thirdItem">
                        <h2 class="block p-[5px] uppercase font-bold text-[14px] hover:text-[rgb(11,198,227)]">+ CỬA
                            HÀNG</h2>
                        <p class="transition-custom text-[13px] pl-[10px] block mt-[10px] overflow-hidden"
                            style="height: 0px">Cửa Hàng là
                            nơi bạn có thể
                            mua bán các
                            trang bị
                            bằng số
                            vàng bạn đã kiếm được. Bạn chỉ có thể vào Cửa Hàng khi đứng tại Bệ Đá Cổ.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    const thirdItems = document.querySelectorAll('.thirdItem')
    const thirdVideos = document.querySelectorAll('.thirdVideo')

     thirdItems.forEach((item, index) => {
        item.children[0].addEventListener('click', () => {
            showThirdVideo(index)
        })
     })


     function showThirdVideo (index) {
        thirdVideos.forEach((video, index) => {
                video.style.opacity = '0'
            })

            thirdVideos[index].style.opacity = '1'

            thirdItems.forEach(oldItem => {
                oldItem.children[1].style.height = 0;
                oldItem.children[1].style.opacity = 0;
            })
            thirdItems[index].children[1].style.height = "80px"
            thirdItems[index].children[1].style.opacity = "1"
     }

     showThirdVideo(0)
  

</script>