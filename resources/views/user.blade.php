<div>
    <h1>User data</h1>
    {{-- <table border="2">
        <tr>
           <td>ID</td>
           <td>Name </td>
           <td>Email</td>
           <td>City</td>
        </tr>
        @foreach ($users as $user )
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->city }}</td>

        </tr>

        @endforeach
    </table> --}}

    <form action="/users" method="post">
        @csrf
        {{-- <input type="hidden" name="_method" value="DELETE"> --}}
        <input type="text" name="user_name" placeholder="Enter your name">
    <br>
    <br>
    <input type="password" name="password" placeholder="Enter your password here">
    <br>
    <br>
    <button>Submit</button>
    </form>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
