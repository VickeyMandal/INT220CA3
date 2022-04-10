<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>ToDo'S List App!</title>
</head>

<body class="w-100 p-3" style="background: #E9E9E9">

  <div class="row">
    <div class="col-md-auto">
    </div>


    <div class="col-6 flex container-xl rounded-3 " style="background: white">
      <div class="container w-50 rounded-pill" style="background: linear-gradient(to right, #bc4e9c, #f80759); color:white">
        <h1 class="text-center py-4 my-4">ToDo'S List App</h1>
      </div>


      <div class="mx-5">
        <form action="data.php" method="post" autocomplete="off">
          <div class="form-group">
            <input class="form-control " style="background: #E9E9E9; text-align: center" type="text" name="title" id="title" placeholder="Add Task Here" Required>

          </div>
          <div class="mt-2 d-flex justify-content-center">  
          <button class="btn btn-primary position-relative">+</button>
          </div>
          
        </form>

      </div><br>
      <hr class="bg-dark m-auto">
      <div class="lists m-auto my-4">
        <h1>Tasks</h1>
        <div id="lists">
          <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col" name="id">S.no</th>
                <th scope="col" style="padding-inline-end: 12rem">ToDo List</th>
                <th class="d-flex justify-content-end" style="background: #f80759;">Action</th>
              </tr>
              </div>
             
            </thead>
            <tbody>
              <?php
              include 'database.php';
              $sql = "SELECT * FROM todos";
              $result = mysqli_query($conn, $sql);

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $title = $row['title'];
              ?>
                  <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $title  ?></td>
                    <td class="d-flex justify-content-end">
                      <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $id ?>" role="button">Edit</a>
                      <a class="ms-2 btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button">Delete</a>

                    </td>

                  </tr>

              <?php


                }
              }
              ?>


            </tbody>
          </table>
        </div>
      </div>

    </div>
    <div class="col-md-auto">
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>