<a href="{{ URL::to( $new['url'] ) }}" class="block {{ $flex }} item-new">
    <div class="{{ $w_and_h }} bg-black {{ $border }}">
        <div class="w-full h-full overflow-hidden">
            <img class="w-full h-full scale-[1.1] transition-custom" src="{{ asset('postImage') .'/'. $new['image'] }}"
                alt="anh">
        </div>
    </div>
    <div class="{{ $w_and_h }} flex flex-col justify-start mt-[10px]">
        <span class="text-[rgb(11,198,227)] text-[11px] uppercase font-bold">{{ $new['cate'] }}</span>
        <h1 class="font-bold text-[17px] leading-[30px] block">{{ $new['title'] }}</h1>
        <p class=" {{ $show_desc }} text-[12px] mt-[5px]">{{ $new['desc'] }}</p>
        <span class="font-bold text-[12px] mt-[10px] opacity-[.8]">{{ $new['time'] }}</span>
    </div>
</a>