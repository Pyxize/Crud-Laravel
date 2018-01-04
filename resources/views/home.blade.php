@include('inc/header')
<div class="container">
    <div class="row">
        <legend>Laravel CRUD </legend>
        @if(session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
        @endif
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Texte</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($article) > 0)
                @foreach($article->all() as $article)

                    <tr class="table-active">
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->titre }}</td>
                        <td>{{ $article-> texte }}</td>
                        <td><a href='{{ url("/read/{$article->id}") }}' class="label label-primary" >Lire</a> |
                            <a href='{{ url("/update/{$article->id}") }}' class="label label-primary" >Modifier </a>|
                            <a href='{{ url("/delete/{$article->id}") }}' class="label label-primary" >Supprimer </a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
@include('inc/footer')
