<section class="mt-5">
    <div class="container">
        <table class="table">
        <thead>
          <tr class=>
            <th scope="col">Nom</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($types as $b )
            @if ($b->id %2 != 0)
            <tr class="table-success">
              </th>
              <td>{{ $b->nom }}</td>

            </tr>
            @else
            <tr class="table-primary">

              </th>
              <td>{{ $b->nom }}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
      </table>
    </div>
</section>