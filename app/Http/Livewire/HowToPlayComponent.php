<?php

namespace App\Http\Livewire;

use Livewire\Component;





class HowToPlayComponent extends Component
{

    public $dataChampions = array(
        array(
            'name' => 'MISS FORTUNE',
            'nick_name' => 'Thợ săn tiền thưởng',
            'url_image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/MissFortune_0.jpg',
            'position' => 4,
            'suggest_land' => 4,
            'description' => 'Miss Fortune hạ gục kẻ địch bằng những đòn đánh với sức công phá chẳng khác gì đại bác. Cô có thể bắn lẻ từng phát hoặc tung ra một cơn mưa đạn trong giao tranh tổng.'
        ),
        array(
            'name' => 'LUX',
            'nick_name' => 'Tiểu thư ánh ',
            'url_image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lux_0.jpg',
            'position' => 3,
            'suggest_land' => 3,
            'description' => 'Lux tấn công kẻ địch từ xa, trói chân kẻ địch tại chỗ để tung ra những đòn đánh chói lòa. Chiêu cuối trong kho tàng phép thuật của cô là tuyệt chiêu bắn ra một dải ánh sáng khổng lồ.'
        ),
        array(
            'name' => 'Darius',
            'nick_name' => 'Đại tướng ',
            'url_image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Darius_0.jpg',
            'position' => 1,
            'suggest_land' => 1,
            'description' => 'Darius tàn sát kẻ địch với sự tàn bạo hiếm ai sánh bằng. Hắn chém xuyên qua cùng lúc nhiều kẻ địch, rồi kết liễu chúng một cách không thương tiếc.'
        ),
        array(
            'name' => 'Ahri',
            'nick_name' => 'Hồ ly chín  ',
            'url_image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_0.jpg',
            'position' => 1,
            'suggest_land' => 1,
            'description' => 'Ahri qua mặt kẻ địch bằng những pha lả lướt và bứt tốc. Phép thuật mê hoặc của cô thu hút kẻ địch, khiến chúng đuổi quá sâu và để lộ sơ hở.'
        ),
        array(
            'name' => 'Master Yi',
            'nick_name' => 'Kiếm sư Wuju ',
            'url_image' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/MasterYi_0.jpg',
            'position' => 1,
            'suggest_land' => 1,
            'description' => 'Master Yi tấn công nhanh gọn và quyết liệt. Anh lao vào giữa cuộc giao tranh với tốc độ chóng mặt để tấn công mục tiêu hoặc để khéo léo né tránh đòn phản công của kẻ địch.'
        ),

    );

    public function render()
    {
        return view('livewire.how_to_play', ['data' => $this->dataChampions])
            ->extends('layouts.mainLayout')
            ->slot('main');
    }
}
