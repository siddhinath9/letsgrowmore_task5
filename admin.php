<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <link rel="stylesheet" href="admin.css">

</head>

<body>
    <?php
    include('dbconfig.php');
    $query_userinfo = "SELECT * FROM login";
    $data_userinfo = mysqli_query($conn, $query_userinfo);
    $total_rows_userinfo = mysqli_num_rows($data_userinfo);

    ?>
    <header>
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="admin.php">Admin Portal</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Teachers's Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" onclick="Mytable1()">Students Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>


    <div class="container mt-3">
        <h3>Currently in Teachers Portal.Be careful while making any changes</h3>
    </div>
    <div class="container table1 mt-3" id="table1">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Fullname</th>
                    <th scope="col">Username</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($total_rows_userinfo != 0) {

                    while ($result_userinfo = mysqli_fetch_assoc($data_userinfo)) {
                        echo "<tr>
                                    <td>" . $result_userinfo["full_name"] . "</td>
                                    <td>" . $result_userinfo["Username"] . "</td>
                                    <td><a href='admin_update.php?id=$result_userinfo[id]'>Update</a>
                                    </td>
                                </tr> ";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>



    </div>
    <script>
        var a = document.getElementById("table1");
        var b = document.getElementById("table2");
        var c = document.getElementById("table3");

        function Mytable1() {
            if (a.style.display == 'none') {
                a.style.display = 'block';
                b.style.display = 'none';
                c.style.display = 'none';
            } else {
                a.style.display = 'none';
            }
            // a.style.display = "block";
            // b.style.display = "none";
        }

        function Mytable2() {
            if (b.style.display == 'none') {
                b.style.display = 'block';
                a.style.display = 'none';
                c.style.display = 'none';
            } else {
                b.style.display = 'none';
            }

        }

        function Mytable3() {
            if (c.style.display == 'none') {
                c.style.display = 'block';
                b.style.display = 'none';
                a.style.display = 'none';
            } else {
                c.style.display = 'none';
            }

        }

        function checkdelete() {
            return confirm("Are you sure you want to delete this?")
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>