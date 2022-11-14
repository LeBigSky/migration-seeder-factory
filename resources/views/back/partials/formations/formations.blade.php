@include('layouts.flash')
    <section class="mt-5">
        <div class="container">
          <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('formation.create') }}">CREER  &#10133;</a></button>
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
                  <td><a href="/formation/show/{{ $b->id }}"><button class="btn btn-info">Show</button></td>
                    <td><a href="/formation/edit/{{ $b->id }}"><button class="btn btn-success">Edit</button></a></td>
                    <td><form action="/formation/delete/{{ $b->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input class="btn btn-danger" type="submit" value="Delete">
                  </form>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
      </section>
  
