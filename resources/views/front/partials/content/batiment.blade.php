<section class="mt-5">
    <div class="container text-center">
        <table class="table">
        <thead>
          <tr class=>
            <th scope="col">Numero</th>
            <th scope="col">Bâtiment</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($batiments as $b )
          <tr class="table-warning">
            <th scope="row">{{ $b->id }}
            </th>
            <td>{{ $b->nom }}</td>
            <td>{{ $b->description }}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</section>