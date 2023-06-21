<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <form action="{{url('demoform')}}" method="post">
        {{ csrf_field() }}
        <label>Email</label>
        <input class="login_text_input" type="email" name="email" placeholder="Enter your Email" required /><br>
        <label>User Name</label>
        <input class="login_text_input" type="text" name="username" placeholder="Enter your User Name" required /><br>
        <label>Password</label>
        <input class="login_text_input" type="password" name="password" placeholder="Enter your Password" required /><br>
        <label>Confirm Password</label>
        <input class="login_text_input" type="password" name="confirmPassword" placeholder="Confirm your Password"><br>
        <button>Save</button>
    </form>

    <br><br><br>

    <div class="category-table" style="overflow-x:auto;">
        <table>
            <thead>
                <tr>
                    <th>User no.</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>email</th>
                    <th>username</th>
                    <th>phoneno</th>
                    <th>DOB</th>
                    <th>Action</th>
                </tr>
            </thead>
            @php
            $i = 1
            @endphp
            @foreach($info as $dt)
            <tbody>
                <tr>
                    <td scope="row">{{$i++}}</td>
                    <td>{{$dt -> firstname}}</td>
                    <td>{{$dt -> lastname}}</td>
                    <td>{{$dt -> email}}</td>
                    <td>{{$dt -> username}}</td>
                    <td>{{$dt -> phoneno}}</td>
                    <td>{{$dt -> DOB}}</td>
                    <td class="action">
                        <span class="delete" title="Delete"><a style="color:darkred;" href={{'deleteus/'.$dt->id}}><i class="fa-regular fa-trash-can"></i></a></span>
                        <span class="update" title="Update"><a style="color:darkgreen;" href={{'updateus/'.$dt->id}}><i class="fa-solid fa-file-pen"></i></a></span>
                    </td>
                    <!-- <td>@mdo</td> -->
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <br><br><br><br><br>
    <form action="{{url('demoform')}}" method="post">
        {{ csrf_field() }}
        <label>First Name</label>
        <input class="login_text_input" name="fn" type="text" placeholder="Enter your first name"><br>
        <label>Last Name</label>
        <input class=" login_text_input" name="ln" type="text" placeholder="Enter your last name"><br>
        <label>Phone Number</label>
        <input class="login_text_input" name="ph" type="number" placeholder="Enter your Phone Number"><br>
        <label>Date Of Birth</label>
        <input class="login_text_input" name="DOB" type="date" placeholder="Enter your Date of Birth"><br>
        <button>Save</button>
    </form>




    <script src="https://kit.fontawesome.com/7755165d2a.js" crossorigin="anonymous"></script>
</body>

</html>