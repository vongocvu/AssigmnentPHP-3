@extends('layouts.adminLayout')
@push('HeadAdmin')
<title>Edit champion {{$Champion['name']}} - Liên Minh Huyền Thoại</title>
@endpush

@section('main')

<div class="w-full h-full flex flex-col relative">
    <button onClick="update_champion()"
        class="absolute top-[30px] right-[80px] w-[160px] bg-blue-300 text-black h-[40px] border-[1px] border-[#888] flexCenter uppercase font-bold hover:bg-green-400 hover:text-white">
        Cập nhật
    </button>
    <div class="flexCenter flex-col">
        <input type="text"
            class="text-edit-champion text-white text-center uppercase fontFamily text-[50px] italic font-bold"
            name="name" type-field="1" value="{{ $Champion['name']}}" />
        <input type="text"
            class="text-edit-champion text-white text-center uppercase fontFamily text-[30px] italic font-bold"
            name="nickname" type-field="1" value="{{ $Champion['nickname']}}">
    </div>
    <div class="w-full flex-1 flex">
        <div class="w-[40%] h-full flex flex-col items-center">
            <div class="w-full h-[300px] px-[20px] mt-[40px] mb-[30px]">
                <img class="btn-edit-champion hover:opacity-[.8] w-full h-full object-cover"
                    src="{{$Champion['banner']}}" alt="">
                <input name="banner" type-field="1" type="file" accept="image/*" class="file-edit-champion hidden"
                    enctype="multipart/form-data">
            </div>
            <div class="w-[300px] h-[300px] bg-black rounded-full overflow-hidden  ">
                <img class="btn-edit-champion hover:opacity-[.8] w-full h-full object-cover"
                    src="{{$Champion['avatar']}}" alt="">
                <input name="avatar" type-field="1" type="file" accept="image/*" class="file-edit-champion hidden"
                    enctype="multipart/form-data">
            </div>
            <div class="flex text-white gap-[40px] mt-[30px]">
                <div class="text-center">
                    <h3 class="text-[11px] uppercase font-bold mb-[10px] opacity-[.7] underline">Vị trí</h3>
                    <select id="position_champion" name="position" type-field="1"
                        class="text-edit-champion position_champion h-[60px] text-[20px] fontFamily font-bold italic text-center px-[20px] mycursor">
                        <option class="text-black text-center" @if ($Champion['position']==='Sát thủ' ) {{ 'selected' }}
                            @endif value="Sát thủ">Sát thủ</option>
                        <option class="text-black text-center" @if ($Champion['position']==='Đấu sĩ' ) {{ 'selected' }}
                            @endif value="Đấu sĩ">Đấu sĩ</option>
                        <option class="text-black text-center" @if ($Champion['position']==='Pháp sư' ) {{ 'selected' }}
                            @endif value="Pháp sư">Pháp sư</option>
                        <option class="text-black text-center" @if ($Champion['position']==='Xạ thủ' ) {{ 'selected' }}
                            @endif value="Xạ thủ">Xạ thủ</option>
                        <option class="text-black text-center" @if ($Champion['position']==='Hỗ trợ' ) {{ 'selected' }}
                            @endif value="Hỗ trợ">Hỗ trợ</option>
                        <option class="text-black text-center" @if ($Champion['position']==='Đỡ đòn' ) {{ 'selected' }}
                            @endif value="Đỡ đòn">Đỡ đòn</option>
                    </select>
                </div>
                <div class="text-center">
                    <h3 class="text-[11px] uppercase font-bold mb-[10px] opacity-[.7] underline">Độ khó</h3>
                    <select id="level_champion" name="level" type-field="1"
                        class="text-edit-champion level_champion h-[60px] text-[20px] fontFamily font-bold italic text-center px-[20px] mycursor">
                        <option class="text-black text-center" @if ($Champion['level']==="Dễ" ) {{ 'selected' }} @endif
                            value="Dễ">Dễ
                        </option>
                        <option class="text-black text-center" @if ($Champion['level']==="Trung bình" ) {{ 'selected' }}
                            @endif value="Trung bình">Trung bình</option>
                        <option class="text-black text-center" @if ($Champion['level']==="Khó" ) {{ 'selected' }} @endif
                            value="Khó">Khó
                        </option>
                    </select>
                </div>
            </div>
            <div class="w-full mt-[40px] text-center px-[40px] text-white">
                <h1 class="text-[12px]  uppercase font-bold opacity-[.7] underline">Mô tả tướng
                </h1>
                <textarea name="description" type-field="1"
                    class="text-edit-champion pr-[10px] w-full text-center mt-[10px] text-[16px] fontFamily custom-scroll"
                    rows="6">{{ $Champion['description']}}</textarea>
            </div>
        </div>

        <div class="flex-1 text-white p-[30px]">
            <h1 class="text-center uppercase font-bold underline opacity-[.7] mb-[30px]">Kỹ năng</h1>
            @foreach ($Champion['skills'] as $key => $data)
            <div class="flex w-full mb-[20px] justify-between items-center">
                <div class="w-[100px] flexCenter uppercase font-bold">
                    {{ $skill[$key]}}
                </div>
                <div class="flex-1 mr-[20px]">
                    <input name="{{ 'name_skill-'. $key}}" type-field="2"
                        class="text-edit-champion  w-full uppercase text-[17px] mb-[10px] font-bold"
                        value="{{ $data['name_skill']}}" />
                    <textarea name="{{ 'detail_skill-'. $key}}" type-field="2"
                        class="text-edit-champion  w-full text-[16px] custom-scroll fontFamily" rows="5"
                        spellcheck="false">{{ $data['detail_skill'] }}</textarea>
                </div>
                <div class="w-[80px] mr-[10px]">
                    <img class="btn-edit-champion hover:opacity-[.8] max-w-none w-full h-[80px] "
                        src="{{ $data['image_skill']}}" alt="">
                    <input name="{{ 'image_skill-'. $key}}" type-field="2" type="file" accept="image/*"
                        class="file-edit-champion hidden" enctype="multipart/form-data">
                </div>
                <div class="w-[250px]">
                    <video class="w-full h-[150px] object-cover btn-edit-champion hover:opacity-[.8]"
                        src="{{ $data['video_skill']}}" autoplay muted loop></video>
                    <input name="{{ 'video_skill-'. $key}}" type-field="2" type="file" accept="video/*"
                        class="file-edit-champion hidden">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    const btn_edit_champion = document.querySelectorAll('.btn-edit-champion')
    const file_edit_champion = document.querySelectorAll('.file-edit-champion')

    const text_edit_champion = document.querySelectorAll('.text-edit-champion')

    btn_edit_champion.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            file_edit_champion[index].click();
        })
    })

    file_edit_champion.forEach((file, index) => {
        file.addEventListener('change', (e) => {
            btn_edit_champion[index].src = URL.createObjectURL(e.target.files[0])
        })
    })

    function update_champion() {

        document.getElementById('loading').style.display = 'block'
        const formData = new FormData();
        const field_1 = []
        const field_2 = []
        const skills = []

        file_edit_champion.forEach(file => {
            if (file.files[0] !== undefined) {
                if (file.getAttribute('type-field') === "1") {
                    field_1.push(file.name)
                } else {
                    field_2.push(file.name)
                }
                formData.append('files', file.files[0])
            }
        })

            field_2.forEach((value, index) => {
            skills.push(value.split("-"))
        })

        axios.post('{{env('NODE_SERVER')}}/cloudinary/upload-file', formData)
            .then(response => {
                
                let FileField = {}

                text_edit_champion.forEach(input => {
            if (input.getAttribute('type-field') === "1") {
                FileField = {...FileField, [input.name]: input.value}
            } else {
                const getFieldArr = []
                getFieldArr.push(input.name.split('-'))
                getFieldArr.forEach(key => {
                    FileField = {...FileField, [`skills.${key[1]}.${key[0]}`]: input.value}
                })
            }
        })

                field_1.forEach((name_key, index) => {
                    FileField = { ...FileField, [name_key]: response?.data[index]?.path };
                })
                

                let pathFile_2 = field_1?.length - 1

                if ( field_1.length === 0 ) {
                    pathFile_2 = 0
                }
                
                skills.forEach((skill, index) => {
                    FileField = { ...FileField, [`skills.${skill[1]}.${skill[0]}`]: response?.data[index + pathFile_2]?.path };
                })

                axios.post('{{env('NODE_SERVER')}}/champion/edit-champion', {
                    id: '{{$Champion['_id']}}',
                    data: FileField
                })
                .then( res => {
                    document.getElementById('loading').style.display = 'none'
                    Toastify({
                        text: "Cập nhật thành công !",
                        className: "success",
                        style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                        }
                    }).showToast();
                })
            })
    }




</script>


@endsection