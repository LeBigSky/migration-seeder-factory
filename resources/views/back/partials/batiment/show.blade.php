<section class="mt-5">
    <div class="container">
         <div class="container">
        <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('admin.batiments') }}">&#x21A9; BACK</a></button>
      </div>
        <div>
             <h3>Batiment n° {{ $batiment->id}}</h3>
        </div>
         <div class="card w-25">
        <div class="card-body text-center">
          <h5 class="card-title">Nom: {{ $batiment->nom}}</h5>
          <p class="card-text">Description: {{ $batiment->description }}</p>
        </div>
      </div>
    </div>
   
</section>