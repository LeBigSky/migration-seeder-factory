@include('layouts.flash')
<section class="mt-5">
    <div class="container">
 <form action={{ route('store.batiment') }} method="POST">
    @csrf
    <h2>AJOUTER UN NOUVEAU BATIMENT</h2>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="string" class="form-control" name="nom" aria-describedby="" value="{{ old('nom') }}">
          <div id="" class="form-text">Vos données sont entre de bonnes mains, faites nous confiance...</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text-area" class="form-control" name='description' value="{{ old('description') }}">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="">
          <label class="form-check-label" for="batiment">Confirmer</label>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
    </div>
</section>