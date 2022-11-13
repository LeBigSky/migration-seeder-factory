
    <section class="mt-5">
        <div class="container">
          <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('batiment.create') }}">CREER  &#10133;</a></button>
        </div>
          <div class="container text-center">
              <table class="table">
              <thead>
                <tr class=>
                  <th scope="col">Numero</th>
                  <th scope="col">Formation</th>
                  <th scope="col">Description</th>
                  <th scope="col">Aperçus</th>
                  <th scope="col">Modifier</th>
                  <th scope="col">Supprimer</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($formations as $b )
                <tr class="table-warning">
                  <th scope="row">{{ $b->id }}
                  </th>
                  <td>{{ $b->nom }}</td>
                  <td>{{ $b->description }}</td>
                  <td><button class="btn btn-info">Show</button></td>
                  <td><button class="btn btn-success">Edit</button></td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
      </section>
  </section>
