<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-clinic-medical"></span> <span>PARPHARMACIE</span></h2>
        </div>
        <!--Secciones-del-tablero-->
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-home"></span>
                    <span>Tablero</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-stethoscope"></span>
                    <span>Doctores</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user"></span>
                    <span>Usuarios</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-injured"></span>
                    <span>Pacientes</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-history"></span>
                    <span>Historial de citas</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-search"></span>
                    <span>Busqueda de pacientes</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-book-medical"></span>
                    <span>Informes</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> Tablero
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Buscar aquí" />
            </div>
            <div class="user-wrapper">
                <img src="img/Avatar.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Administrador</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span><a href="client.php" style="color:grey">Client</b></a></span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>12</h1>
                        <span><a href="produit.php" style="color:grey">Produit</a></span>
                    </div>
                    <div>
                        <span class="las la-stethoscope"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>25</h1>
                        <span>Manejo de pacientes</span>
                    </div>
                    <div>
                        <span class="las la-wheelchair"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span><a href="commande.php" style="color:white">Commande</a></span>
                    </div>
                    <div>
                        <span class="lab la-wpforms"></span>
                    </div>
                </div>
            </div>
            <!--Table-->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Pacientes recientes</h3>

                            <button>Mostrar todo <span class="las la-arrow-right">
                            </span></button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                        <th>id_client </th>
                    <th>nom</th>
                    <th>email</th>
                    <th>adress</th>
                    <th>phone</th>
                    <th>update</th>
                    <th>delete</th>
                                        </tr>
                                    </thead>
                                    <?php
require "connection.php";
$req="select * from client";
$res=$con->query($req);
foreach ($res->fetchAll() as $v){?>
<tr>
    <td><?php echo $v["id_client"] ?></td>
    <td><?php echo $v["nom"] ?></td>
    <td><?php echo $v["email"] ?></td>
    <td><?php echo $v["adress"] ?></td>
    <td><?php echo $v["phone"] ?></td>
    <td><a href="update.php?id_client=<?php   echo $v["id_client"] ?>" class="btn btn-success">update</a></td>
    <td><a href="delete.php?id_client=<?php   echo $v["id_client"] ?>" class="btn btn-danger">delete</a></td>


</tr>
<?php
}
?> 
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

               
</body>

</html>