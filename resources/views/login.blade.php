<form action="{{ route('submitLogin') }}" method="post">
    @csrf
    @if(session()->has('login-error'))
        <p>
            {{ session()->get('login-error') }}
        </p>
    @endif
    @if(session()->has('registration_success'))
        <p>
            {{ session()->get('registration_success') }}
        </p>
    @endif
    <p>email: </p>
    <input type="email" name="email">
    <p>Password</p>
    <input type="password" name="password">
    <button type="submit">login</button>
</form>
<a href="{{ route('showFormRegistration') }}"><button>dang ki</button></a>

