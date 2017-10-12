@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2>Moja prva Laravel aplikacija !!! </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> Kreiraj novi artikl !</a>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="100">Redni br.</th>
            <th>Naziv artikla </th>
            <th>Opis artikla </th>
            <th width="300px">Akcija</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $article->title}}</td>
                <td>{{ $article->body}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Prikaži</a>
                    <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Ažuriraj</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['articles.destroy', $article->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {!! $articles->links() !!}
@endsection