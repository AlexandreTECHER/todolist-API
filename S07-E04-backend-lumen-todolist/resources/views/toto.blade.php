<h1>Toto vous répond à : {{ $date }} </h1>

@isset($number)
    <h2>Le nombre seléctionné est : {{ $number }}</h2>
@endisset

<a href="{{ route('toto') }}">Lien vers la page toto</a>
<input type="text">

