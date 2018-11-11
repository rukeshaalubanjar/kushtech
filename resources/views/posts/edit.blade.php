@extends('main')
@section('title','|Edit blog')
@section('content')

<div class="row">
{!!Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}
 <div class="col-md-8">
 {{Form::label('title','Title:')}}
    {{Form::text('title',null,["class"=>'form-control'])}}
    {{Form::label('body','Body:',['class'=>'form-spacing-top'])}}
    {{Form::textarea('body',null, ['class'=>'form-control'])}}

 </div>

<div class="col-md-4">
<div class="well">
<dl class="dl-horizontal">
<dt>Created At:</dt>
<dd>{{date('M j,y h:ia',strtotime($post->created_at))}}</dd>
</dt>
<dl class="dl-horizontal">
<dt>Last Updated:</dt>
<dd>{{date('M j,y h:ia',strtotime($post->updated_at))}}</dd>
</dt>
<hr>

<div class="row">
    <div class="col-md-6">
    {!!Html::linkRoute('posts.show','cancel',array($post->id),array('class'=>'btn btn-danger btn-block'))!!}
    </div>
    <div class="col-md-6">
    {{Form::submit('save changes',['class'=>'btn btn-success btn-block'])}}
   
    </div>
</div>


</div>
</div>
{!!Form::close()!!}
</div>

@stop