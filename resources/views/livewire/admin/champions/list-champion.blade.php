@push('HeadAdmin')
<title>List Champions - Liên Minh Huyền Thoại</title>
@endpush

<div class="w-full h-full flex flex-col pt-[30px] ">
    <div class="text-white">
        @livewire('champions.search-champions')
    </div>
    <div class="flex-1 w-full px-[30px]">
        <div class="w-full h-full grid grid-cols-12 gap-[20px] ">
            @if (sizeof($allChampion) > 0)
            @foreach ($allChampion as $champion)
            <div class="col-span-2 h-[350px] bg-white p-[1px] overflow-hidden">
                @include('components.champions.card-champion' , [
                'champion' => $champion,
                'edit_champion' => '/admin/champion/edit-champion/'
                ])
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>