<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        {{-- <h2>
            {{ $order }}
        </h2> --}}


        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Address</th>
      <th scope="col">zip_code</th>
      <th scope="col">city</th>
      <th scope="col">Country</th>
      <th scope="col">Status</th>
      <th scope="col">Ordered At</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">{{ $order->id }}</th>
      <td>{{ $order->full_name }}</td>
      <td>{{ $order->address }}</td>
      <td>{{ $order->zip_code }}</td>
      <td>{{ $order->city }}</td>
      <td>{{ $order->country }}</td>
      <td>{{ $order->status }}</td>
      <td>{{ $order->created_at }}</td>
    </tr>
  </tbody>
</table>


    
</body>
</html>
