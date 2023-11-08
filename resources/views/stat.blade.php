<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <title>Query</title>
</head>
<body>

<div style="display: flex">
    <form action="{{route('reset')}}">
        <button>Reset</button>
    </form>
    <form action="{{route('index')}}" style="margin-left: 10px">
        <button>Update</button>
    </form>
</div>


<div class="col-10">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Query</th>
            <th scope="col">Time</th>
            <th scope="col">Total Time</th>
            <th scope="col">Calls</th>
        </tr>
        </thead>
        <tbody>
        @foreach($queries as $index => $query)
            <tr>
                <th scope="row">{{$index}}</th>
                <td style="word-break: break-word; word-wrap: break-word">{{$query->query}}</td>
                <td>{{$query->mean_exec_time}} ms</td>
                <td>{{$query->calls * ($query->mean_exec_time)}} ms</td>
                <td>{{$query->calls}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>




