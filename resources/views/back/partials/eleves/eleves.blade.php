<section class="mt-5">
    <div class="container">
        <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('eleves.create') }}">CREER  &#10133;</a></button>
      </div>
    <div class="container text-center">
        <table class="table">
        <thead>
          <tr class=>
            <th scope="col">Matricule</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Age</th>
            <th scope="col">Salarié</th>
            <th scope="col">Aperçus</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
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
              <td><a href="/eleve/show/{{ $b->id }}"><button class="btn btn-info">Show</button></td>
                <td><a href="/eleve/edit/{{ $b->id }}"><button class="btn btn-success">Edit</button></a></td>
                <td><form action="/eleve/delete/{{ $b->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger" type="submit" value="Delete">
              </form>
            </td>
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
              <td><a href="/eleve/show/{{ $b->id }}"><button class="btn btn-info">Show</button></a></td>
                <td><a href="/eleve/edit/{{ $b->id }}"><button class="btn btn-success">Edit</button></></td>
                <td><form action="/eleve/delete/{{ $b->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger" type="submit" value="Delete">
              </form>
            </td>
            </tr>
            @endif
            @endforeach
        </tbody>
      </table>
    </div>
</section>