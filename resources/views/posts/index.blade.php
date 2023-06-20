@extends('layouts.login')

@section('content')
{!! Form::open(['url' => 'post/create']) !!}
<div class="form-group">
  {!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '何をつぶやこうか…？']) !!}
</div>
<button type="submit" class="btn btn-success pull-left">投稿ボタン</button>
{!! Form::close() !!}

@foreach ($posts as $post)
<tr>
  <td>{{ $post->id }}</td>
  <td>{{ $post->posts }}</td>
  <td>{{ $post->created_at }}</td>
</tr>
@endforeach

@endsection
