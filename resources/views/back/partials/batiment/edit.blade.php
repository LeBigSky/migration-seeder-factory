    <section class="mt-5">
        <div class="container">
     <form action="/batiment/update/{{ $batiment->id }}" method="POST">
        @csrf
        <h2>MODIFIER UN BATIMENT</h2>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom</label>
              <input type="string" class="form-control" name="nom" aria-describedby="nom" value="{{ $batiment->nom }}">
              <div id="emailHelp" class="form-text">Vos données sont entre de bonnes mains, faites nous confiance...</div>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text-area" class="form-control" name='description' value="{{ $batiment->description }}">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Confirmer</label>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
        </div>
    </section>
