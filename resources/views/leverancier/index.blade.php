@include('layouts/page')
<section class="title">
    <h1>Overzicht leverancier gegevens</h1>
</section>
<section class="table">
    <table>
        <thead>
            <tr>
                <th>Naam leverancier</th>
                <th>Naam contact persoon</th>
                <th>Mobiel</th>
                <th>Stad</th>
                <th>Straat</th>
                <th>Huis nummer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            @if($contact->isNotEmpty())
            @foreach($contact as $contact)
            <tr>
                <td>{{$leverancier[0]->Naam}}</td>
                <td>{{$leverancier[0]->ContactPersoon}}</td>
                <td>{{$leverancier[0]->Mobiel}}</td>
                <td>{{$contact->Stad}}</td>
                <td>{{$contact->Straat}}</td>
                <td>{{$contact->Huisnummer}}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td>{{$leverancier[0]->Naam}}</td>
                <td>{{$leverancier[0]->ContactPersoon}}</td>
                <td>{{$leverancier[0]->Mobiel}}</td>
                <td colspan="3">Er is zijn geen adresgegevens bekent</td>
            </tr>

            @endif
            @endforeach
        </tbody>
    </table>
    <section class="links">
        <a href="{{route('allergeen.index')}}">Back</a>
    </section>
</section>