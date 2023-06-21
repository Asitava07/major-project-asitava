@extends('layouts.navbar')
@section('content')
@stop

@extends('admin.admindashboard')
@section('admin')
@stop

@extends('layouts.footer')
@section('footer')
@stop




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/bee4.png">
    <link rel="stylesheet" href="css/style.css">
    <title>LearningBee🐝|Admin/Courses</title>
</head>

<body>
    <div class="admin_courses_1">
        <div class="admin_courses_1_head">
            <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Courses Category</p>
            <button onclick="openCategory()">New Category</button>
        </div>

        <!-- <div class=" courses_1_search">
            <input type="text" placeholder='Search Course' /><button>Search</button>
        </div> -->
    </div>

    <div class="category-table" style="overflow-x:auto;">
        <table>
            <thead>
                <tr>
                    <th>Category no.</th>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <!-- <th>Courses</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            @php
            $i = 1
            @endphp
            @foreach($data as $dt)
            <tbody>
                <tr>
                    <td scope="row">{{$i++}}</td>
                    <td>{{$dt -> categoryid}}</td>
                    <td>{{$dt -> categoryname}}</td>
                    <td class="action" style="display:flex; justify-content:space-evenly;">
                        <form action="{{ url('category/'.$dt->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="delete" style="border:none;background-color:transparent;"><i class="fa-regular fa-trash-can" style="color:red;"></i></button>
                        </form>
                        <span class=" update" title="Update"><a style="color:darkgreen;" href="{{'category/'.$dt->id.'/edit'}}"><i class="fa-solid fa-file-pen"></i></a></span>
                    </td>
                    <!-- <td>@mdo</td> -->
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>


    <div class="categorymodal" id="categorymodal">
        <i class="fa-solid fa-xmark" onclick="closeCategory()"></i>
        <form action="{{ url('category')}}" method="post">
            {{ csrf_field() }}
            <h2 style="color:darkred;">ADD NEW CATEGORY</h2>
            <label>Category Id</label><input name='categoryid' type="text" placeholder="Enter Category Id">
            <label>Category Name</label><input name='categoryname' type="text" placeholder="Enter Category Name">
            <button>Save</button>
        </form>
    </div>

    <script>
        const cn = document.getElementById("categorymodal");

        function openCategory() {
            cn.classList.add("open-category");
        }

        function closeCategory() {
            cn.classList.remove("open-category");
        }
    </script>
</body>

</html>