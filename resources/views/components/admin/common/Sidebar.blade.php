<div style="background-color: #0b1124ab" class="w-full h-full flex flex-col">
    <div class="flexCenter h-[80px]">
        @include('components.logo.logo')
    </div>

    <div class=" px-[10px]">
        <ul>
            <li
                class="flex items-center text-white mb-[10px] opacity-[.5] p-[5px] rounded-[5px] hover:opacity-100 hover:bg-[#2e2d37] active_sidebar_admin">
                <div style="background-color: rgb(26, 13, 54)"
                    class="flexCenter p-[10px] w-[40px] h-[40px] rounded-full icon_sidebar">
                    <i class="fa fa-home "></i>
                </div>
                <div class=" ml-[10px] uppercase text-[14px] fontFamily ">Trang chủ</div>
            </li>
            <li class="item-menu-admin opacity-[.5] mb-[10px] ">
                <div class="flex items-center text-white  p-[5px] rounded-[5px] hover:opacity-100 hover:bg-[#2e2d37]">
                    <div style="background-color: rgb(26, 13, 54)"
                        class="flexCenter p-[10px] w-[40px] h-[40px] rounded-full icon_sidebar">
                        <i class="fas fa-list"></i>
                    </div>
                    <div
                        class=" ml-[10px] w-full uppercase text-[14px] fontFamily flex justify-between items-center drop-menu-admin">
                        <span>Danh mục bài viết</span><i class="fa fa-chevron-right px-[20px] transition-custom"></i>
                    </div>
                </div>
                <div class="text-white ml-[50px] ">
                    <ul class="child-item-drop h-[0px] overflow-hidden transition-custom">
                        <a href="{{ URL::to('admin/category/add') }}"
                            class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Thêm mới</span>
                        </a>
                        <a href="{{ URL::to('admin/category/list-category') }}"
                            class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Tất cả danh mục</span>
                        </a>
                    </ul>
                </div>
            </li>

            <li class="item-menu-admin opacity-[.5] mb-[10px] ">
                <div class="flex items-center text-white  p-[5px] rounded-[5px] hover:opacity-100 hover:bg-[#2e2d37]">
                    <div style="background-color: rgb(26, 13, 54)"
                        class="flexCenter p-[10px] w-[40px] h-[40px] rounded-full icon_sidebar">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div
                        class=" ml-[10px] w-full uppercase text-[14px] fontFamily flex justify-between items-center drop-menu-admin">
                        <span>Bài viết</span><i class="fa fa-chevron-right px-[20px] transition-custom"></i>
                    </div>
                </div>
                <div class="text-white ml-[50px] ">
                    <ul class="child-item-drop h-[0px] overflow-hidden transition-custom">
                        <a href="{{ URL::to('/admin/post/add') }}"
                            class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Thêm mới</span>
                        </a>
                        <a href="{{ URL::to('/admin/post/list-post') }}"
                            class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Tất cả bài viết</span>
                        </a>
                    </ul>
                </div>
            </li>

            <li class="item-menu-admin opacity-[.5] mb-[10px] ">
                <div class="flex items-center text-white  p-[5px] rounded-[5px] hover:opacity-100 hover:bg-[#2e2d37]">
                    <div style="background-color: rgb(26, 13, 54)"
                        class="flexCenter p-[10px] w-[40px] h-[40px] rounded-full icon_sidebar">
                        <i class="fas fa-users"></i>
                    </div>
                    <div
                        class=" ml-[10px] w-full uppercase text-[14px] fontFamily flex justify-between items-center drop-menu-admin">
                        <span>Tướng</span><i class="fa fa-chevron-right px-[20px] transition-custom"></i>
                    </div>
                </div>
                <div class="text-white ml-[50px] ">
                    <ul class="child-item-drop h-[0px] overflow-hidden transition-custom">
                        <a href="{{ URL::to('admin/champion/add') }}"
                            class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Thêm mới</span>
                        </a>
                        <a href="{{ URL::to('admin/champion/list-champion') }}"
                            class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Tất cả tướng</span>
                        </a>
                        <a href="{{ URL::to('admin/champion/skin-champion') }}"
                            class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Trang phục</span>
                        </a>
                    </ul>
                </div>
            </li>

            <li class="item-menu-admin opacity-[.5] mb-[10px] ">
                <div class="flex items-center text-white  p-[5px] rounded-[5px] hover:opacity-100 hover:bg-[#2e2d37]">
                    <div style="background-color: rgb(26, 13, 54)"
                        class="flexCenter p-[10px] w-[40px] h-[40px] rounded-full icon_sidebar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div
                        class=" ml-[10px] w-full uppercase text-[14px] fontFamily flex justify-between items-center drop-menu-admin">
                        <span>Tài khoản</span><i class="fa fa-chevron-right px-[20px] transition-custom"></i>
                    </div>
                </div>
                <div class="text-white ml-[50px] ">
                    <ul class="child-item-drop h-[0px] overflow-hidden transition-custom">
                        <a href="#" class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Quản lý tài khoản</span>
                        </a>
                        <a href="#" class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Phân quyền</span>
                        </a>
                    </ul>
                </div>
            </li>

            <li class="item-menu-admin opacity-[.5] mb-[10px] ">
                <div class="flex items-center text-white  p-[5px] rounded-[5px] hover:opacity-100 hover:bg-[#2e2d37]">
                    <div style="background-color: rgb(26, 13, 54)"
                        class="flexCenter p-[10px] w-[40px] h-[40px] rounded-full icon_sidebar">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div
                        class=" ml-[10px] w-full uppercase text-[14px] fontFamily flex justify-between items-center drop-menu-admin">
                        <span>Bình luận</span><i class="fa fa-chevron-right px-[20px] transition-custom"></i>
                    </div>
                </div>
                <div class="text-white ml-[50px] ">
                    <ul class="child-item-drop h-[0px] overflow-hidden transition-custom">
                        <a href="#" class="block uppercase text-[12px] hover:bg-[#0b1124ab] py-[10px] rounded-[5px]"><i
                                class="fas fa-plus px-[10px]"></i><span>Quản lý bình luận</span>
                        </a>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>

<script>
    const items_menu = document.querySelectorAll('.item-menu-admin')
    const drop_items = document.querySelectorAll('.drop-menu-admin')
    const child_items_drop = document.querySelectorAll('.child-item-drop')

    items_menu.forEach((item, index) => {
        item.addEventListener('click', () => {
            showDetailMenu(index)
        })
    })

    function showDetailMenu(index) {

        items_menu.forEach((item, index) => {
            item.classList.remove('active_sidebar_admin')
            item.children[1].children[0].style.height = 0
        })

        items_menu[index].classList.add('active_sidebar_admin')
        drop_items[index].children[1].style.transform = 'rotate(90deg)'
        child_items_drop[index].style.height = child_items_drop[index].children[0].offsetHeight * child_items_drop[index].children.length + 'px'
    }

</script>