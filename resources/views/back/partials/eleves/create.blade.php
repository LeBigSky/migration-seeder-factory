<section class="mt-5">
    <div class="container">
 <form action={{ route('store.eleve') }} method="POST">
    @csrf
    <h2>AJOUTER UN NOUVEL ELEVE</h2>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="string" class="form-control" name="nom" aria-describedby="">
          <div id="" class="form-text">Vos données sont entre de bonnes mains, faites nous confiance...</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Prenom</label>
          <input type="text-area" class="form-control" name='prenom'>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Age</label>
          <input type="number" class="form-control" name='age'>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Salarié</label>
          <select name="employé" id="">
            <option value={{ 1 }}>oui</option>
            <option value={{ 0 }}>non</option>
          </select>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="">
          <label class="form-check-label" for="eleves">Confirmer</label>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
    </div>
</section>