<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Location</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container" style='margin-top:20px'>
        <div class="row">
            <div class="col-md-12">
                <h2>Add Neighbourhood</h2>
                <form action="{{ url('save-location') }}" method="post">
                    @csrf
                    <div class="md-3">
                        <label for="" class="form-label">State</label>
                        <input type="text" name="state" class='form-control' placeholder='Enter State Name Here' value="{{ old('state') }}">
                    </div>
                    <div class="md-3">
                        <label for="" class="form-label">Neighbourhood</label>
                        <input type="text" name="neighbourhood" class='form-control' placeholder='Enter neighbourhood Name Here' value="{{ old('neighbourhood') }}">
                        @error('neighbourhood')
                            {{ $message }}
                        @enderror
                    </div>
                    <button class='btn btn-primary' style='margin-top:10px'>Add Neighbourhood</button>
                    <a href="{{ url('location') }}" target="_blank"  rel="noopener noreferrer" class='btn btn-danger' style='margin-top:10px'>View Neighbourhood</a>
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>