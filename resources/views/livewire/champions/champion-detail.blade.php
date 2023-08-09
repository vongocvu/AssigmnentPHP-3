@push('Head')
<title>{{$Champion['name']}}, {{$Champion['nickname']}} - Liên Minh Huyền Thoại</title>
@endpush


@include('components.champions.banner-champion', ['Champion' => $Champion])
@include('components.champions.skills-champion' , ['Champion' => $Champion])
@include('components.champions.skins-champion')
@include('components.common.trailer')