<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b8c0c93cb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/perfil.css">
</head>

<body>

    <?php
    include "includes/header.php";
    ?>


    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="images/perfil.jpg" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Cambiar foto
                            <input type="file" name="file" />
                        </div>
                        <div class="">
                <div class="col-md-12">
                    <div class="profile-work">
                        <h5>Descripcion</h5>
                        <p>"No preguntes lo que tus compañeros de equipo pueden hacer por ti.
                            Pregúntate qué puedes hacer tú por tus compañeros de equipo".</p>

                    </div>
                </div>
               
            </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            Rickelson Bresume
                        </h5>

                        <p class="proile-rating">Notas : <span>8/10</span></p>

                    </div>
                    <div class="col-md-8">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>

                    </ul>
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>RUN</label>
                                </div>
                                <div class="col-md-6">
                                    <p>1234656-3</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Rickelson Bresume</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Rickelson@gmail.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>56 94567890</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Deportes</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Tenis,Football</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Direccion</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Ñuble 780</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Identidad</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Hombre</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Edad</label>
                                </div>
                                <div class="col-md-6">
                                    <p>24 Años</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre de Usuario</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Birkorff</p>
                                </div>
                            </div>
                            

                    </div>
                </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar Perfil" />
                </div>
            </div>
            <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
           
        </form>
    </div>







    <?php
    include "includes/footer.php";
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>