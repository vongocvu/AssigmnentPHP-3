@push('HeadAdmin')
<title>Add Article - Liên Minh Huyền Thoại</title>
@endpush

<div class="w-full h-full">
    <form class="w-full h-full flex" action="{{ URL::to('admin/post/save-post') }}" enctype="multipart/form-data"
        method="POST">
        {{ csrf_field() }}
        <div class="w-[70%] h-full px-[10px] overflow-y-scroll">
            <textarea name="content" id="editor"></textarea>
        </div>
        <div class="flex-1 h-full pr-[10px] ">
            <div class="w-full h-full bg-white px-[20px] sticky top-0">
                <h1
                    class="text-center uppercase text-[20px] font-bold fontFamily py-[20px] sticky top-0 bottom-0 bg-white">
                    Thêm
                    bài viết
                    mới</h1>
                <div class="flex flex-col mb-[20px]">
                    <span class="uppercase font-medium text-[14px] underline">1. Tiêu đề bài viết:</span>
                    <input name="title" class="h-[40px] border-[1px] border-[#666] mt-[10px] px-[10px]" type="text"
                        placeholder="Nhập tiêu đề bài viết...">
                </div>
                <div class="flex flex-col mb-[20px]">
                    <span class="uppercase font-medium text-[14px] underline">2. Đường dẫn rút gọn:</span>
                    <input name="slug" class="h-[40px] border-[1px] border-[#666] mt-[10px] px-[10px]" type="text"
                        placeholder="Nhập đường dẫn rút gọn">
                </div>
                <div class="flex flex-col mb-[20px]">
                    <span class="uppercase font-medium text-[14px] underline">3. Nội dung rút gọn:</span>
                    <textarea name="short_content" rows="5" class=" border-[1px] border-[#666] mt-[10px] px-[10px]"
                        type="text" placeholder="Nhập nội dung rút gọn của bài viết..."></textarea>
                </div>
                <div class="flex flex-col mb-[20px]">
                    <span class="uppercase font-medium text-[14px] underline">4. Danh mục bài viết:</span>
                    <select name="category" class="h-[40px] border-[1px] border-[#666] mt-[10px] px-[10px]">
                        <option value="0">Chọn danh mục bài viết</option>
                        @foreach ($cateAll as $cate )
                        <option class="text-black" value="{{ $cate->cate_slug}}">{{ $cate->cate_name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="flex flex-col mb-[20px]">
                    <span class="uppercase font-medium text-[14px] underline">6. Thẻ:</span>
                    <input name="tags" class="h-[40px] border-[1px] border-[#666] mt-[10px] px-[10px]" type="text"
                        placeholder="ex: Đấu trường, Chi tiết cập nhật, Game Mode ...">
                </div>

                <div class="flex flex-col mb-[20px]">
                    <span class="uppercase font-medium text-[14px] underline">6. Ảnh bài viết:</span>
                    <div class="flex justify-between items-center">
                        <div class="w-[50%] flexCenter">
                            <button id="btn_add_post" type="button"
                                class="border-[1px] border-[#888] bg-blue-800 text-white px-5 py-2 uppercase fontFamily rounded-[5px]">Thêm
                                ảnh</button>
                        </div>
                        <div class="hidden">
                            <input id="file_add_post" name="image_post" accept="image/*" type="file">
                        </div>
                        <div id="show_add_image_post"
                            class="mt-[10px] flex-1 h-[150px] border-[1px] border-[#555] bg-no-repeat bg-cover bg-center">
                        </div>
                    </div>
                </div>
                <div class="mt-[40px]">
                    <button type="submit"
                        class="bg-[#061f55] px-[30px] border-[1px] border-black py-[10px] text-white uppercase font-bold fontFamily hover:opacity-[.7]">Đăng
                        bài</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    const btn_add_post = document.getElementById('btn_add_post')
    const file_add_post = document.getElementById('file_add_post')
    const show_add_image_post = document.getElementById('show_add_image_post')

    previewImage(btn_add_post, file_add_post, show_add_image_post)

</script>