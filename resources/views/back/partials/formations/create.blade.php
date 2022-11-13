<section class="mt-5">
    <div class="container">
 <form action={{ route('store.batiment') }} method="POST">
    @csrf
    <h2>AJOUTER UN NOUVEAU BATIMENT</h2>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="string" class="form-control" name="nom" aria-describedby="">
          <div id="" class="form-text">Merci de ne pas choisir de noms a fortes polémique.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text-area" class="form-control" name='description'>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="">
          <label class="form-check-label" for="batiment">Confirmer</label>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
    </div>
</section>