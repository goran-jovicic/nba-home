<h1> Teams </h1>
    @foreach ($teams as $team)
        <h2>
            <a href="{{ '/teams/' . $team->id }}"> {{ $team->name }} </a>
        </h2>
    @endforeach