@include('layouts.flash')
<section class="mt-5">
  <div class="container">
<form action="/eleve/update/{{ $eleve->id }}"method="POST">
  @csrf
  <h2>MODIFER UN ELEVE</h2>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom</label>
        <input type="string" class="form-control" name="nom" aria-describedby="" value="{{ $eleve->nom }}">
        <div id="" class="form-text">Vos données sont entre de bonnes mains, faites nous confiance...</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Prenom</label>
        <input type="text-area" class="form-control" name='prenom' value="{{ $eleve->prenom }}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Age</label>
        <input type="number" class="form-control" name='age' value="{{ $eleve->age }}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Salarié</label>
        <select name="employé" id="" value="{{ $eleve->employé }}">
          <option value={{ 1 }}>oui</option>
          <option value={{ 0 }}>non</option>
        </select>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="">
        <label class="form-check-label" for="eleves">Confirmer</label>
      </div>
      <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
  </div>
</section>
