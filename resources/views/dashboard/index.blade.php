<h1>Hi, {{ Auth::user()->name }}</h1>
<br/>

<form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
