<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>phpWebApp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('CSS/custom.css')}}" />


</head>

<body>

    <div class="row">
        <div class="col-6 studentAdd">

        <div>
            @if(Session::has('message'))
            <p>{{Session::get('message')}}</p>
            @endif
        </div>
            <h1>Add Student</h1>

            <form method="post" action="{{route('student.save')}}">
                @csrf

                <div class="mb-3">
                    <label for="studentName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="studentName" name="studentName" placeholder="name">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">DOB</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="DOB">
                </div>

                <input type="submit" class="btn btn-success" value="Add Student"/>

            </form>


        </div>

        <div class="col-6">




        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>