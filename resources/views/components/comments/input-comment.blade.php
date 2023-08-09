<div class="w-full flex">
    @if(Auth::check())
    <div class="flex mr-[20px]">
        <div class="w-[50px] h-[50px] rounded-full relative flex items-center justify-center">
            <div
                class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-45%] w-[80%] h-[80%] rounded-full overflow-hidden">
                <img class="object-cover w-full h-full" src="{{ Auth::user()->profile_photo_path}}" alt="">
            </div>
            <div class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-full h-full">
                <svg class="w-full h-full object-cover fill-[rgb(208,168,92)]" version="1.1" id="Layer_1" x="0px"
                    y="0px" viewBox="0 0 93.3 100" xml:space="preserve">
                    <path
                        d="M36.8,7.8C11.6,13.2-4.4,38,1.1,63.2s30.2,41.2,55.4,35.7c25.2-5.4,41.2-30.2,35.7-55.4C88.4,25.6,74.4,11.6,56.5,7.8
                        l-9.8,9.8L36.8,7.8z M46.6,22l6.9-6.9c21.1,3.8,35.2,24,31.4,45.1s-24,35.2-45.1,31.4S4.6,67.6,8.4,46.5c2.9-16,15.4-28.5,31.4-31.4
                        L46.6,22z M46.6,96.9c-24,0-43.5-19.5-43.5-43.5c0-19.9,13.5-37.3,32.7-42.2l2.6,2.6C16.6,18.3,2.5,39.7,7.1,61.6S33,97.5,54.9,92.9
                        S90.8,67,86.2,45.1c-3.3-15.8-15.6-28.1-31.3-31.3l2.6-2.6c23.3,6,37.3,29.7,31.4,53C83.9,83.4,66.5,96.9,46.6,96.9z">
                    </path>
                    <path d="M52.1,5.4l-5.4,5.4l-5.4-5.4L46.6,0L52.1,5.4z"></path>
                </svg>
            </div>
        </div>
    </div>
    @endif
    <div class="flex-1 h-[50px] border-[1px] border-[#ccc] rounded-[25px] flex items-center">
        <input class="w-full h-full pl-[40px] fontFamily flex-1" type="text" wire:model="value"
            wire:keydown.enter="saveComment" placeholder=" {{ Auth::check() ? 'Nhập bình luận của bạn đi nào, ' . Auth::user()->name . ' !' :
             " Hãy đăng nhập để có thể bình luận bài viết này !" }}">
        <div wire:click="saveComment" class="h-full w-[80px] hover:text-blue-600 cursor-pointer flexCenter">
            <i class="fas fa-paper-plane "></i>
        </div>
    </div>
</div>