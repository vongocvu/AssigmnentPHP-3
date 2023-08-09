<div class="w-full bg-[rgb(0,9,19)] pb-[250px] relative">
    <div class="absolute top-0 left-[50%] w-[50%] h-full translate-x-[-50%]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-full h-full fill-[rgb(7,18,26)]">
            <path
                d="M67.84 56.35v5.5c8.62-8.62 14.37 0 14.37 0C112.14 40.78 90.35 2 90.35 2s-.72 17.24-15.08 27.77v16.52c-.24 4.79-3.84 7.9-7.43 10.06M17.79 62.09s4.07-6.46 10.78-2.63L20.91 48.2l6.7-16c-17.24-10.54-18-29.93-18-29.93S-12.14 41 17.79 62.09M26.89 83.89l5.51-18.68-.24-.48L19.23 77.9A17.78 17.78 0 017.5 83.17H3l-1 2.39 12 11.5zM92.27 83.89a16.24 16.24 0 01-11.74-5.27L68.8 66.88l3.83 17.72L85.8 98l12-11.49-1-2.4zM55.87 42.7c0 .24-.24.48-.24.71h.72c5.75.48 7.66 2.64 9.1 7.67a9.35 9.35 0 002.39-1.92c1-1 1.68-1.67 1.68-2.63V28.09a2 2 0 00-1.68-1.92l-31.37-5.74H36a2.39 2.39 0 00-2.39 2.39v6.71l24.9 3.35z">
            </path>
            <path
                d="M60.18 54c-1.2-5.27-1.44-4.55-5.75-4.79L40.78 48v-3.87h5.51A4.09 4.09 0 0050.36 41l1-3.35L32.4 35l-5 12.22 11.74 17-5.54 18.47L49.88 98l16.53-15.07s-6.23-28.5-6.23-29M49.88 2.23l-4.79 10.29 4.79 3.83 4.79-3.83zM62.1 9.41l1.43 6h6l2.87-11zM30.25 15.4h6l.24-.72 1.2-5.27-10.3-5z">
            </path>
        </svg>
    </div>
    <h1 class="pl-[300px] text-white font-bold uppercase text-[60px] italic fontFamily">Kỹ năng</h1>
    <div class="w-full flex">
        <div class="w-[53%]">
            <div class="w-full border-b-[1px] border-[#444] mt-[60px] relative">
                <div class="w-full pl-[300px] flex">

                    @foreach ($Champion['skills'] as $key => $data)

                    <div class=" mr-[20px] mb-[20px] dot_skill ">
                        <img class="p-[5px] w-[80px] h-[80px] 
                        @if ($key === 0)
                        {{ 'active_skill' }}
                    @endif" src=" {{$data['image_skill']}}" alt="">
                    </div>

                    @endforeach
                </div>

                <div class="active_cycle_skill">
                    <div
                        class="absolute left-[50%] top-0 translate-x-[-50%] translate-y-[-100%] h-[30px] w-[1px] bg-[rgb(208,168,92)]">
                    </div>
                </div>
            </div>
            <div class="w-full text-white relative flex justify-center">

                @foreach ($Champion['skills'] as $key => $data)
                <div class="w-[50%] absolute mt-[30px] ml-[60px] detail_skill transition-custom" style="opacity: 0">
                    <h3 class="uppercase font-bold mb-[10px]">{{ $data['name_skill']}}</h3>
                    <p class="text-[13px]">{{ $data['detail_skill']}}</p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="w-[47%]">
            <div class="w-[85%] h-[450px] bg-white relative">
                <div
                    class="absolute top-[50%] left-[50%] w-[97%] h-[105%] translate-y-[-50%] translate-x-[-50%] border-[1px] border-[#777] z-[1]">
                </div>

                @foreach ($Champion['skills'] as $key => $data)


                <video @if ( $key !==0) {{ 'style="opacity: 0' }} @endif
                    class="absolute inset-0 w-full h-full object-cover transition-custom video_skill" autoplay loop
                    muted="true">
                    <source src="{{$data['video_skill']}}" type="video/webm">
                </video>

                @endforeach
            </div>
        </div>
    </div>
</div>


<script>
    const dot_skills = document.querySelectorAll('.dot_skill')
    const active_cycle_skill = document.querySelector('.active_cycle_skill')
    const video_skills = document.querySelectorAll('.video_skill')
    const detail_skill = document.querySelectorAll('.detail_skill')

    active_cycle_skill.style.left = parseInt(dot_skills[0].getBoundingClientRect().left.toFixed(0)) + (dot_skills[0].offsetWidth / 2) + 'px'

    dot_skills.forEach((item, index) => {
       item.addEventListener('click', () => {
        show_skill (index)
       })
    })

    detail_skill[0].style.opacity = 1

  function show_skill (index) {
    dot_skills.forEach(item => {
        item.children[0].classList.remove('active_skill')
    })

    detail_skill.forEach(item => {
        item.style.opacity = 0
    })

    detail_skill[index].style.opacity = 1

    video_skills.forEach(item => {
        item.style.opacity = 0
    })

    video_skills[index].style.opacity = 1

    active_cycle_skill.style.left = parseInt(dot_skills[index].getBoundingClientRect().left.toFixed(0)) + (dot_skills[0].offsetWidth / 2) + 'px'
    dot_skills[index].children[0].classList.add('active_skill')
  }

</script>