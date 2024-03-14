@extends('layouts.app')

<div class="container">
<form action="{{route('comics.store')}}" method="POST" class="row g-3">
    @csrf
    <div class="col-4">
      <label for="Title" class="form-label">Titolo:</label>
      <input type="text" class="form-control" name="title" >
    </div>
    <div class="col-8">
        <label for="Description" class="form-label">Descrizione:</label>
        <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
      </div>
    <div class="col-12">
      <label for="thumb" class="form-label">Immagine:</label>
      <input type="text" class="form-control" name="thumb">
    </div>
    <div class="col-4">
      <label for="price" class="form-label">Prezzo:</label>
      <input type="text" class="form-control" name="price">
    </div>
    <div class="col-4">
      <label for="price" class="form-label">Serie:</label>
      <input type="text" class="form-control" name="series">
    </div>
    <div class="col-4">
      <label for="inputCity" class="form-label">Data di uscita:</label>
      <input type="text" class="form-control" name="sale_date">
    </div>
    <div class="col-4">
      <label for="inputState" class="form-label">Genere:</label>
      <input type="text" class="form-control" name="type">
    </div>
    <div class="col-4">
      <label for="inputZip" class="form-label">Artista/Artisti:</label>
      <input type="text" class="form-control" name="artists">
    </div>
    <div class="col-4">
      <label for="inputZip" class="form-label">Scrittore/Scrittice:</label>
      <input type="text" class="form-control" name="writers">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Vai</button>
    </div>
  </form>
</div>