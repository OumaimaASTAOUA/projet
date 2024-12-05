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
    <link rel="stylesheet" href="bootstrap.min.css">
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
    <form action="ajouterP.php" method="post"  class="container mt-5  bg-light ">
      <label for="">nom</label>
      <input type="text" class="form-control" value="" name="nom">
      <label for="">prix</label>
      <input type="text" class="form-control" value="" name="prix">
      <label for="">typeP</label>
      <select name="typeP" id="" class="form-control">
        <option value="">produit de sois de peau</option>
        <option value="">compléments alimenta</option>
        <option value="">des cosmétiques parfaits</option>
      </select>
      <label for="">stock</label>
      <input type="text" class="form-control" value="" name="stock"><br>
      <label for="">date_production</label>
      <input type="date" class="form-control" value="" name="datePd"><br>
      <label for="">date_pérempton</label>
      <input type="date" class="form-control" value="" name="datePm"><br>
      <input type="submit" name="ajouterP" value="ajouter" class="btn btn-primary">
    </form>

</body>

</html>
