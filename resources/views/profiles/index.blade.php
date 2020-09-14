@extends('layouts.app')

@section('content')
<div class="container">

   <div class="row">
       <div class="col-3 p-3">
            <img src="{{$user->profile->profileImage()}}"  class="rounded-circle w-100">
           </div>
       <div class="col-9">
           <div class="p-2 d-flex justify-content-between align-items-baseline">
               <div class="d-flex align-items-center pb-2">
               <div class="h4">{{$user->username}}</div>
                   <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
               </div>

               @can('update',$user->profile)
               <a href="/p/create"> Add a new post</a>
               @endcan

           </div>
           @can('update',$user->profile)
           <a class="p-2" href="/profile/{{$user->id}}/edit"> Edit Profile</a>
           @endcan
           <div class="d-flex">
               <div class="p-2"><strong class="pr-1">{{$postCount}}</strong>Post</div>
               <div class="p-2"><strong class="pr-1">{{$followersCount}}</strong>Followers</div>
               <div class="p-2"><strong class="pr-1">{{$followingCount}}</strong>Following</div>
           </div>
           <div class="pt-2 pl-2"><b>{{$user->profile->title}}</b></div>
           <div class="pl-2">{{$user->profile->description}}</div>
           <div class="pl-2"><a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>


       </div>

       <div class="row p-3" >
           @foreach($user->posts as $post)
           <div class="col-4 p-2 " >
               <a href="/p/{{$post->id}}">
               <img src="/storage/{{$post->image}}"  class="w-100 ">
               </a>
           </div>

           @endforeach

       </div>

   </div>

</div>
@endsection
