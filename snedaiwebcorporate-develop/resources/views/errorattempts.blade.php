@if ($retries > 0)
<span> il vous reste {{$retries}} tentatives</span>
@endif
@if ($retries <= 0)
<span> Veuillez réessayer dans <span id="secs" data-time="{{$seconds}}"></span> </span>
@endif