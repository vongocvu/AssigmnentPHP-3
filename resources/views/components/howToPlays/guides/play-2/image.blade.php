<div id="image-play-2" class="images-guide">
    <div class="play-2-image transition">
        <div class="w-[170px] h-[170px] absolute right-[23%] top-[13%] hover:scale-[1.1] transition">
            @include('components.howToPlays.guides.large-circle',[
            "icons" => [],
            'image' =>
            "https://www.leagueoflegends.com/static/2a-inhibitor-ffc761cefd2f9aaf902370c63e0398ed.jpg",
            'fill' => "rgb(191,48,42)"])
        </div>
        <div class="w-[90px] h-[90px] absolute right-[34.5%] top-[27%] z-[100] hover:scale-[1.1] transition"
            onclick="showImage2(1,0)">
            <div class="w-full h-full relative flex items-center justify-center">
                @include('components.howToPlays.guides.small-circle', ['icons' => array("M60
                0H40v40H0v20h40v40h20V60h40V40H60z")])
            </div>
        </div>
    </div>

    <div class="play-2-image transition">
        <div class="w-[170px] h-[170px] absolute right-[32%] top-[23%] hover:scale-[1.1] transition">
            @include('components.howToPlays.guides.large-circle',[
            "icons" => [],
            'image' =>
            "https://www.leagueoflegends.com/static/2b-turret-9575998670573f261611814228eecc0f.jpg",
            'fill' => "rgb(191,48,42)"])
        </div>
        <div class="w-[90px] h-[90px] absolute right-[27%] top-[17.5%] z-[100]  hover:scale-[1.1] transition"
            onclick="showImage2(0,1)">
            <div class="w-full h-full relative flex items-center justify-center">
                @include('components.howToPlays.guides.small-circle', ['icons' => array("M60
                0H40v40H0v20h40v40h20V60h40V40H60z")])
            </div>
        </div>
    </div>
</div>