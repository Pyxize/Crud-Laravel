@include('inc/header')
@include('flash::message')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="{{ url('/edit', array($article->id)) }}">
                <fieldset>
                    <legend>Laravel CRUD </legend>
                    @if(count($errors) >0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group row">

                        <div class="col-sm-10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input type="texte" name="titre" class="form-control" value="<?php echo $article->titre; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre titre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Texte</label>
                        <textarea name="texte" id=""  cols="30" rows="10" class="form-control"><?php echo $article->texte; ?></textarea>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="{{  url('/') }}" class="btn btn-primary">Retour</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc/footer')