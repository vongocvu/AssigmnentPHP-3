@push('HeadAdmin')
<title>Add Category - Liên Minh Huyền Thoại</title>
@endpush

<form action="{{ URL::to('/admin/category/save-category') }}"
    class="w-full h-full flex flex-col items-center text-white" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="w-[50%] border-[1px] border-[#888] px-[100px] py-[40px]">
        <h1 class="uppercase text-[30px] text-center mb-[30px] fontFamily font-bold">Thêm danh mục bài viết</h1>
        <div class="mb-[20px]">
            <h3 class="uppercase text-[14px] fontFamily font-bold">- Tên danh mục :</h3>
            <input name="name" class="p-[15px] mt-[10px] rounded-[10px] w-full border-[1px] border-[#888]" type="text"
                placeholder="Nhập tên danh mục">
        </div>
        <div class="mb-[20px]">
            <h3 class="uppercase text-[14px] fontFamily font-bold">- Link rút gọn :</h3>
            <input name="slug" class="p-[15px] mt-[10px] rounded-[10px] w-full border-[1px] border-[#888]" type="text"
                placeholder="ex: dau-truong-chan-ly">
        </div>
        <div class="mb-[20px]">
            <h3 class="uppercase text-[14px] fontFamily font-bold">- Danh muc cha :</h3>
            <div class="mt-[10px] rounded-[10px] w-full border-[1px] border-[#888]">
                <select name="cate_parent" class="p-[15px] w-full" name="" id="">
                    <option class="text-black" value="0">Không có</option>
                    @foreach ($cateAll as $cate )
                    <option class="text-black" value="{{ $cate->cate_slug}}">{{ $cate->cate_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-[20px]">
            <h3 class="uppercase text-[14px] fontFamily font-bold">- Ảnh danh mục :</h3>
            <div class="flex items-center mt-[20px]">
                <div class="w-[40%] flexCenter">
                    <button id="btn_add_image_cate" type="button"
                        class="bg-white text-black px-[20px] py-[10px] uppercase text-[14px] font-bold fontFamily hover:opacity-[.9]">
                        Thêm ảnh
                    </button>
                    <input name="image" type="file" class="hidden" id="file_add_image_cate">
                </div>
                <div id="show_add_image_cate"
                    class="flex-1 h-[160px] border-[1px] border-[#888] rounded-[10px] bg-no-repeat bg-cover bg-center">
                </div>
            </div>
        </div>
        <hr />
        <div class="flexCenter mt-[30px]">
            <button type="submit"
                class="bg-white text-black px-[70px] py-[10px] uppercase text-[14px] font-bold fontFamily hover:opacity-[.9]">
                Thêm
            </button>
        </div>
    </div>
</form>

<script>
    const btn_add_image_cate = document.getElementById('btn_add_image_cate')
    const file_add_image_cate = document.getElementById('file_add_image_cate')
    const show_add_image_cate = document.getElementById('show_add_image_cate')
 
    previewImage(btn_add_image_cate, file_add_image_cate, show_add_image_cate)
</script>