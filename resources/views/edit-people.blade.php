<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add People</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container" style='margin-top:20px;'>
        <div class="row">
            <div class="col-md-12">
                <h2>Add New Person</h2>
                <form action="{{ url('edit-people') }}" method='post'>
                    @csrf
                    <input type="hidden" name='id' value='{{ $person->id }}'>
                    <div class="md-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name='name' placeholder='Enter Name' value="{{ $person->name }}">
                    </div>
                    <div class="md-3">
                        <label for="" class="form-label">Job Role</label>
                        <input type="text" class="form-control" name='jobrole' placeholder='Enter Job Role' value='{{ $person->jobrole }}'>
                    </div>
                    <div class="md-3">
                        <label for="" class="form-label">Location</label>
                        {{-- <select name="location" id="" class="form-control">
                            
                        </select> --}}
                        <input type="text" class="form-control" name='location' placeholder='Enter Location' value='{{ $person->location }}'>
                    
                    </div>
                    <div class="md-3">
                        <label for="" class="form-label">Age</label>
                        <input type="text" class="form-control" name='age' placeholder='Enter age here' value='{{ $person->age }}'>
                    </div>
                    <button type="submit" class='btn btn-primary'>Edit Person Data</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>