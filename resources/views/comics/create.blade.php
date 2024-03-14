@extends('layouts.app')
<div id="create-form">
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div>
        <h4>Titolo</h4>
    <label for="title">
        <input type="text" name="title"> 
    </label>
    </div>
    <div>
        <h4>Descrizione</h4>
    <label for="description">
        <input type="text" name="description"> 
    </label>
    </div>
    <div>
        <h4>Immagine</h4>
    <label for="image">
        <input type="text" name="thumb"> 
    </label>
    </div>
    <div>
        <h4>Prezzo</h4>
    <label for="price">
        <input type="text" name="price"> 
    </label>
</div>
<div>
    <h4>Serie</h4>
    <label for="serie">
        <input type="text" name="series"> 
    </label>
</div>
<div>
    <h4>Data rilascio</h4>
    <label for="sale">
        <input type="text" name="sale_date"> 
    </label>
</div>
<div>
    <h4>Genere</h4>
    <label for="type">
        <input type="text" name="type"> 
    </label>
</div>
<div>
    <h4>Artista/Artisti</h4>
    <label for="artists">
        <input type="text" name="artists"> 
    </label>
</div>
<div>
    <h4>Scrittore/Scrittori</h4>
    <label for="writers">
        <input type="text" name="writers"> 
    </label>
</div>
    <input type="submit" value="Invia">
</form>
</div>