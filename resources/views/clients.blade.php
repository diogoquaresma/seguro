<!doctype html>
<html>
    <head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">        <title></title>

    </head>
    <body>
<br><br>
<div style="width:100%;text-align:center">
<table border="1" style="width:100%;">

<tr>
    <td>Id</td>
    <td>Name</td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
@foreach($clients as $client)
<tr>
    <td>{{($client['id'])}}</td>
    <td>{{($client['name'])}}</td>
    <td><a href="/edit/{{($client['id'])}}">Edit</a></td>
    <td><a href="/destroy/{{($client['id'])}}">Destroy</a></td>
</tr>
@endforeach
</table>
</div>
<button class="btn btn-primary"  onclick="window.location.href='/clientcreation'">New Client</button>
</body>
</html>
