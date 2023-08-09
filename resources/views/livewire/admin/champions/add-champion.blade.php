@push('HeadAdmin')
<title>Add Champion - Liên Minh Huyền Thoại</title>
@endpush


<div id="formAddChampion" class="block w-full h-full overflow-hidden relative">
    <div id="box_layers" class="w-full h-full flex no-wrap transition-custom relative">
        <div id="BoxCanvas" class="absolute inset-0"></div>
        <div class="layer_add_champion min-w-full h-full relative">
            <div
                class="absolute top-0 left-[75%] translate-x-[-50%] w-[30%] h-[70%] flex flex-col items-center px-[30px]">
                <div
                    class="w-[100%] h-[35%] border-[1px] border-[#888] flexCenter hover:opacity-[.7] show_banner_champion bg-no-repeat bg-cover bg-center">
                    <input type="file" class="files_all input_file_champion file_banner_champion hidden"
                        enctype="multipart/form-data">
                    <i class="fa fa-plus text-white text-[40px]"></i>
                </div>
            </div>
            <div id="circle_add_champion"
                class="absolute top-[60%] left-[75%] w-[30vw] h-[30vw] rounded-full relative p-[50px] translate-x-[-50%] translate-y-[-50%]">
                <div class="cycle_effect absolute inset-0 w-full h-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="fill-[rgba(255,255,255,0.6)]">
                        <path
                            d="M49.22 100v-1h.08v1zm1.51-1h.09v1h-.08zm-3 1v-1h.08v1zm4.52-1h.09v1h-.08zm-6 .91l.07-1h.09l-.08 1zm7.54-1h.08l.07 1h-.08zm-9.06.86l.11-1h.08l-.11 1zm10.55-1h.08l.11 1h-.09zm-12.06.82l.13-1h.09l-.14 1zm13.54-1h.08l.14 1h-.08zm-15 .77l.16-1h.09l-.17 1zm16.53-1h.08l.17 1h-.09zm-18 .71l.2-1h.08l-.2 1zm19.5-1h.08l.19 1h-.08zm-21 .66l.23-1h.08l-.23 1zm22.45-1h.08l.22 1h-.07zm-23.93.6l.26-1h.07l-.25 1zm25.38-1h.08l.25 1h-.07zm-26.85.55L36 97h.08l-.29 1zM64 97h.08l.28 1h-.08zm-29.75.5l.32-1h.08l-.31 1zm31.17-1h.08l.32 1h-.08zM32.8 97l.35-1h.08l-.34 1zm34-.94h.08l.34 1h-.08zm-35.45.39l.38-.93h.07l-.37.93zm36.85-.92h.08l.37.94h-.08zm-38.2.31l.4-.93h.08l-.4.92zm39.63-.92h.08l.4.93h-.08zm-41 .28l.43-.9h.07l-.43.91zM71 94.29h.08l.43.91h-.08zm-43.74.24l.46-.89h.07l-.45.9zm45.09-.9h.07l.46.9h-.08zm-46.43.19l.48-.88h.08l-.49.88zm47.76-.9h.06l.48.88h-.07zm-49.08.14l.51-.86h.07l-.51.87zm50.37-.87h.07l.51.87h-.07zm-51.67.08l.54-.85h.07l-.54.85zm52.94-.87h.07l.54.85h-.07zM22 91.43l.56-.83.07.05-.57.83zm55.46-.85h.07l.57.83h-.07zm-56.71 0l.59-.82.06.05-.58.82zm57.94-.83h.06l.6.81-.07.05zm-59.16-.08l.61-.8.07.05-.62.8zm60.36-.82h.06l.62.8h-.07zm-61.56-.15l.64-.78.03.08-.64.77zm62.73-.8l.06-.05.64.77-.07.06zm-63.89-.18l.66-.76.06.06-.66.75zm65-.79l.06-.05.66.76h-.06zM16 86.7l.69-.74.06.06-.68.74zm67.28-.77l.06-.05.69.74h-.07zm-68.38-.28l.71-.72.06.06-.71.72zm69.46-.75l.06-.06.71.72-.06.06zm-70.53-.34l.73-.7.06.07-.73.69zm71.58-.72v-.06l.73.69-.06.06zm-72.62-.4l.75-.67.06.06-.75.68zm73.63-.7l.06-.06.75.67-.06.06zm-74.63-.45l.77-.65.05.07-.76.65zm75.61-.67l.06-.07.77.65-.06.07zm-76.58-.51l.79-.62v.06l-.78.63zm77.53-.65l.05-.06.79.62v.07zm-78.43-.55l.81-.61v.07L10 80zm79.37-.63v-.07l.81.6-.05.07zM9 78.67l.82-.58.05.07-.83.58zm81.14-.6V78l.83.58-.05.06zm-82-.66l.86-.56.05.08-.85.55zM91 76.83v-.07l.84.55v.08zm-83.65-.71l.86-.53v.07l-.86.53zm84.45-.55v-.07l.86.53v.07zM6.57 74.8l.87-.5v.08l-.88.5zm86-.51v-.07l.88.5v.07zm-86.74-.82l.89-.47v.08l-.89.47zM93.28 73v-.07l.89.47v.08zm-88.14-.89l.9-.45v.08l-.91.44zM94 71.66v-.08l.9.45v.07zm-89.52-.93l.92-.42v.07l-.92.42zm90.12-.42v-.07l.91.41v.08zm-90.73-1l.92-.38V69l-.93.39zM95.2 69v-.08l.93.39v.08zM3.3 68l.94-.35v.07l-.91.28zm92.45-.33v-.08l.94.36v.08zm-93-1.1l1-.33v.08l-1 .33zm93.5-.31v-.07l1 .33v.08zM2.29 65l1-.29v.08l-1 .3zm94.45-.26v-.08l1 .3v.08zM1.85 63.55l1-.27v.08l-1 .28zm95.32-.24v-.08l1 .27v.09zM1.46 62.08l1-.24v.08l-1 .24zm96.09-.21v-.08l1 .24v.08zM1.12 60.59l1-.21v.08l-1 .22zm96.77-.18v-.08l1 .22v.08zM.82 59.1l1-.18V59l-1 .18zm97.36-.1v-.08l1 .18v.08zM.57 57.6l1-.16v.09l-1 .15zm97.86-.12v-.09l1 .15v.09zM.36 56.09l1-.13v.09l-1 .12zM98.63 56v-.09l1 .12v.09zM.2 54.57l1-.09v.08l-1 .09zm98.59-.06v-.08l1 .09v.08zM.09 53.05l1-.06v.08l-1 .06zm98.82 0v-.08l1 .06v.08zM0 51.52h1v.09H0zm99 0v-.09h1v.09zm0-3.07h1v.09h-1zm-99 .04v-.08h1v.09zM98.9 47l1-.06V47h-1zM.09 47v-.08l1 .06V47zm98.7-1.5l1-.09v.08l-1 .1zM.2 45.45v-.09l1 .1v.08zM98.63 44l1-.13V44l-1 .12zM.36 43.94v-.09l1 .12v.08zm98.07-1.43l1-.16v.09l-1 .15zM.57 42.42v-.08l1 .15v.09zM98.18 41l1-.18v.08l-1 .18zM.82 40.92v-.08l1 .18v.08zm97.06-1.35l1-.22v.09l-1 .21zm-96.76-.15v-.08l1 .22v.08zm96.43-1.31l1-.24v.08l-1 .24zm-96.09-.17v-.08l1 .24v.08zm95.7-1.27l1-.28v.09l-1 .27zm-95.31-.21v-.08l1 .28v.08zm94.88-1.22l1-.31v.08l-1 .31zM2.28 35v-.08l1 .31v.08zm94-1.19l.95-.33v.08l-.95.33zm-93.5-.26v-.08l1 .33v.09zm93-1.14l.94-.37v.08l-.94.36zm-92.49-.29v-.08l.94.36v.08zm.56-1.41v-.08l.93.39v.08zm91.33.29l.93-.39v.07l-.93.39zM4.46 29.31v-.07l.91.42v.07zm90.12.33l.92-.41v.07l-.91.42zm-89.47-1.7v-.07l.9.44v.08zm88.83.35l.9-.44v.07l-.9.45zM5.8 26.59v-.08l.89.48v.07zm87.45.41l.89-.47v.07l-.89.47zM6.54 25.25v-.07l.87.5v.07zm86 .4l.87-.5v.07l-.87.5zM7.31 23.94l.05-.07.85.53v.07zm84.45.42l.86-.52v.07l-.86.53zm-83.63-1.7v-.07l.84.55v.07zM91 23.1l.84-.55v.07l-.84.55zM9 21.4v-.07l.82.58v.06zm81.14.47l.82-.58v.07l-.82.57zM9.87 20.16l.05-.07.81.61-.05.06zm79.37.5l.81-.61v.07l-.81.6zM10.8 19v-.06l.79.62-.05.07zm77.53.52l.78-.63.06.07-.79.63zm-76.57-1.7l.06-.06.77.65-.06.06zm75.62.55l.76-.66.06.07-.77.65zm-74.62-1.7l.06-.06.75.67-.06.07zm73.63.57l.75-.67.06.06-.75.67zM13.8 15.5l.06-.06.72.7-.05.06zm71.58.6l.72-.7.06.06-.73.7zm-70.51-1.68l.06-.06.7.72-.06.05zm69.46.58l.7-.71h.06l-.71.72zM16 13.36v-.06l.68.74-.06.06zm67.24.64l.69-.74.06.06-.69.74zM17.1 12.34l.06-.06.66.76-.06.06zm65 .67l.66-.76.06.05-.66.76zm-63.84-1.66h.07l.64.78-.07.05zM81 12l.64-.78.06.06-.64.78zm-61.54-1.6l.06-.05.62.8h-.07zm60.36.72l.61-.8h.07l-.62.8zM20.68 9.49l.07-.05.59.81-.07.05zm57.94.74l.59-.82.07.05-.59.81zM21.93 8.61H22l.56.84h-.07zm55.47.76l.6-.83h.07l-.56.84zm-54.2-1.6h.08l.54.85h-.08zm53 .78l.54-.85h.07l-.54.85zM24.51 7h.07l.51.87h-.07zm50.37.81l.51-.87h.07l-.46.88zm-49-1.57h.08l.48.88h-.07zm47.7.76l.49-.88h.07l-.49.88zm-46.4-1.51h.07l.46.89h-.07zm45.08.85l.46-.9h.08l-.46.9zM28.55 4.82h.08l.43.91h-.08zm42.38.86l.43-.91h.07l-.43.95zm-41-1.5h.08l.4.92h-.08zm39.63.89l.4-.93h.08l-.4.92zM31.35 3.59h.08l.37.93h-.08zm36.85.9l.37-.93h.08l-.38.93zM66.8 4l.35-1h.08l-.35 1zM32.78 3h.08l.34 1h-.08zm32.61.43l.31-1h.09l-.32 1zm-31.17-.89h.08l.32 1h-.08zM64 3l.29-1h.08L64 3zm-28.32-.92h.08L36 3zm26.84.54l.26-1h.08l-.26 1zm-25.38-1h.09l.25 1h-.08zm23.93.6l.23-1h.08l-.22 1zm-22.44-1h.08l.22 1h-.08zm21 .65l.2-1h.08l-.2 1zM40.12 1h.08l.2 1h-.09zm18 .71l.17-1h.08l-.16 1zM41.61.69h.09l.16 1h-.08zm15.06.76l.13-1h.09l-.14 1zM43.12.46h.09l.13 1h-.08zm12.06.81l.11-1h.08l-.1 1zM44.64.28h.08l.11 1h-.09zm9 .86l.08-1h.08l-.07 1zm-7.52-1h.07l.07 1h-.08zm6 .91v-1h.08v1zm-4.52-1h.08l.05 1h-.09zM49.2 0h.08v1h-.08zm1.51 1V0h.08v1z">
                        </path>
                    </svg>
                </div>
                <div id="btn_add_champion"
                    class="w-full h-full cycle_border rounded-full relative overflow-hidden flexCenter add_champion_circle overflow-hidden">
                    <div id="show_champion_add"
                        class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-[99%] h-[99%] rounded-full bg-center bg-no-repeat bg-cover">
                    </div>
                    <i class="fa fa-plus text-[60px] text-white transition-custom"></i>
                    <input id="file_champion_add" type="file" name="avatar_champion" enctype="multipart/form-data"
                        class="files_all input_file_champion hidden avatar_champion">
                </div>
            </div>

            <div class="absolute left-[5%] top-[0] w-[35%] h-[80%] flex flex-col justify-between ">
                <div class="w-full text-white text-center">
                    <div
                        class="uppercase font-bold fontFamily text-[12px] text-left rotate-[-15deg] mb-[40px] text-red-300">
                        Tên
                        Tướng
                    </div>
                    <div class="text-center border-b-[1px] border-[#888] relative leftItem_canvas">
                        <input id="name_champion" name="name_champion"
                            class="input_text_champion name_champion text-center h-[80px] text-[60px] fontFamily font-bold italic placeholder:text-[20px] placeholder:text-white pl-[100px] w-full"
                            type="text" placeholder="Nhập tên tướng">
                    </div>
                </div>
                <div class="w-full text-white text-center">
                    <div
                        class="uppercase font-bold fontFamily text-[12px] text-left rotate-[-15deg] mb-[40px] text-red-300">
                        Biệt
                        danh
                    </div>
                    <div class="text-center border-b-[1px] border-[#888] relative leftItem_canvas">
                        <input id="nickname_champion" name="nickname_champion"
                            class="input_text_champion nickname_champion text-center h-[60px] text-[25px] fontFamily font-bold italic placeholder:text-[20px] placeholder:text-white pl-[100px] w-full"
                            type="text" placeholder="Nhập biệt danh tướng">
                    </div>
                </div>
                <div class="w-full text-white text-center">
                    <div
                        class="uppercase font-bold fontFamily text-[12px] text-left rotate-[-15deg] mb-[40px] text-red-300">
                        Vai trò
                    </div>
                    <div class="border-b-[1px] border-[#888] relative leftItem_canvas ">
                        <select id="position_champion"
                            class="position_champion h-[60px] text-[20px] fontFamily font-bold italic text-center px-[20px] ml-[100px] mycursor">
                            <option class="text-black text-center" value="0">Chọn vai trò</option>
                            <option class="text-black text-center" value="Sát thủ">Sát thủ</option>
                            <option class="text-black text-center" value="Đấu sĩ">Đấu sĩ</option>
                            <option class="text-black text-center" value="Pháp sư">Pháp sư</option>
                            <option class="text-black text-center" value="Xạ thủ">Xạ thủ</option>
                            <option class="text-black text-center" value="Hỗ trợ">Hỗ trợ</option>
                            <option class="text-black text-center" value="Đỡ đòn">Đỡ đòn</option>
                        </select>
                    </div>
                </div>
                <div class="w-full text-white text-center">
                    <div
                        class="uppercase font-bold fontFamily text-[12px] text-left rotate-[-15deg] mb-[40px] text-red-300">
                        Độ khó
                    </div>
                    <div class="text-center border-b-[1px] border-[#888] relative leftItem_canvas">
                        <select id="level_champion"
                            class="level_champion h-[60px] text-[20px] fontFamily font-bold italic text-center px-[20px] ml-[100px] mycursor">
                            <option class="text-black text-center" value="0">Chọn độ khó</option>
                            <option class="text-black text-center" value="Dễ">Dễ</option>
                            <option class="text-black text-center" value="Trung bình">Trung bình</option>
                            <option class="text-black text-center" value="Khó">Khó</option>
                        </select>
                    </div>
                </div>
                <div class="w-full text-white text-center">
                    <div
                        class="uppercase font-bold fontFamily text-[12px] text-left rotate-[-15deg] mb-[40px] text-red-300">
                        Mô tả
                    </div>
                    <div class="text-center border-b-[1px] border-[#888] relative leftItem_canvas">
                        <textarea id="desc_champion"
                            class="input_text_champion desc_champion w-full placeholder:text-center placeholder:text-[20px] placeholder:text-white font-bold italic fontFamily pl-[100px] custom-scroll"
                            cols="30" rows="4" placeholder="Mô tả tướng"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="layer_add_champion min-w-full h-full relative">
            <div class="absolute right-[70%] top-0 w-[23%] h-[90%] flex flex-col justify-between">
                <div class="w-full border-b-[1px] border-[#ccc] rightItem_canvas text-white">
                    <div class="flex mb-[5px]">
                        <h3 class="text-[14px] font-bold fontFamily">Nội tại</h3>
                        <input name="intrinsic_champion"
                            class="input_text_champion intrinsic_skill flex-1 text-center italic mx-[30px]" type="text"
                            placeholder="Nhập tên skill">
                    </div>
                    <div class="flex">
                        <h3 class="text-[14px] font-bold fontFamily">Mô tả skill</h3>
                        <textarea
                            class="input_text_champion desc_intrinsic_skill flex-1 text-center italic mx-[10px] custom-scroll px-[10px]"
                            rows="4" type="text" placeholder="Mô tả skill"></textarea>
                    </div>
                </div>
                <div class="w-full border-b-[1px] border-[#ccc] rightItem_canvas text-white">
                    <div class="flex mb-[5px]">
                        <h3 class="text-[14px] font-bold fontFamily">Q</h3>
                        <input
                            class="input_text_champion q_skill text_field_chamipon flex-1 text-center italic mx-[30px]"
                            type="text" placeholder="Nhập tên skill">
                    </div>
                    <div class="flex">
                        <h3 class="text-[14px] font-bold fontFamily">Mô tả skill</h3>
                        <textarea
                            class="input_text_champion desc_q_skill flex-1 text-center italic mx-[10px] custom-scroll px-[10px]"
                            rows="4" type="text" placeholder="Mô tả skill"></textarea>
                    </div>
                </div>
                <div class="w-full border-b-[1px] border-[#ccc] rightItem_canvas text-white">
                    <div class="flex mb-[5px]">
                        <h3 class="text-[14px] font-bold fontFamily">W</h3>
                        <input name="w_champion"
                            class="input_text_champion w_skill text_field_chamipon flex-1 text-center italic mx-[30px]"
                            type="text" placeholder="Nhập tên skill">
                    </div>
                    <div class="flex">
                        <h3 class="text-[14px] font-bold fontFamily">Mô tả skill</h3>
                        <textarea
                            class="input_text_champion desc_w_skill flex-1 text-center italic mx-[10px] custom-scroll px-[10px]"
                            rows="4" type="text" placeholder="Mô tả skill"></textarea>
                    </div>
                </div>
                <div class="w-full border-b-[1px] border-[#ccc] rightItem_canvas text-white">
                    <div class="flex mb-[5px]">
                        <h3 class="text-[14px] font-bold fontFamily">E</h3>
                        <input name="e_champion"
                            class="input_text_champion e_skill text_field_chamipon flex-1 text-center italic mx-[30px]"
                            type="text" placeholder="Nhập tên skill">
                    </div>
                    <div class="flex">
                        <h3 class="text-[14px] font-bold fontFamily">Mô tả skill</h3>
                        <textarea
                            class="input_text_champion desc_e_skill flex-1 text-center italic mx-[10px] custom-scroll px-[10px]"
                            rows="4" type="text" placeholder="Mô tả skill"></textarea>
                    </div>
                </div>
                <div class="w-full border-b-[1px] border-[#ccc] rightItem_canvas text-white">
                    <div class="flex mb-[5px]">
                        <h3 class="text-[14px] font-bold fontFamily">R</h3>
                        <input
                            class="input_text_champion r_skill text_field_chamipon flex-1 text-center italic mx-[30px]"
                            type="text" placeholder="Nhập tên skill">
                    </div>
                    <div class="flex">
                        <h3 class="text-[14px] font-bold fontFamily">Mô tả skill</h3>
                        <textarea
                            class="input_text_champion desc_r_skill flex-1 text-center italic mx-[10px] custom-scroll px-[10px]"
                            rows="4" type="text" placeholder="Mô tả skill"></textarea>
                    </div>
                </div>
            </div>
            <div class="absolute right-[50%] top-0 w-[20%] h-[90%] flex flex-col justify-between">
                <div class="w-full h-[20%] border-l-[1px] border-[#888] p-[10px] mt-[20px] ">
                    <div class="w-full h-full flex gap-[10px] justify-between items-center">
                        <div
                            class="w-[80px] h-[80px] border-[1px] border-[#888] flexCenter image_skill hover:opacity-[.7] bg-no-repeat bg-cover bg-center">
                            <input type="file" enctype="multipart/form-data"
                                class="image_intrinsic files_all input_file_champion file_skill hidden"
                                accept="png/jpg">
                            <i class="text-white fa fa-plus"></i>
                        </div>
                        <div
                            class="flex-1 h-full border-[1px] border-[#888] flexCenter video_skill relative hover:opacity-[.7]">
                            <input type="file" enctype="multipart/form-data"
                                class="video_intrinsic files_all input_file_champion hidden file_video_skill"
                                accept="video/*">
                            <video class="absolute inset-0 w-full h-full bg-no-repeat bg-cover bg-center" loop autoplay
                                muted="true">
                            </video>
                            <i class="text-white fa fa-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full h-[20%] border-l-[1px] border-[#888] p-[10px] mt-[20px] ">
                    <div class="w-full h-full flex gap-[10px] justify-between items-center">
                        <div
                            class="w-[80px] h-[80px] border-[1px] border-[#888] flexCenter image_skill hover:opacity-[.7] bg-no-repeat bg-cover bg-center">
                            <input type="file" enctype="multipart/form-data"
                                class="image_q files_all input_file_champion file_skill hidden" accept="png/jpg">
                            <i class="text-white fa fa-plus"></i>
                        </div>
                        <div
                            class="flex-1 h-full border-[1px] border-[#888] flexCenter video_skill relative hover:opacity-[.7]">
                            <input type="file" enctype="multipart/form-data"
                                class="video_q files_all input_file_champion hidden file_video_skill" accept="video/*">
                            <video class="absolute inset-0 w-full h-full bg-no-repeat bg-cover bg-center" loop autoplay
                                muted="true">
                            </video>
                            <i class="text-white fa fa-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full h-[20%] border-l-[1px] border-[#888] p-[10px] mt-[20px] ">
                    <div class="w-full h-full flex gap-[10px] justify-between items-center">
                        <div
                            class="w-[80px] h-[80px] border-[1px] border-[#888] flexCenter image_skill hover:opacity-[.7] bg-no-repeat bg-cover bg-center">
                            <input type="file" enctype="multipart/form-data"
                                class="image_w files_all input_file_champion file_skill hidden" accept="png/jpg">
                            <i class="text-white fa fa-plus"></i>
                        </div>
                        <div
                            class="flex-1 h-full border-[1px] border-[#888] flexCenter video_skill relative hover:opacity-[.7]">
                            <input type="file" enctype="multipart/form-data"
                                class="video_w files_all input_file_champion hidden file_video_skill" accept="video/*">
                            <video class="absolute inset-0 w-full h-full bg-no-repeat bg-cover bg-center" loop autoplay
                                muted="true">
                            </video>
                            <i class="text-white fa fa-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full h-[20%] border-l-[1px] border-[#888] p-[10px] mt-[20px] ">
                    <div class="w-full h-full flex gap-[10px] justify-between items-center">
                        <div
                            class="w-[80px] h-[80px] border-[1px] border-[#888] flexCenter image_skill hover:opacity-[.7] bg-no-repeat bg-cover bg-center">
                            <input type="file" enctype="multipart/form-data"
                                class="image_e files_all input_file_champion file_skill hidden" accept="png/jpg">
                            <i class="text-white fa fa-plus"></i>
                        </div>
                        <div
                            class="flex-1 h-full border-[1px] border-[#888] flexCenter video_skill relative hover:opacity-[.7]">
                            <input type="file" enctype="multipart/form-data"
                                class="video_e files_all input_file_champion hidden file_video_skill" accept="video/*">
                            <video class="absolute inset-0 w-full h-full bg-no-repeat bg-cover bg-center" loop autoplay
                                muted="true">
                            </video>
                            <i class="text-white fa fa-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full h-[20%] border-l-[1px] border-[#888] p-[10px] mt-[20px] ">
                    <div class="w-full h-full flex gap-[10px] justify-between items-center">
                        <div
                            class="w-[80px] h-[80px] border-[1px] border-[#888] flexCenter image_skill hover:opacity-[.7] bg-no-repeat bg-cover bg-center">
                            <input type="file" enctype="multipart/form-data"
                                class="image_r files_all input_file_champion file_skill hidden" accept="png/jpg">
                            <i class="text-white fa fa-plus"></i>
                        </div>
                        <div
                            class="flex-1 h-full border-[1px] border-[#888] flexCenter video_skill relative hover:opacity-[.7]">
                            <input type="file" enctype="multipart/form-data"
                                class="video_r files_all input_file_champion hidden file_video_skill" accept="video/*">
                            <video class="absolute inset-0 w-full h-full bg-no-repeat bg-cover bg-center" loop autoplay
                                muted="true">
                            </video>
                            <i class="text-white fa fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <button type="button" id="return_add_champion"
        class=" absolute bottom-[10px] left-[10px] py-[10px] px-[30px] bg-black text-white uppercase fontFamily font-bold hover:text-blue-500">
        Quay lại
    </button>

    <button type="button" id="submit_add_champion"
        class=" absolute bottom-[10px] right-[10px] py-[10px] px-[30px] bg-black text-white uppercase fontFamily font-bold hover:text-blue-500">
        Tiếp tục
    </button>
</div>





<script>
    const $ = document.querySelector.bind(document)
    const $$ = document.querySelectorAll.bind(document)

    const layer_add_champions = $$('.layer_add_champion')
    const submit_add_champion = document.getElementById('submit_add_champion')
    const return_add_champion = document.getElementById('return_add_champion')
    const box_layers = document.getElementById('box_layers')

    


    const filesAddChampion = document.getElementById('file_champion_add');
    const show_champion_add = document.getElementById('show_champion_add');
    const image_skills = $$('.image_skill')
    const file_skills = $$('.file_skill')
    const video_skills = $$('.video_skill')
    const file_video_skills = $$('.file_video_skill')
    const show_banner_champion = $('.show_banner_champion')
    const file_banner_champion = $('.file_banner_champion')

    show_banner_champion.addEventListener('click', () => {
        file_banner_champion.click();
    })

    file_banner_champion.addEventListener('change', (e) => {
        show_banner_champion.style.backgroundImage = `url(${URL.createObjectURL(e.target.files[0])})`
    })
   

    btn_add_champion.addEventListener('click', () => {
        filesAddChampion.click();
    })

    filesAddChampion.addEventListener('change', (e) => {
        show_champion_add.style.backgroundImage = `url(${URL.createObjectURL(e.target.files[0])})`
    })


    image_skills.forEach(item => {
        item.addEventListener('click', () => {
            item.children[0].click();
        })
    })

    file_skills.forEach((item, index) => {
        item.addEventListener('change', (e) => {
            image_skills[index].style.backgroundImage = `url(${URL.createObjectURL(e.target.files[0])})`
        })
    })

    video_skills.forEach(item => {
        item.addEventListener('click', () => {
            item.children[0].click();
        })
    })

    file_video_skills.forEach((item, index) => {
        item.addEventListener('change', (e) => {
            item.nextElementSibling.src = URL.createObjectURL(e.target.files[0])
        })
    })


    const BoxCanvas = document.getElementById('BoxCanvas');

    BoxCanvas.style.width = ( box_layers.offsetWidth * 2 ) + 'px';
    BoxCanvas.style.height = box_layers.offsetHeight + 'px';

    BoxCanvas.innerHTML = `
    <canvas id="CanvasAddChampion" width="${box_layers.offsetWidth * 2}" height="${box_layers.offsetHeight}"></canvas>
    `

    const circle_add_champion = document.getElementById('circle_add_champion')
    const CanvasAddChampion = document.getElementById('CanvasAddChampion')
    const leftItem_canvas = $$('.leftItem_canvas')
    const rightItem_canvas = $$('.rightItem_canvas')
    const ctx = CanvasAddChampion.getContext('2d')



    const LeftCircle = parseInt(circle_add_champion.getBoundingClientRect().left.toFixed(0)) - parseInt(BoxCanvas.getBoundingClientRect().left.toFixed(0)) + (circle_add_champion.offsetWidth / 2)
    const TopCircle = parseInt(circle_add_champion.getBoundingClientRect().top.toFixed(0)) - parseInt(BoxCanvas.getBoundingClientRect().top.toFixed(0)) + (circle_add_champion.offsetHeight / 2)


    leftItem_canvas.forEach( item => {

        const item_bottom = parseInt(item.getBoundingClientRect().bottom).toFixed(0) - parseInt(CanvasAddChampion.getBoundingClientRect().top).toFixed(0)
        const item_right = parseInt(item.getBoundingClientRect().right).toFixed(0) - parseInt(CanvasAddChampion.getBoundingClientRect().left).toFixed(0)
        ctx.moveTo(item_right, item_bottom);
        ctx.lineTo(LeftCircle, TopCircle);

    })

    rightItem_canvas.forEach( item => {

        const item_bottom = parseInt(item.getBoundingClientRect().bottom).toFixed(0) - parseInt(CanvasAddChampion.getBoundingClientRect().top).toFixed(0)
        const item_right = parseInt(item.getBoundingClientRect().left).toFixed(0) - parseInt(CanvasAddChampion.getBoundingClientRect().left).toFixed(0)
        ctx.moveTo(item_right, item_bottom);
        ctx.lineTo(LeftCircle, TopCircle);

    })

    ctx.lineWidth = 1;
    ctx.strokeStyle = "#888";
    ctx.stroke();



    let currentLayer = 0

    return_add_champion.addEventListener('click', () => {
        currentLayer--
        showLayer(currentLayer)
    })

    submit_add_champion.addEventListener('click', () => {
        currentLayer++
        showLayer(currentLayer)
    })
    
    function showLayer (index) {
        submit_add_champion.innerText = 'Tiếp tục'

        if (index >= layer_add_champions.length * 2 - 3) {
            submit_add_champion.innerText = 'Hoàn tất'
        }

        if (index >= layer_add_champions.length * 2 - 2) {
            currentLayer = layer_add_champions.length * 2 - 3

            let error = []
            
            const input_text_champions = document.querySelectorAll('.input_text_champion')
            const input_file_champions = document.querySelectorAll('.input_file_champion')

            input_text_champions.forEach(item => {
                if (item.value === "") {
                    error.push(item)
                }
            })

            input_file_champions.forEach(item => {
                
                if (item.files[0] === undefined) {
                    error.push(item)
                }
            })


            if (error.length > 0) {
                console.log(error);
                Toastify({
                    text: "Vui lòng nhập đầy đủ tất cả các trường !",
                    className: "error",
                    style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                    }
                }).showToast();

                return
            }




            document.getElementById('loading').style.display = 'block'
            const formData = new FormData();
            let dataFile = [
                $('.image_intrinsic').files[0],
                $('.video_intrinsic').files[0],
                $('.image_q').files[0],
                $('.video_q').files[0],
                $('.image_w').files[0],
                $('.video_w').files[0],
                $('.image_e').files[0],
                $('.video_e').files[0],
                $('.image_r').files[0],
                $('.video_r').files[0],
                $('.avatar_champion').files[0],
                $('.file_banner_champion').files[0],
            ]

            const Skills = [
                {
                    name_skill: $('.intrinsic_skill').value,
                    detail_skill: $('.desc_intrinsic_skill').value,
                    image_skill: "",
                    video_skill: ""
                },
                {
                    name_skill: $('.q_skill').value,
                    detail_skill: $('.desc_q_skill').value,
                    image_skill: "",
                    video_skill: ""
                },
                {
                    name_skill: $('.w_skill').value,
                    detail_skill: $('.desc_w_skill').value,
                    image_skill: "",
                    video_skill: ""
                },
                {
                    name_skill: $('.e_skill').value,
                    detail_skill: $('.desc_e_skill').value,
                    image_skill: "",
                    video_skill: ""
                },
                {
                    name_skill: $('.r_skill').value,
                    detail_skill: $('.desc_r_skill').value,
                    image_skill: "",
                    video_skill: ""
                }
            ]
           
            dataFile.forEach(file_item => {
                formData.append('dataFiles', file_item)
            })

            const nameSlug = $('.name_champion').value.replace(/[\s'"]/g, "-").toLowerCase();

            axios.post('{{env('NODE_SERVER')}}/champion/add-champion', {
                name: $('.name_champion').value,
                slug_name: nameSlug,
                nickname: $('.nickname_champion').value,
                position: $('.position_champion').value,
                level: $('.level_champion').value,
                description: $('.desc_champion').value,
                skills: Skills
            })
            .then(response => {
                        axios.post('{{env('NODE_SERVER')}}/champion/update-champion/' + response.data._id, formData)
                    .then(response => {
                        document.getElementById('loading').style.display = 'none'
                        Toastify({
                                text: "Thêm tướng thành công",
                                className: "success",
                                style: {
                                background: "linear-gradient(to right, #00b09b, #96c93d)",
                                }
                            }).showToast();
                    })
                    .catch(error => {

                    })
            })
            .catch(error => {

            })

            return
        }

        if (index < 0) {
            currentLayer = 0
            return
        }

        box_layers.style.transform = `translateX(-${(layer_add_champions[[0]].offsetWidth / 2) * index}px)`
    }

</script>