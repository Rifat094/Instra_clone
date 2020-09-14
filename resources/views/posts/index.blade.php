@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="d-flex pb-5">
            <div class="col-4">
                <div class="d-flex align-items-center-center">
                    <div class="pr-3 pt-2">
                        <img src="{{$post->user->profile->profileImage()}}"class="rounded-circle w-100" style="max-width: 80px">
                    </div>
                    <div>
                        <div class="font-weight-bold pt-3">
                            <a href="/profile/{{$post->user->id}}">
                                <span class="text-dark"> {{$post->user->username}}</span>
                            </a>
                            <br>
                            <p>{{$post->time}}</p>

                            <!--a href="#"class="pl-4">Follow</a-->

                        </div>
                    </div>
                </div>

                <hr>

                <div>
                    <p><span class="font-weight-bold pt-3">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-dark"> {{$post->user->username}}</span>
                                </a>
                            </span>
                        {{$post->caption}}</p>
                </div>



            </div>

            <div class="row  pl-5">
                <div class="col-8">
                    <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}" style="max-height: 500px" alt=""></a>
                </div>
            </div>

            </div>

        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}

            </div>

        </div>
    </div>
@endsection
