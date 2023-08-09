<div class="w-full h-full relative">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" type="ZOOM_BLUE" style="fill: {{$fill}}"
        class="style__SvgActiveRingOuter-mut0jx-7-SvgDiamondOuter eGKeXn">
        <path
            d="M95.58 43.52A46.61 46.61 0 0059.84 7.78L50 17.63l-9.84-9.85a46.63 46.63 0 1055.42 35.74zm-3.39 20.64a43.55 43.55 0 11-53-52.95L50 22l10.82-10.79a43.52 43.52 0 0131.37 52.95z">
        </path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" type="ZOOM_BLUE" style="fill: {{$fill}}"
        class="style__SvgActiveRingInner-mut0jx-8-SvgDiamondInner eGKeXn">
        <path d="M56.87 15.14a38.86 38.86 0 11-13.74 0l-1.36-1.34a40.42 40.42 0 1016.46 0z"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" type="ZOOM_BLUE" style="fill: {{$fill}}"
        class="style__SvgActiveRingAccent-mut0jx-9-SvgDiamondAccent eGKeXn">
        <path d="M55.44 5.44L50 10.88l-5.44-5.44L50 0z"></path>
    </svg>

    @if (sizeof($icons) > 0)
    <div class="absolute w-[80%] h-[80%] top-[50%] left-[50%] translate-x-[-50%] 
        z-[150] translate-y-[-45%] rounded-full overflow-hidden bg-no-repeat bg-cover
        flex items-center justify-center
        ">
        <svg width="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" index="0" type="ZOOM_RED"
            class="style__SvgIcon-mut0jx-10-o sTXvj " style="fill: {{$fill}}">
            @foreach ($icons as $icon)
            <path d="{{$icon}}" />
            @endforeach
        </svg>
    </div>
    @endif
    <div style="background-image: url({{$image}})"
        class="absolute w-[80%] h-[80%] top-[50%] left-[50%] translate-x-[-50%] z-[150] translate-y-[-45%] rounded-full overflow-hidden bg-no-repeat  bg-cover">
    </div>
</div>