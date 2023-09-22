@foreach($queries as $query)
    {{$query->query}}
    {{$query->calls}}
    <br>
@endforeach
