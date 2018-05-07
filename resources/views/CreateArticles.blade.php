@include('head')
@include('top')
<div class="formulario">
{!! Form::open(['route' => 'admin.store', 'method' => 'POST']) !!}
    {!! Form::label('title','Título')!!}<br><br>
    {!! Form::text('title')!!}<br><br>
    {!! Form::label('content','Contenido')!!}<br><br>
    {!! Form::textarea('content')!!}<br><br>
    {!! Form::submit('Guardar')!!}
{!! Form::close() !!}
</div>
@include('bottom')