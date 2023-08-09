<div id="image-play-1" class="images-guide">
    <div class="play-1-image transition">
        <div class="w-[200px] h-[200px] absolute left-[29%] bottom-[33%] hover:scale-[1.1] transition">
            @include('components.howToPlays.guides.large-circle',[
            "icons" => [],
            'image' =>
            "https://www.leagueoflegends.com/static/1a-your-nexus-e4bcd87ffb6391bce071d2c379b6682b.jpg",
            'fill' => "rgb(11,198,227)"])
        </div>
        <div class="w-[90px] h-[90px] absolute right-[22.3%] top-[13.1%] z-[100] hover:scale-[1.1] transition"
            onclick="showImage(1,0)">
            <div class="w-full h-full relative flex items-center justify-center">
                @include('components.howToPlays.guides.small-circle', ['icons' => array("M60
                0H40v40H0v20h40v40h20V60h40V40H60z")])
            </div>
        </div>
    </div>

    <div class="play-1-image transition">
        <div class="w-[170px] h-[170px] absolute right-[21%] top-[9%] hover:scale-[1.1] transition">
            @include('components.howToPlays.guides.large-circle',[
            "icons" => [],
            'image' =>
            "https://www.leagueoflegends.com/static/1a-your-nexus-e4bcd87ffb6391bce071d2c379b6682b.jpg",
            'fill' => "rgb(191,48,42)"])
        </div>
        <div class="w-[90px] h-[90px] absolute left-[30.5%] bottom-[36.5%] z-[100]  hover:scale-[1.1] transition"
            onclick="showImage(0,1)">
            <div class="w-full h-full relative flex items-center justify-center">
                @include('components.howToPlays.guides.small-circle', ['icons' => array("M60
                0H40v40H0v20h40v40h20V60h40V40H60z")])
            </div>
        </div>
    </div>
</div>