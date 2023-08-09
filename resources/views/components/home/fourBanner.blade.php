<div class="w-full h-[120vh] mt-[240px] relative">
    <div class="layer_background w-full h-[115vh]">
        <div
            class="absolute z-[1] w-full h-[140vh] bg-[url(https://www.leagueoflegends.com/static/championstyle_02-95fa98258784f905be83831947a1f07c.png)] bg-no-repeat bg-cover">
        </div>
        <div
            class="absolute z-[2] w-full h-[140vh] bg-[url(https://www.leagueoflegends.com/static/championstyle_01-dc617921291c69586acbebec745b4191.png)] bg-no-repeat bg-cover">
        </div>
    </div>

    <div class="absolute z-[3] top-[50%] left-[50%] w-[27vw] h-[27vw] translate-y-[-25%] translate-x-[-50%]">
        <div class="absolute w-full h-full ">
            <div class="w-full h-full box_show_champion">
                <div class="line_1 w-full h-full"></div>
                <div class="line_2 w-full h-full"></div>
                <div class="line_3 w-full h-full"></div>
                <div class="line_4 w-full h-full"></div>
            </div>
        </div>
    </div>

    <div
        class="absolute z-[4] top-[50%] left-[50%] w-[37vw] h-[37vw] translate-y-[-25%] rotate-[-45deg] translate-x-[-50%]">
        <div style="width: 100%" class="absolute h-full overflow-hidden detail_champion">
            <img class="max-w-none h-full"
                src="https://www.leagueoflegends.com/static/assassin-two-3a0fb5383eca19a4bc9b3c53310380bf.png" alt="">
        </div>
        <div style="width: 0" class="absolute h-full overflow-hidden detail_champion">
            <img class="max-w-none h-full"
                src="https://www.leagueoflegends.com/static/assassin-three-3b9f65b6c20d5779628f7a8b04b43819.png" alt="">
        </div>
        <div style="width: 0" class="absolute h-full overflow-hidden detail_champion">
            <img class="max-w-none h-full"
                src="https://www.leagueoflegends.com/static/assassin-four-d763afcd430fe6194d5640d6bf2a5941.png" alt="">
        </div>
    </div>

    <div
        class="absolute z-[5] top-[50%] right-[180px] w-[25vw] h-[30vw] translate-y-[-25%] text-white text-center flex flex-col justify-center items-center">
        <h3 class="uppercase text-[25px] fontFamily italic font-bold">Hạ gục kẻ địch</h3>
        <h1 class="uppercase text-[55px] fontFamily italic font-bold leading-[60px]">Một cách sang chảnh</h1>
        <p class="block my-[20px]">Thay đổi diện mạo các vị tướng yêu thích với trang phục để tạo nên điểm nhấn của
            riêng bạn.</p>
        <button
            class="uppercase text-[11px] hover:opacity-[.8] text-white py-3 w-[230px] bg-[rgb(19,216,246)] font-bold ">Chơi
            ngay</button>
    </div>

    <div style="background: linear-gradient(transparent 0%, rgb(3, 6, 8) 90%)"
        class="absolute left-0 top-[80%] z-[10] w-full h-[500px] layer_middle"></div>
</div>

<script>
    const detail_champions = document.querySelectorAll('.detail_champion')

    let championShowing = 0

    function showDetailChampionFour (index) {
        championShowing++
        if (championShowing >= detail_champions.length) {
            championShowing = 0
        }

        detail_champions.forEach(item => {
            item.style.width = 0
        })

        detail_champions[index].style.width = '100%'
       
    }

    setInterval(() => {
        
        showDetailChampionFour(championShowing)
    }, 2000);
          

</script>