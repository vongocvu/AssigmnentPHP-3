<div id="image-play-3" class="images-guide">
    <div class="play-3-image transition">
        <div class="w-[170px] h-[170px] absolute right-[45%] top-[13%] hover:scale-[1.1] transition">
            @include('components.howToPlays.guides.large-circle',[
            "icons" => [],
            'image' =>
            "https://www.leagueoflegends.com/static/3a-baron-92014b0b8d8e71c99c008c603052e146.jpg",
            'fill' => "rgb(11,198,227)"])
        </div>
        <div class="w-[90px] h-[90px] absolute right-[30.5%] top-[43%] z-[100] hover:scale-[1.1] transition"
            onclick="showImage3(1,0)">
            <div class="w-full h-full relative flex items-center justify-center">
                @include('components.howToPlays.guides.small-circle', ['icons' => array("M60
                0H40v40H0v20h40v40h20V60h40V40H60z")])
            </div>
        </div>
    </div>

    <div class="play-3-image transition">
        <div class="w-[170px] h-[170px] absolute  right-[28.5%] top-[38%] hover:scale-[1.1] transition">
            @include('components.howToPlays.guides.large-circle',[
            "icons" => [],
            'image' =>
            "https://www.leagueoflegends.com/static/3b-drakes-faff072e8445ba47644dc0f04b970e08.jpg",
            'fill' => "rgb(11,198,227)"])
        </div>
        <div class="w-[90px] h-[90px] absolute right-[47%] top-[19.5%] z-[100]  hover:scale-[1.1] transition"
            onclick="showImage3(0,1)">
            <div class="w-full h-full relative flex items-center justify-center">
                @include('components.howToPlays.guides.small-circle', ['icons' => array("M60
                0H40v40H0v20h40v40h20V60h40V40H60z")])
            </div>
        </div>
    </div>
</div>