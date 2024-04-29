@include('layouts/page')
<section class="title">
    <h1>Overzicht allergenen</h1>
    <section class="form">
        <form action="{{route('allergeen.index')}}" method="post">
            @csrf
            @method('post')
            <select name="allergeen">
                <option value=""></option>
                <option value="Gluten">Gluten</option>
                <option value="Gelatine">Gelatine</option>
                <option value="AZO-Kleurstof">AZO-Kleurstof</option>
                <option value="Lactose">Lactose</option>
                <option value="Soja">Soja</option>
            </select>
            <input class="submit" type="submit" value="Maak selectie">
        </form>
    </section>
</section>
<section class="table">
    <table>
        <thead>
            <tr>
                <th>Naam Product</th>
                <th>Naam Allergeen</th>
                <th>Omschrijving</th>
                <th>Aantal Aanwezig</th>
                <th>Info</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td>{{$data->product->Naam}}</td>
                <td>{{$data->allergeen->Naam}}</td>
                <td>{{$data->allergeen->Omschrijving}}</td>
                <td>{{$data->AantalAanwezig}}</td>
                <td>
                    <a class="symbols" href="{{route('leverancier.index', [$data->id])}}">&#63;</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <section class="links">
        <a href="{{route('homepage')}}">Back</a>
    </section>
</section>