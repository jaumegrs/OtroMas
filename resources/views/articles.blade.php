@include('head')
@include('top')
<section>
    <ul>
    @foreach($articles as $article)
        <li class="articletitle">{!!$article->title!!}</li>
        <li class="articlecontent">{!!$article->content!!}</li>
        <li class="buttonedit">{!!link_to_route('admin.edit', $title='Editar', $parameters=$article->id)!!}
        {!! Form::model($article,['route' => ['admin.destroy', $article->id],'method' => 'DELETE']) !!}
        {!! Form::hidden('id')!!}
        {!! Form::submit('Eliminar')!!}
    {!! Form::close() !!}
        </li>
    @endforeach
    </ul>
</section>
@include('bottom')