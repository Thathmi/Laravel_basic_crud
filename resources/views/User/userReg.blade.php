<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Save user</h1>
    {{-- <div>
        @if (errors->any())

        <ul>
            @foreach ($errors->all()as $error)

            <li>{{$error}}</li>
                
            @endforeach
        </ul>
            
        
            
        @endif
    </div> --}}
    <form method="post" action="{{route('user.save')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" >
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" >
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" >
        </div>

        <div>
            <input type="submit" value="Save User">
        </div>

    </form>
</body>
</html>