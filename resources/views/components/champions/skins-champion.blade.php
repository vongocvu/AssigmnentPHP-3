<div class="w-full h-[100vh] bg-white flexCenter relative">
    <div class="w-[85%] h-[90%] bg-black relative ">
        <div class="absolute z-[10] top-0 left-0 w-[30%] h-full blur-[20px] ">
        </div>
        <div class="absolute z-[10] top-0 left-0 w-[30%] h-full bg-[rgba(0,0,0,0.5)]  flex flex-col">
            <div class="pl-[20px] pr-[150px]">
                <h1 class="uppercase text-[35px] font-bold italic text-white fontFamily px-[40px] pt-[40px]">Trang phục
                    hiện có
                </h1>
            </div>
            <hr class="my-[30px] border-[#777]" />
            <div class="overflow-hidden">
                <div class="w-[115%] flex-1 p-[40px] item_skin box_skins transition-custom">
                    <div class="flex items-center opacity-[.6] item_skin_child mb-[40px]">
                        <div class="w-[70px] h-[70px]">
                            <img class="w-full h-full object-cover transition-custom"
                                src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_1.jpg" alt="">
                        </div>
                        <h3 class="ml-[30px] uppercase text-[14px] text-white font-bold transition-custom">Aatrox</h3>
                    </div>

                    <div class="flex items-center opacity-[.6] item_skin_child active_skin mb-[40px]">
                        <div class="w-[70px] h-[70px]">
                            <img class="w-full h-full object-cover transition-custom"
                                src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_21.jpg" alt="">
                        </div>
                        <h3 class="ml-[30px] uppercase text-[14px] text-white font-bold transition-custom">Aatrox</h3>
                    </div>

                </div>
            </div>
        </div>
        <img class="opacity-[0] absolute inset-0 w-full h-full object-cover bg-skin transition-custom"
            src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_1.jpg" alt="">
        <img class="absolute inset-0 w-full h-full object-cover bg-skin transition-custom"
            src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_21.jpg" alt="">
    </div>
</div>

<script>
    const item_skins = document.querySelectorAll('.item_skin_child')
    const box_skins = document.querySelector('.box_skins')
    const bg_skins = document.querySelectorAll('.bg-skin')
    
    item_skins.forEach((item, index) => {
        item.addEventListener('click', () => {
            show_skin(index)
        })
    })
    
    function show_skin (index) {
        item_skins.forEach(item => {
            item.classList.remove('active_skin')
        })

        item_skins[index].classList.add('active_skin')

        console.log(`-${index * 70}px`);

        box_skins.style.transform = `translateY(-${index * 70}px)`


        bg_skins.forEach(item => {
            item.style.opacity = 0
        })

        bg_skins[index].style.opacity = 1
    } 

</script>