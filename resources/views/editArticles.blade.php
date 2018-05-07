@include('head')
@include('top')
<div class="formulario">
    {!! Form::model($article,['route' => ['admin.update', $article->id],'method' => 'PUT']) !!}
        {!! Form::label('title','Título')!!}<br><br>
        {!! Form::text('title')!!}<br><br>
        {!! Form::label('content','Contenido')!!}<br><br>
        {!! Form::textarea('content')!!}<br><br>
        {!! Form::submit('Guardar')!!}
    {!! Form::close() !!}
</div>
@include('bottom')