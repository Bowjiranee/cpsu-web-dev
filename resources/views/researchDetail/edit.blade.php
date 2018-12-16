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
<h1>Edit Research</h1>
		{!! Form::open(['action' => ['ResearchDetailsController@update',$show->id],'method' => 'POST']) !!} <!--Opening Form-->

			<div class="form-group">
				{{Form::label('info','Input Research')}}
				{{Form::textarea('info', $show->info,['class' => 'form-control' , 'placeholder' => 'body'])}}

                {{Form::label('publication','Input Publication')}}
				{{Form::text('publication', $show->publication,['class' => 'form-control' , 'placeholder' => 'publication'])}}
			</div>

		<div  style="margin-bottom: 50px">
			{{Form::hidden('_method','PUT')}}
			{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    		{!! Form::close() !!}
    	    <a href="/researchDetail" class="btn btn-warning"  style="width:100px">Go Back</a>	
		</div>
<!------------------------------------------------------------------------------------------------------------------------------------->
@endsection