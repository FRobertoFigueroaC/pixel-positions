@props(['employer', 'width' => 90])

{{-- <img src="http://picsum.photos/seed/{{rand(0,1000)}}/{{$width}}" alt="Company Logo" class="rounded-xl"> --}}
<img src="{{asset($employer->logo)}}" alt="Company Logo" class="rounded-xl" width="{{$width}}">