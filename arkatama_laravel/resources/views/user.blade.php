<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Users</title>

    <!-- cdn Boostrap -->

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            text-decoration:none;

        }
        .card{
            width:80%;
            height: auto;
            background-color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:3rem;
            box-shadow: 2px 2px 9px green;
        }
        .image-avatar{
            width:50px;
            height:80px;
            /* border-radius:50%; */
        }
        /* responsive mobile */
        @media(max-width:550px){
            .card{
                margin-top:0.3rem;
                width:95%;
                height:auto;
            }
            body{
                background:white;
            }
        }
    </style>
</head>
<body style="background-color:#2A2F4F;">
    
    <center>
    <div class="card">
        <!-- nav logo -->
    <div class="container">
        <div class="row" style="margin:50px;">
            <div class="col-md-2 mt-2">
                <a href="logout.php" class="btn btn-primary">Logout</a>
            </div>
            <div class="col-md-9"><h2>Data Pengguna</h2></div>
            <div class="col-md-1">
                <a href="create.php" class="btn btn-primary"><i data-feather="plus-circle"></i></a>
            </div>
        </div>

        <!-- content -->
        <div class="row">
            <div class="col-md-12" style="overflow-x:auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            {{-- <td><b>#</b></td> --}}
                            <td><b>Aksi</b></td>
                            <td><b>Avatar</b></td>
                            <td><b>Nama</b></td>
                            <td><b>Email</b></td>
                            <td><b>Phone</b></td>
                            <td><b>Role</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($selectUsers as $u)

                        <tr>

                            <td>
                                <a href="#" class="btn" style="background-color:#E6E2C3;">detail</a>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id']; ?>)">Delete</a>
                            </td>
                            <td class="text-center"><img src="{{$u->avatar}}" class="image-avatar"></td>
                            <td>{{$u ->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->phone}}</td>
                            <td>{{$u->role}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </center>


    <script>
      feather.replace()
    </script>
</body>
</html>

<script type="text/javascript">
    function confirmation(id){
        if(confirm('Apakah Anda yakin akan menghapus Anggota ini ? ')){
            window.location.href = 'delete.php?id='+id;
        }
    }
</script>
