<h1> Team : </h1>
<p> {{ $team->name }}</p>
<p> {{ $team->email }} </p>
<p> {{ $team->address }} </p>
    @foreach($team->players as $players)
        <p> 
        <a href="{{'/players/' . $players->id }}"> {{ $players->first_name . ' ' . $players->last_name }} </a> 
        </p>
    @endforeach