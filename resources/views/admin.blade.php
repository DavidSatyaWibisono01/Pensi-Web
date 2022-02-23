<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin</title>
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">OSIS MPR SMK WIKRAMA BOGOR</a>
      <div class="d-flex">
        <a class="btn btn-danger" href="/logout">Logout</a>
      </div>
    </div>
  </nav>
  <div class="container-sm">
    <div class="mt-5">
      <h4>Pengunjung <span>{{$pengunjungs->count()}}</span></h4>
    </div>
    <div class="mt-3 border p-1">
      <table class="table table-responsive table-striped">
          <thead>
            <tr>
              <th width="50px">No</th>
              <th>Nama</th>
              <th>Asal Instansi</th>
            </tr>
          </thead>
          <tbody>
              @foreach($pengunjungs as $usr)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$usr->name}}</td>
                <td>{{$usr->asal_instansi}}</td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
