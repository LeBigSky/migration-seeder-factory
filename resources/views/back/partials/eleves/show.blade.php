<section class="mt-5">
    <div class="container">
         <div class="container">
        <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('admin.eleves') }}">&#x21A9; BACK</a></button>
      </div>
        <div>
             <h3>Eleve n° {{ $eleve->id}}</h3>
        </div>
         <div class="card w-25">
        <div class="card-body text-center">
          <h5 class="card-title">Nom: {{ $eleve->nom}}</h5>
          <p class="card-text">Prenom: {{ $eleve->prenom }}</p>
          <p class="card-text">Age: {{ $eleve->age }}</p>
          @if ($eleve->employé == 0 )
          <p class="card-text">Employé: Non </p>
          @else
             <p class="card-text">Employé: oui </p> 
          @endif
        </div>
      </div>
    </div>
   
</section>