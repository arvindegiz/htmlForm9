<h2>User Login</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id" />
    <br>
    <span style="color:red">@error('username'){{$error}}@enderror</span>
    <br>
    <input type="password" name="userpassword" placeholder="Enter user password" />
    <br>
    <span style="color:red">@error('userpassword '){{$error}}@enderror</span>
    <br>
    <button type="submit">Login </button>
</form>