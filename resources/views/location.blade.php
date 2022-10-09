<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Location</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <div style='margin-left:10px;float:right;'>
                        <a href="{{ url('add-location') }}" target="_blank" rel="noopener noreferrer" class='btn btn-primary' style='margin-top:20px'>Add Neighbourhood</a>
                    </div>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>State</th>
                            <th>Neighbourhood</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($data as $locationdata)
                            <tr>
                                <td>{{ $locationdata->id }}</td>
                                <td>{{ $locationdata->neighbourhood }}</td>
                                <td>{{ $locationdata->state }}</td>
                                <td><a href="{{ url('edit/'.$locationdata->id) }}">Edit</a> | <a href="{{ url('delete/'.$locationdata->id) }}">Delete</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>