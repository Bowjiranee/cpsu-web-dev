@extends('main2')

@section('title', "บุคลากรสายวิชาการ")
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ URL::asset('css/new_theme/research.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('research-modal/css/bootstrap.min.css') }}"/>

        <div class="container-content">
            <ul class="wrapper-nav">
                <li class="list-nav">
                    <a href="{{url("")}}">
                        <img src="{{ URL::asset('image/home-nav.svg') }}" class="image-home-list-nav">
                    </a>
                </li>
                <li class="list-nav">
                    <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
                </li>
                <li class="list-nav"><a href="{{url("person")}}">บุคลากร</a></li>
                <li class="list-nav">
                    <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
                </li>
                <li class="list-nav"><a href="{{url("teacher")}}">บุคลากรสายวิชาการ</a></li>
                <li class="list-nav"><a href="{{url("teacher/$teacher_read->id")}}">{{$teacher_read->name_th}}</a></li>
                <li class="list-nav">
                    <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
                </li>
                <!-- name Teacher-->
                <li class="list-nav">ผลงานวิจัย</li> <hr> 
            </ul>
<!------------------------------------------------------------------------------------------------------------------------------------->
                <div class="row">
                    <div class="col-sm-2.9" style="background-color: #117167;border-radius: 20px 10px;">
                        <p class="name-th-card-read-person" style="text-align: center; color: #fff; margin-bottom: 15px;">อ.ดร.ณัฐโชติ พรหมฤทธิ์</p>
                    </div>
                    <div class="col-sm-7"> <!-- ข้อมูล research -->
                        <div id="app">
                            <div class="container" style="font-size:16px">
                                <main class="py-4">
                                    <h3>ข้อมูลผลงานวิจัย</h3>
                                        @if(count($sendPost)>0)
                                            @foreach($sendPost as $post)
                                                <div class="card bg-light mb-3" style="max-width: 96rem;">
                                                    <div class="card-body">
                                                        <h5  style="font-size:15px">{{$post->info}}</h5>
                                                        <small>{{$post->created_at}}</small>
                                                    </div>
                                                </div>
                                                <div class="container" style="margin-bottom:10px"> <!-- Button -->
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <a href="/researchDetail/{{$post->id}}/edit" class="btn btn-primary" style="width:75px;font-size:12px">Edit</a>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <form method="post" class="delete_form" action="{{action('ResearchDetailsController@destroy', $post['id'])}}">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="_method" value="DELETE" />
                                                                <button type="submit" class="btn btn-danger"  style="width:75px;font-size:12px">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{$sendPost->links()}}
                                        @else 
                                            <p>Not posts found</p>
                                        @endif

                                </main>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <!-- recent posts -->
                        <div class="container">
                            <div class="dropdown" style="float: right">
                                <a href="/researchDetail/create" class="btn btn-success" role="button" style="margin-right:5px;font-size:15px;margin-bottom:5px">Add Research</a>
                                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;font-weight: 2px">
                                        ORDER BY
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <div id="recents"><a class="dropdown-item" href="#">Recent Posts</a></div>
                                <div id="byolds"><a class="dropdown-item" href="#">Order By Old</a></div>

                                </div>    
                            </div>
                        </div>                        
                    </div>

                </div>
<!------------------------------------------------------------------------------------------------------------------------------------->
@endsection