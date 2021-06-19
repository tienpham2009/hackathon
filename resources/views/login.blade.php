<form action="{{ route('submitLogin') }}" method="post">
    @csrf
    <p>email: </p>
    <input type="email" name="email">
    <p>Password</p>
    <input type="password" name="password">
    <button type="submit">login</button>
</form>
