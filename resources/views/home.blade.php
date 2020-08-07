@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4" >
            <img src="/image/foodlebg.jpg" class="rounded-circle" height="150px" width="150px">
        </div>
        <div class="col-9 pt-4">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>54.5k</strong> Followers</div>
                <div class="pr-5"><strong>310</strong> Posts</div>
            </div>
            <div class="pt-4">
                {{$user->profile->description}}
            </div>

        </div>
    </div>
   <div class="row" style="border-top:1px solid gray;">
       <div class="col-4 pt-3">
           <img src="https://instagram.fktm13-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.746.746a/s640x640/116362545_618124912453256_2781481867424758391_n.jpg?_nc_ht=instagram.fktm13-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=aU4Na0InbXgAX9fxAyC&oh=42b222378857a2806750fde872ffaed8&oe=5F51F46A" class="w-100" >
       </div>
       <div class="col-4  pt-3">
           <img src="https://instagram.fktm13-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.746.746a/s640x640/116362545_618124912453256_2781481867424758391_n.jpg?_nc_ht=instagram.fktm13-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=aU4Na0InbXgAX9fxAyC&oh=42b222378857a2806750fde872ffaed8&oe=5F51F46A" class="w-100">
       </div>
       <div class="col-4  pt-3">
           <img src="https://instagram.fktm13-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.746.746a/s640x640/116362545_618124912453256_2781481867424758391_n.jpg?_nc_ht=instagram.fktm13-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=aU4Na0InbXgAX9fxAyC&oh=42b222378857a2806750fde872ffaed8&oe=5F51F46A" class="w-100">
       </div>
   </div>
</div>
@endsection
