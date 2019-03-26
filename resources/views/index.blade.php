<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <a href="{{route('users.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Kota Kelahiran</th>
        <th>Tanggal Kelahiran</th>
        <th>Gender</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($users as $user)
      <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['born_city']}}</td>
        <td>{{$user['born_date']}}</td>
        <td>{{$user['gender']}}</td>
        <td>{{$user['address']}}</td>
        <td>{{$user['phone_number']}}</td>
        
        <td><a href="{{action('UsersController@edit', $user['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('UsersController@destroy', $user['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>