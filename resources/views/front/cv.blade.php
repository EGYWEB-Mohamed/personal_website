@php
    $settings=\App\Models\User::first();
@endphp
@extends('layouts.app',[
  'page_title'=>"السيرة الذاتية",
  'page_description'=>"السيرة الذاتية الخاصة بي"
])
@section('content')
    <div class="col-12 p-0">
        <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2" >
            <iframe src="https://drive.google.com/file/d/1MF20IPRJyzfy32mhEutjL5EpSls0w2Q8/preview" width="100%" height="480" allow="autoplay"></iframe>
        </div>
    </div>
@endsection