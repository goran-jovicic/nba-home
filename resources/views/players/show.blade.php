    <p> {{ $player->first_name . ' ' . $player->last_name }} </p>
    <p> {{ $player->email }} </p>
    <p> 
        <a href="{{'/teams/' . $player->team->id }}"> {{ $player->team->name }} </a> 
    </p>