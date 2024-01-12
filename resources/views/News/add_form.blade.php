
<h2>{{ time() }}</h2>

{{--to add comment in php  --}}

{{--your name is: {{$name}}

{{--
your age is: {{$age}}
to view dictionary--}}



@if ($obj->age == 33)
 <h2>your age = 20</h2>
    @elseif ($obj->age == 50)
        <h3>your age = 20</h3>
    @else
    <h4>no data</h4>
@endif


your name is: {{$obj->name}}
your age is: {{$obj->age}} 

--}}

@for ($i=0 ; $i<=5 ; $i++)
    <li>{{$i}}</li>
@endfor

@if(count($data) != 0)//badl kol elcode da hst5dem forelse
@foreach($data as $key=>$item)
<p>{{$key}} = {{$item}}</p>
@endforeach
@else
    <p>empty foreach</p>
@endif



@forelse($data as $key=>$item)
@empty
    <p>empty data</p>
@endforelse
<?php //irnfk ?>