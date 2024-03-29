<?php include("agregarTarea.php"); ?>

<!doctype html>
<html lang="en">
  <head>
  <title>Aplicación TODO list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
      .subrayado { 
        text-decoration: line-through;
      }
    </style>
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main class="container pt-2">
      <div class="card">
        <div class="card-header">Lista de Tareas</div>
        <div class="card-body">         
          <div class="mb-3">

            <form action="" method="post">
              <label for="tarea" class="form-label">Tarea:</label>
              <input
                type="text"
                class="form-control"
                name="tarea"
                id="tarea"
                aria-describedby="helpId"
                placeholder="Escriba su Tarea"
              />            
              <br>
              <div class="d-grid gap-2">
                <button
                  type="submit"
                  name="agregar_tarea"
                  id="agregar_tarea"
                  class="btn btn-primary"
                >
                  Agregar tarea
                </button>
              </div>                  
            </form>
          </div>

          <ul class="list-group">
          
            <?php foreach($registros as $registro) { ?>
              


              <li class="list-group-item">              
                <div class="form-check">
                  <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $registro['id']; ?>" >
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="<?php echo $registro['completado']; ?>"
                      id=""
                      name="completado"
                      onChange="this.form.submit()"
                      <?php echo($registro['completado']==1)?'checked':'unchecked'; ?>
                    />              
                  </form>    
                  <label class="form-check-label float-start <?php echo($registro['completado'] == 1)?'subrayado':''; ?>"> <?php echo $registro['nombre']; ?> </label>
                  
                  <h6 class="float-start"> 
                     <a href="?id=<?php echo $registro['id'] ?>"><span class="badge bg-danger"> X </span></a>
                  </h6>                                
                </div>            
              </li>   

            <?php } ?>

                    
          </ul>
                    
        </div>
        <div class="card-footer text-muted"></div>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
