<form action="{{ route('registration') }}" method="post">
    <p>name</p>
    @csrf
    <input type="text" name="name">
    <p>name in game</p>
    <input type="text" name="name_ingame">
    <p>birth_date</p>
    <input type="date" name="birth_date">
    <p>email</p>
    <input type="email" name="email">
    <p>password</p>
    <input type="password" name="password">
    <p>gender</p>
    <select name="gender" id="gender">
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <p>game</p>
    <select name="game" id="game">
        @foreach($games as $game)
            <option value="{{ $game->id }}">{{$game->name}}</option>
        @endforeach
    </select>
    <p>image</p>
    <input type="file" name="image">
    <button type="submit">dang ki</button>
</form>
