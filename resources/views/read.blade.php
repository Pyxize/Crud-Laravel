@include('inc/header')
<div class="container" style="margin-top: 50px; display: flex; justify-content: center">
    <div class="row">
    <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
        <div class="card-header">Article: {{ $article->id }}</div>
        <div class="card-body">
            <h4 class="card-title">{{ $article->titre }}</h4>
            <p class="card-text">{{ $article->texte }}</p>
        </div>
    </div>
    </div>
</div>
@include('inc/footer')