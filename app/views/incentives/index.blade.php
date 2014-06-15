@if(Session::has('message'))
<p class="alert">
	{{ Session::get('message') }}
</p>
@endif

@foreach($incentives as $incentive)
{{$incentive->name}}
{{$incentive->worth}}
@if($user->type=='kid')
@if($incentive->purchased)
<p>
	you already purchased this item
</p>
@else
<a href="{{URL::route('incentives.purchase',array($incentive->id))}}">Purchase</a>
@endif
@endif
@endforeach
@if($user->type=='parent')
<a href="{{URL::route('incentives.create')}}">Add incentive</a>
@endif