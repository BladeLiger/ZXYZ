@extends('layouts.app')

@section('content')
@include('extends.nav-welcome')
<style type="text/css">
	p{
		color: #000;
	}
</style>
<div class="container">
	<h1>{{$pub['titulo']}}</h1>
	<p>{!!$pub['contenido']!!}</p>        
</div>

<div class="container">
@foreach (array_chunk($pub['album_multimedia'],3) as $courseRow)
    <div class="row-fluid team">
    @foreach ($courseRow as $course)
    	@if(!filter_var($course, FILTER_VALIDATE_URL) === false)
    		<?php 
    			$course = str_replace('watch?v=', 'embed/', $course);
    		?>	
    		<center>
    			<iframe width="560" height="315" src="{{$course}}" frameborder="0" allowfullscreen></iframe>
    		</center>
		@else
        <div class="span4" id="first-person">
            <div class="thumbnail animated fadeInDown">
                <img src="data:image/jpeg;base64,{{$course}}"  alt="photo" style="width:640px;height:230px;">
                <h3>John Doe</h3>
                <ul class="social">
                    <li>
                        <a href="">
                            <span class="icon-facebook-circled"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon-twitter-circled"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon-linkedin-circled"></span>
                        </a>
                    </li>
                </ul>
                <div class="mask">
                    <h2>Copywriter</h2>
                    <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                </div>
            </div>
        </div>
        @endif
     @endforeach
    </div>
@endforeach
</div>


@endsection