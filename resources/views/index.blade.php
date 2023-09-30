
<h1>Auto's</h1>
<table>
    <thead>
        <tr>
            <th>Merk</th>
            <th>Type</th>
            <th>Bouwjaar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->merk }}</td>
                <td>{{ $car->type }}</td>
                <td>{{ $car->bouwjaar }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
