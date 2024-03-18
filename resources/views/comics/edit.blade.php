@extends('layouts.app')
<h1 class="text-center">Modifica un fumetto!</h1>
<div class="container">
<form action="{{route('comics.update' , $comic->id)}}" method="POST" class="row g-3">
    @csrf
    @method('PUT')
    <div class="col-4">
      <label for="Title" class="form-label">Titolo:</label>
      <input value="{{$comic->title}}" type="text" class="form-control" name="title" >
    </div>
    <div class="col-8">
        <label for="Description" class="form-label">Descrizione:</label>
        <textarea value="{{$comic->description}}" name="description" class="form-control" aria-label="With textarea"></textarea>
      </div>
    <div class="col-12">
      <label for="thumb" class="form-label">Immagine:</label>
      <input value="{{$comic->thumb}}" type="text" class="form-control" name="thumb" placeholder="Inserisci un url per aggiungere un'immagine.">
    </div>
    <div class="col-4">
      <label for="price" class="form-label">Prezzo:</label>
      <input value="{{$comic->price}}"  type="text" class="form-control" name="price">
    </div>
    <div class="col-4">
      <label for="price" class="form-label">Serie:</label>
      <input value="{{$comic->series}}" type="text" class="form-control" name="series">
    </div>
    <div class="col-4">
      <label for="inputCity" class="form-label">Data di uscita:</label>
      <input value="{{$comic->sale_date}}" type="text" class="form-control" name="sale_date">
    </div>
    <div class="col-4">
      <label for="inputState" class="form-label">Genere:</label>
      <input value="{{$comic->type}}" type="text" class="form-control" name="type">
    </div>
    <div class="col-4">
      <label for="inputZip" class="form-label">Artista/Artisti:</label>
      <input value="{{$comic->artists}}" type="text" class="form-control" name="artists">
    </div>
    <div class="col-4">
      <label for="inputZip" class="form-label">Scrittore/Scrittice:</label>
      <input value="{{$comic->writers}}" type="text" class="form-control" name="writers">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Vai</button>
    </div>
  </form>
</div>