
<section class="mt-5">
    <div class="container text-center">
        <table class="table">
        <thead>
          <tr class=>
            <th scope="col">Numero</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($formations as $b )
            @if ($b->id %2 != 0)
            <tr class="table-info">
              <th scope="row">{{ $b->id }}
              </th>
              <td>{{ $b->nom }}</td>
              <td>{{ $b->description }}</td>
            </tr>
            @else
            <tr class="table-warning">
              <th scope="row">{{ $b->id }}
              </th>
              <td>{{ $b->nom }}</td>
              <td>{{ $b->description }}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
      </table>
    </div>
</section>
