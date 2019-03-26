<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.7 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Tambah User Baru</h2><br/>
      @foreach($users as $user)
      <form method="post" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
        <input name="_method" type="hidden" value="PATCH">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nama Lengkap:</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Email">Email:</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="BornCity">Kota Kelahiran:</label>
              <input type="text" class="form-control" name="born_city" value="{{$user->born_city}}">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="BornDate">Tanggal Kelahiran</label>
            <input type="date" class="form-control" name="born_date" value="{{$user->born_date}}">
          </div>
        </div>

        {{-- <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Gender">Gender</label><br>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
          </div>
        </div> --}}

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Gender">Gender</label><br>
            <select class="form-control" name="gender" value="{{$user->gender}}">
              <option name="gender" value="male">Male</option>
              <option name="gender" value="female">Female</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Address">Alamat</label>
            <input type="text" class="form-control" name="address" value="{{$user->address}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="PhoneNumber">Nomor Telepon</label>
            <input type="text" class="form-control" name="phone_number" value="{{$user->phone_number}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="password" value="{{$user->password}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
      @endforeach
    </div>
  </body>
</html>