<div class="box_banner relative z-10">
    <div class="pt-[100px] flex items-center justify-center translate-y-[80px]">
        <div class="text-center flex flex-col justify-center items-center">
            <h3 class="uppercase italic text-[25px] font-bold">Chào mừng đến với Summoner's Rift</h3>
            <h1 class="uppercase italic text-[50px] font-bold">Học các bước cơ bản</h1>
            <div class="text-center my-[20px]">
                <span>Có rất nhiều thứ cần học hỏi trong LMHT, vì vậy, chúng ta sẽ bắt đầu từ những điều cơ
                    bản.</span><br />
                <span> Khám phá hướng dẫn dưới đây để biết cách chơi chế độ phổ biến nhất.</span>
            </div>
            <div class="w-[200px] h-[60px] p-[5px] border-[1px] border-yellow-700">
                <button class="w-full h-full bg-[rgb(208,168,92)] font-medium uppercase text-sm">Vào luôn</button>
            </div>
        </div>
    </div>
    <div class="relative w-full">
        <div class="relative w-full overflow-hidden">
            <div class="w-[100vw] h-[126vh] first_banner">
                <div
                    class="_layer-banner absolute inset-0 z-1 bg-[url(https://www.leagueoflegends.com/static/htp_hero_bg-de7b1ca9ba55e636edcf1055579be78f.png)] bg-no-repeat bg-cover">
                </div>
                <div
                    class="_layer-banner absolute inset-0 z-2 bg-[url(https://www.leagueoflegends.com/static/htp_hero_06-26c3fefbba4fcb12fce710e22e3b7882.png)] bg-no-repeat bg-cover">
                </div>
                <div
                    class="_layer-banner absolute inset-0 z-3 bg-[url(https://www.leagueoflegends.com/static/htp_hero_05-5b97721ba135753e1b0caaf7841f7d62.png)] bg-no-repeat bg-cover">
                </div>
                <div
                    class="_layer-banner absolute inset-0 z-4 bg-[url(https://www.leagueoflegends.com/static/htp_hero_04-f34f2dfad51c6270c6b8ed564a4fea1f.png)] bg-no-repeat bg-cover">
                </div>
                <div
                    class="_layer-banner absolute inset-0 z-5 bg-[url(https://www.leagueoflegends.com/static/htp_hero_03-4efbd73a9bd58b8a00d51190e9355743.png)] bg-no-repeat bg-cover">
                </div>
                <div
                    class="_layer-banner absolute inset-0 z-6 bg-[url(https://www.leagueoflegends.com/static/htp_hero_02-6f2a99b7a8fd755f1f4262e224cac5e2.png)] bg-no-repeat bg-cover">
                </div>
                <div
                    class="_layer-banner absolute inset-0 z-7 bg-[url(https://www.leagueoflegends.com/static/htp_hero_01-5bd61efce4af9d06030e210d1548dc0c.png)] bg-no-repeat bg-cover">
                </div>
            </div>
        </div>
        <div class="second_banner absolute w-full top-[32%] h-[2000px] bg-[rgb(7,18,26)] opacity-[0]">
            <div class="w-full h-[800px] relative sticky top-[80px] right-0 left-0 bg-[rgb(7,18,26)]">
                <video class="video_banner" width="100%" height="100%" loop autoplay="true" muted="true">
                    <source
                        src="https://www.leagueoflegends.com/static/what-is-league-of-legends-7371486f4c8b54e87c27b26983151db2.webm"
                        type="video/mp4">
                </video>
                <div
                    class="absolute top-0 left-0 right-0 bottom-0 translateY-[-60px] flex flex-col items-center justify-center text-white text-3xl z-10">
                    <div class="text white font-bold text-[60px] uppercase italic">Liên minh huyền thoại là gì?</div>
                    <div class="w-[50%] mt-[40px] text-center">
                        <p class="text-[16px] leading-6">Liên Minh Huyền Thoại là trò chơi phối hợp đồng đội đầy tính
                            chiến thuật,
                            nơi hai đội chơi
                            chọn ra 5 vị tướng mỗi bên để đối đầu với nhau và phá hủy căn cứ của địch. Chọn lựa từ hơn
                            140 vị tướng để tạo nên những pha giao đấu hoành tráng, tiêu diệt kẻ địch và đánh phá trụ
                            nhằm giành lấy chiến thắng vinh quang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const _layers = document.querySelectorAll('._layer-banner')
    const box_banner = document.querySelector('.box_banner')
    const second_banner = document.querySelector('.second_banner')
    const video_banner = document.querySelector('.video_banner')

    let pointX = 0;
    let pointY = 0

   window.addEventListener('scroll', function (e) {
        pointY = parseInt((window.pageYOffset / 35).toFixed(0))

        _layers.forEach((layer, index) => {
             index += 0.4
                if (index > 1.4) {
                        layer.style.transform = `translateY(-${pointY * index}px) scale(${1 + (pointY / 100)})`;
                }
            })
            if (parseInt((box_banner.getBoundingClientRect().bottom).toFixed(0)) < parseInt((window.innerHeight).toFixed(2))) {
                second_banner.classList.add('showSecondBanner')
                second_banner.style.opacity = `1`
            } else {
                second_banner.classList.remove('showSecondBanner')
                second_banner.style.opacity = `0`
            }

            if ((second_banner.getBoundingClientRect().bottom).toFixed(0) < parseInt((window.innerHeight).toFixed(2))) {
                second_banner.style.transition = 'all 1.5s ease'
                second_banner.style.transform = "scale(.8)"
                video_banner.pause()
            } else {
                second_banner.style.transition = 'all .5s ease'
                second_banner.style.transform = "scale(1)"
                video_banner.play()
            }
           
   })

</script>