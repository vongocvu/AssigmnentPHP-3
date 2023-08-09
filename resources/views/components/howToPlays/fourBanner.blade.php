<div class="h-[110vh] bg-[rgb(3,6,8)] flex flex-col items-center justify-center">
    <div class="text-center text-white mb-[30px] text-[25px] uppercase italic font-bold">Chơi ngay</div>
    <div class="w-[82%] h-[70%] border-[1px] border-[#555] relative flex flex-col items-center">
        <div class="absolute bg-[rgb(3,6,8)] translate-x-[-50%] px-[20px] translate-y-[-50%] left-[50%] top-0 ">
            <div class="text-center text-white text-[50px] uppercase italic font-bold leading-3">Nhận phần
                thưởng</div>
        </div>
        <div class="flex justify-center mt-[50px]">
            <div onClick="active_Gift(0)"
                class="cursor-custom btn_show_gift text-white py-2 flex px-5 border-[2px] border-[rgb(208,168,92)]  mr-2 text-[12px] font-medium uppercase hover:opacity-[.8]">
                <p>Phần thưởng đăng nhập</p>
            </div>
            <div onClick="active_Gift(1)"
                class="cursor-custom btn_show_gift text-white py-2 flex px-5 border-[2px] border-[rgb(208,168,92)] ml-2 text-[12px] font-medium uppercase hover:opacity-[.8]">
                <p>Phần thưởng lên cấp</p>
            </div>
        </div>
        <div class="flex-1 w-[80%] relative">
            <div id="images_gift_login" class="w-full h-full relative"></div>
            <div id="images_gift_level" class="w-full h-full relative"></div>
            <div id="days_gift_login"
                class="absolute flex justify-center z-[10] bottom-0 left-[50%] translate-x-[-50%]">
            </div>
            <div id="days_gift_level"
                class="absolute flex justify-center z-[10] bottom-0 left-[50%] translate-x-[-50%]">
            </div>
            <div class="active_four"></div>
        </div>
    </div>
    <div id="texts_gift_login" class="w-[25%] h-[100px]"></div>
    <div id="texts_gift_level" class="w-[25%] h-[100px]"></div>
</div>

<script>
    const btn_show_gifts = document.querySelectorAll('.btn_show_gift')
    const images_login = document.getElementById('images_gift_login')
    const images_level = document.getElementById('images_gift_level')
    const days_login = document.getElementById('days_gift_login')
    const days_level = document.getElementById('days_gift_level')
    const texts_login = document.getElementById('texts_gift_login')
    const texts_level = document.getElementById('texts_gift_level')
    const currentGift = 0
    

    

    const text_gift_logins = [
        {texts: ["Lựa chọn tướng Xạ Thủ của bạn: Tristana, Caitlyn hoặc Ezreal", "Tăng DKN 3 Ngày + Rương Hextech"]},
        {texts: ["Lựa chọn tướng Đấu Sĩ của bạn: Illaoi, Riven hoặc Garen", "1 Chìa Khóa Hextech (dưới dạng 3 mảnh chìa khóa để chế tạo)"]},
        {texts: ["Lựa chọn tướng Pháp Sư của bạn: Brand, Morgana hoặc Ziggs", "1 Rương Hextech"]},
        {texts: ["Lựa chọn tướng Hỗ Trợ của bạn: Sona, Thresh hoặc Nami", " 1 Chìa Khóa Hextech"]},
        {texts: ["Lựa chọn tướng Sát Thủ của bạn: Ekko, Fizz hoặc Talon", "1 Rương Hextech"]},
        {texts: ["6.300 Tinh Hoa Lam"]},
        {texts: ["Mảnh Trang Phục Miss Fortune Waterloo", " 500 Tinh Hoa Cam"]},
    ]

    const text_gift_levels = [
        {texts: ["Mở khóa phép bổ trợ Tốc Hành và Hồi Máu"]},
        {texts: ["Mở khóa Phòng Tập", "Tướng Hướng Dẫn (tùy chọn) và Biểu Tượng", "450 Tinh Hoa Lam"]},
        {texts: ["Mở khóa chế độ chơi Summoner’s Rift Thường (Chọn Ẩn)", "Mở khóa chế độ chơi ARAM", "450 Tinh Hoa Lam"]},
        {texts: ["Mở khóa phép bổ trợ Lá Chắn và Kiệt Sức", "450 Tinh Hoa Lam"]},
        {texts: ["Mở khóa chế độ chơi Đấu với Máy", "450 Tinh Hoa Lam"]},
        {texts: ["Mở khóa phép bổ trợ Minh Mẫn, Đánh Dấu và Lướt", "900 Tinh Hoa Lam"]},
        {texts: ["Mở khóa phép bổ trợ Tốc Biến và Dịch Chuyển", " 900 Tinh Hoa Cam"]},
        {texts: ["Mở khóa 1 Mẫu Mắt Vĩnh Viễn (Ngẫu nhiên)", " 900 Tinh Hoa Cam"]},
        {texts: ["Mở khóa phép bổ trợ Thanh Tẩy, Thiêu Đốt và Trừng Phạt", " 900 Tinh Hoa Cam"]},
        {texts: ["Mở khóa 1 Trang Ngọc","Mở khóa chế độ chơi Summoner’s Rift Thường (Cấm & Chọn)", "900 Tinh Hoa Cam"]},
    ]

    const images_login_datas = [
        "https://www.leagueoflegends.com/static/day-1-3851405e6d5a11687a1bd0de330364ad.png",
        "https://www.leagueoflegends.com/static/day-2-d805617d43ba9c317dd460d85193b016.png",
        "https://www.leagueoflegends.com/static/day-3-7d8e189cd2390e8548173b8d33c2fbdf.png",
        "https://www.leagueoflegends.com/static/day-4-f575278dbbdb214e7048cebc0a535557.png",
        "https://www.leagueoflegends.com/static/day-5-23a6c52bb8cd211287a7c0d76bb71bba.png",
        "https://www.leagueoflegends.com/static/day-6-426b51a69778c2569feced27129a0f1d.png",
        "https://www.leagueoflegends.com/static/day-7-763fc249bc27822d3849802176ab651d.png",
    ]

    const images_level_datas = [
        "https://www.leagueoflegends.com/static/level-1-af0a9241de2a5388e7285bf023ac655b.png",
        "https://www.leagueoflegends.com/static/level-10-45ef57d7e52d32289efd9cdae4b61bb0.png",
        "https://www.leagueoflegends.com/static/level-3-4a4c8452fdc6a93b9d571653facef351.png",
        "https://www.leagueoflegends.com/static/level-2-d3ada1570c4b303eb59e25e11c911b8e.png",
        "https://www.leagueoflegends.com/static/level-4-ffcfe8ae7db3d6bbebf23a50701a631e.png",
        "https://www.leagueoflegends.com/static/level-5-4a0bc87e84c4a26ca371c8142d7971c8.png",
        "https://www.leagueoflegends.com/static/level-6-bacf75fb58220e9dd064361037d9ac0d.png",
        "https://www.leagueoflegends.com/static/level-7-b81728489c23518949b6a2e575c87c66.png",
        "https://www.leagueoflegends.com/static/level-8-847f32ef9382953cc907c8420abc8963.png",
        "https://www.leagueoflegends.com/static/level-9-b53d7b2b2adf859714a1af5d59ce3060.png",
    ]
    
        images_login_datas.forEach((data, index) => {
            images_login.innerHTML += `
               <div style="${ index === 0 ? 'z-index: 7' : ''}; background-image: url(${data})"
                    class="four_gift_image absolute w-full  h-full bg-no-repeat bg-cover">
                </div>
            `
        })

        images_level_datas.forEach((data, index) => {
            images_level.innerHTML += `
               <div style="${ index === 0 ? 'z-index: 7' : ''}; background-image: url(${data})"
                    class="four_gift_image absolute w-full  h-full bg-no-repeat bg-cover">
                </div>
            `
        })


    for (let i = 1; i <= 7; i++) {
        days_login.innerHTML += `
            <div style="text-wrap: nowrap" class="four-dot flex flex-col px-[15px] mx-2 cursor-custom items-center text-white">
                <div style="padding-bottom: 20px" class="text-[11px] font-bold uppercase">Ngày ${i}</div>
                <div class="w-[10px] h-[10px] rounded-full bg-[#ccc] translate-y-[5px]"></div>
            </div>
        `
    }

    for (let i = 1; i <= 10; i++) {
        days_level.innerHTML += `
            <div style="text-wrap: nowrap;" class="four-dot flex flex-col px-[15px] mx-2 cursor-custom items-center text-white">
                <div style="padding-bottom: 20px" class="text-[11px] font-bold uppercase">Cấp ${i}</div>
                <div class="w-[10px] h-[10px] rounded-full bg-[#ccc] translate-y-[5px]"></div>
            </div>
        `
    }

    text_gift_logins.forEach((text, index) => {
        texts_login.innerHTML += `
        <div style="${index !== 0 ? 'display: none' : ''}" class="text-gift text-white text-[14px] flex flex-col text-center items-center mt-[30px]">
            <p>${text.texts[0]}</p>
            <p>${text?.texts[1] !== undefined ? text?.texts[1] : " "}</p>
            <p>${text?.texts[2] !== undefined ? text?.texts[2] : " "}</p>
        </div>
        `
    })

    text_gift_levels.forEach((text, index) => {
        texts_level.innerHTML += `
        <div style="${index !== 0 ? 'display: none' : ''}" class="text-gift text-white text-[14px] flex flex-col text-center items-center mt-[30px]">
            <p>${text.texts[0]}</p>
            <p>${text?.texts[1] !== undefined ? text?.texts[1] : " "}</p>
            <p>${text?.texts[2] !== undefined ? text?.texts[2] : " "}</p>
        </div>
        `
    })
   

    const four_dots = document.querySelectorAll('.four-dot')
    const active_four = document.querySelector('.active_four')
    const four_gifts_iamges = document.querySelectorAll('.four_gift_image')
    const text_gifts = document.querySelectorAll('.text-gift')


    function active_Gift(index) {
        btn_show_gifts.forEach(item => {
            item.classList.remove('bg-yellow-700')
        })
        btn_show_gifts[index].classList.add('bg-yellow-700')

        if (index === 0) {
            
            images_login.style.display = 'block'
            images_level.style.display = 'none'

            days_login.style.display = 'flex'
            days_level.style.display = 'none'

            texts_login.style.display = 'block'
            texts_level.style.display = 'none'
            begin_dot (0)
        } else {

            images_login.style.display = 'none'
            images_level.style.display = 'block'

            days_login.style.display = 'none'
            days_level.style.display = 'flex'

            texts_login.style.display = 'none'
            texts_level.style.display = 'block'
            begin_dot (7)
        }

    }

    active_Gift(currentGift)
    

    function begin_dot (index) {
        active_four.style.setProperty("--left-four", ((four_dots[index].offsetWidth / 2) + (parseInt(four_dots[index].getBoundingClientRect().left.toFixed(0) - active_four.parentElement.getBoundingClientRect().left.toFixed(0))) + 'px'))
        four_dots[index].children[0].classList.add('active_box_four')
        four_dots[index].style.opacity = 1;
        four_function (index)
    }

    
    begin_dot (0)

    four_dots.forEach((item, index) => {
        item.addEventListener('click', () => {
            four_function(index)
        })
    })

    function four_function (index) {
        four_dots.forEach(oldDot => {
                oldDot.children[0].classList.remove('active_box_four')
                oldDot.style.opacity = 0.5
            })

            tabActive_gift = index 

            four_dots[index].children[0].classList.add('active_box_four')
            four_dots[index].style.opacity = 1

            four_gifts_iamges.forEach(gift_login => {
                gift_login.classList.remove('showGift')
                gift_login.classList.add('hideGift')
                gift_login.style.zIndex = 1
                gift_login.style.opacity = 0
            })
            
            four_gifts_iamges[index].classList.add('showGift')
            four_gifts_iamges[index].classList.remove('hideGift')
            four_gifts_iamges[index].style.opacity = 1

            text_gifts.forEach(text_gift => {
                text_gift.style.display = 'none'
            })

            text_gifts[index].style.display = 'flex'

            four_dots[index].style.opacity = "1"
            active_four.style.setProperty("--left-four", ((four_dots[index].offsetWidth / 2) + (parseInt(four_dots[index].getBoundingClientRect().left.toFixed(0) - active_four.parentElement.getBoundingClientRect().left.toFixed(0))) + 'px'))
    }
</script>