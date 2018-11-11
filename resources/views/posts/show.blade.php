@extends('main')
@section('title','|view post')
@section('content')
<div class="row">
<div class="col-md-8">

<h1>{{$post->title }} </h1>
<p class='lead'>{{$post ->body}}</p>
</div>

<div class="cpl-md-4">
<div class="well">
<dl class="dl-horizontal">
<dt>Create At:</dt>
<dd>{{date('M j,k',strtotime($post->created_at))}}</dd>
</dt>
<dl class="dl-horizontal">
<dt>Last Updated:</dt>
<dd>{{date('',strtotime($post->updated_at))}}</dd>
</dt>
<hr>

<div class="row">
    <div class="col-md-6">
    {!!Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block'))!!}
    </div>
    <div class="col-md-6">
    {!!Html::linkRoute('posts.destroy','Delete',array($post->id),array('class'=>'btn btn-danger btn-block'))!!}
    </div>
</div>


</div>
</div>

</div>


@endsection