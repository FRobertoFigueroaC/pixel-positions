@props(['logo' => '', 'width' => 90])

{{-- <img src="http://picsum.photos/seed/{{rand(0,1000)}}/{{$width}}" alt="Company Logo" class="rounded-xl"> --}}
<img src="{{$logo}}" alt="Company Logo" class="rounded-xl" width="{{$width}}">