<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    {{-- @foreach ($data as $emp)
        <h2>
            {{$emp->emp_name}} |
            {{$emp->emp_salary}} |
            {{$emp->add_id}}
        </h2>
    @endforeach --}}

     <div class="container">
        <h3>Employee List</h3>
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered table-striped table-dark">
                    <thead>
                    <tr>
                        <th>Id</td>
                        <th>Name</td>
                        <th>Salary</td>
                        <th>Address Id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $emp)
                    <tr>
                        <td>{{$emp->id}}</td>
                        <td>{{$emp->emp_name}}</td>
                        <td>{{$emp->emp_salary}}</td>
                        <td>{{$emp->add_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
     </div>
</body>
</html>