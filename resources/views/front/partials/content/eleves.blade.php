<section class="mt-5">
    <div class="container text-center">
        <table class="table">
        <thead>
          <tr class=>
            <th scope="col">Matricule</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Age</th>
            <th scope="col">Salarié</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($eleves as $b )
            @if ($b->id %2 != 0)
            <tr class="table-warning">
              <th scope="row">{{ $b->id }}
              </th>
              <td>{{ $b->nom }}</td>
              <td>{{ $b->prenom }}</td>
              <td>{{ $b->age }}</td>
              @if ($b->employé == 0)
              <td class="table-danger border border-2 border-danger" >Non</td>
              @else
              <td class="table-success" >Oui</td>
              @endif
            </tr>
            @else
            <tr class="table-secondary">
              <th scope="row">{{ $b->id }}
              </th>
              <td>{{ $b->nom }}</td>
              <td>{{ $b->prenom }}</td>
              <td>{{ $b->age }}</td>
              @if ($b->employé == 0)
              <td class="table-danger border border-2 border-danger" >Non</td>
              @else
              <td class="table-success" >Oui</td>
              @endif
            </tr>
            @endif
            @endforeach
        </tbody>
      </table>
    </div>
</section>