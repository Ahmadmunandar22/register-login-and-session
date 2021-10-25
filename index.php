<?php

require_once("connection.php");

$query="select * from barang" ;
$result=mysqli_query($mysqli,$query);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        
        <title>cms barang</title>

        <!--memangggil bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!--bootstrap icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!--custom css-->
        <link rel="stylesheet" href="style.css">
 
    </head>

    <body>
 
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#">
                <img src="logojongkoding.png" />
                </a>

                <!-- Navbar toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <!-- Navbar collapse -->
                <div class="collapse navbar-collapse" id="navbarSupporteedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Daftar barang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="student-list">
            <div class="container">
                <div class="row mb-4 mt-4">
                    <div class="col">
                        <h2>Daftar barang</h2>
                    </div>

                    <div class="col text-end">
                        <a class="btn btn-primary" href="form_barang.html" role="button">Tambah barang</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Id_barang</th>
                                    <th scope="col">nama_barang</th>
                                    <th scope="col">harga </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                foreach($result as $barang){

                                    echo '<tr>
                                    <th scope="row">' . $i++ . '</th>
                                    <td>' . $barang["Id_barang"] . '</td>
                                    <td>' . $barang["nama_barang"] . '</td>
                                    <td>' . $barang["harga"] . '</td>
                                </tr>';
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
