@php
$settings  = \App\Models\User::first();
$clients = \App\Models\Client::orderBy('id','DESC')->paginate();
@endphp
@extends('layouts.app',[
  'page_title'=>"معرض العملاء",
  'page_description'=>"معرض عملاء ".$settings->name
])
@section('content')
<div class="col-12 p-0">
  <div class="col-12 row p-2">
    @foreach($clients as $client)
    <div class="col-12 col-12 col-md-6 col-lg-3 ">
      <a href="{{route('front.client.show',$client)}}" class="d-block">
        <div class="col-12 p-0 ">
          <img  src="{{$client->image()}}" style="width:100%">
          <div class="col-12 p-2 text-center ">
            <h2 style="font-size:15px;line-height: 1.8;">{{$client->title}}</h2>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  <div class="col-12 p-3">
    {{$clients->links()}}
  </div>
</div>
@endsection