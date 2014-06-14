<h1>All Tasks</h1>
<p> {{link_to_route('kids.create', 'Add new kid')}}</p>
@if(Session::has('message'))
     <p class="alert">{{ Session::get('message') }}</p>
@endif
{{$kid->fullname}}

{{$kid->username}}

{{$kid->points}}