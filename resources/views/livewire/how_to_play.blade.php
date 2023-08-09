@push('Head')
<title>Hướng dẫn chơi - Liên Minh Huyền Thoại</title>
@endpush

@include('components.howToPlays.mainBanner')
<div class="w-full h-[1260px] bg-[rgb(7,18,26)]"></div>
<div class="w-full bg-[rgb(7,18,26)]">
    <div class=" w-[100%] h-[100vh] flex justify-end sticky top-16">
        <div class="w-[150vw] aspect-[16/9] flex justify-end">
            <div
                class="md:w-full lg:w-full xl:w-[75%] mt-[40px] 
                bg-[url(https://www.leagueoflegends.com/static/base-3x-17b11ad755c37c6f9064ef950e31b409.png)] bg-no-repeat bg-cover relative">
                @include('components.howToPlays.guides.play-1.image')
                @include('components.howToPlays.guides.play-2.image')
                @include('components.howToPlays.guides.play-3.image')
                @include('components.howToPlays.guides.play-4.image')
            </div>
        </div>
    </div>
    <div class="w-[40%] flex flex-col items-center relative text-white translate-y-[-750px]">
        @include('components.howToPlays.guides.play-1.information')
        @include('components.howToPlays.guides.play-2.information')
        @include('components.howToPlays.guides.play-3.information')
        @include('components.howToPlays.guides.play-4.information')
    </div>
</div>
@include('components.howToPlays.secondBanner')
@include('components.helpers.lineSection', ['width' => '50%'])
@include('components.howToPlays.thirdBanner')
@include('components.howToPlays.fourBanner')
@include('components.howToPlays.fifthBanner')
@include('components.common.trailer')




<script>
    const images_guide = document.querySelectorAll('.images-guide')
    const informaition_plays = document.querySelectorAll('.informaition-play')

    images_guide.forEach(guideImage => {
        guideImage.style.opacity = 0
    })

    let infomation_showing = 0

    window.addEventListener('scroll', () => {
            informaition_plays.forEach(guideInformation => {
            if (parseInt(guideInformation.getBoundingClientRect().top.toFixed(0)) <= parseInt(window.innerHeight.toFixed(0))) {
                infomation_showing = parseInt(guideInformation.getAttribute('current-info'))
            }
        })
        showImageByInfo(infomation_showing);
    })

    function showImageByInfo (info) {
            images_guide.forEach(item => {
                item.style.opacity = 0
            })

        images_guide[info].style.opacity = 1
    }
    

</script>