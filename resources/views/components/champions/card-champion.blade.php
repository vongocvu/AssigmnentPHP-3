<a @if (isset($edit_champion)) href=" {{ URL::to($edit_champion . $champion['slug_name']) }}" @else
    href=" {{ URL::to('/champions/' . $champion['slug_name']) }}" @endif
    class="block w-full h-full relative card_champion transition-custom">
    <div
        class="absolute top-[-15px] right-[-15px] w-[30px] h-[30px] bg-white rotate-[45deg] z-[10] card_after transition-custom">
    </div>
    <div class="w-full h-[85%] overflow-hidden">
        <img class="w-full h-full scale-[1.2] card_image transition-custom" src="{{ $champion['avatar']}}" alt="">
    </div>
    <div class="w-full h-[15%] flex items-center bg-[rgb(6,28,37)] card_name transition-custom">
        <h1 class="pl-[20px] uppercase text-[20px] font-bold text-white italic">{{$champion['name']}}</h1>
    </div>
</a>