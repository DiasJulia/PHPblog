<?php require('./connection.php'); ?>
<?php require('./listarPosts.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/10a7600da8.js" crossorigin="anonymous"></script>

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Blog</title>
</head>

<body>

    <div class="container">
        <div class="row ">
            <!-- Adicionar Post -->
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-4">
                            <h3 class="col-md-8">Adicionar Postagem</h3>
                            <form class="user" action="cadastrarPost.php" method="post">

                                <div class="form-group col-md-12">
                                    <input type="text" name="titulo" class="form-control form-control" placeholder="Título da Postagem">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Texto</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="texto" rows="5"></textarea>
                                </div>
                                <div class=" form-group col-md-12 ">
                                    <button type="submit" class="btn btn-primary">Postar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <?php
                try {
                    foreach ($data as $key => &$item) {
                        echo "
                    <div class='card o-hidden border-0 shadow-lg my-5'>
                        <div class='card-body p-0'>
                            <div class='p-5'>
                                <h1>" . $item['titulo'] . "</h1>
                                <p>" . $item['post'] . "</p>
                                <a href='deletarPost.php?id=" . $item['id'] . "'> 
                                    <button type='submit' class='btn btn-danger'>
                                        Deletar
                                    </button>
                                </a>
                                <button type='submit' class='btn btn-danger' data-toggle='modal' data-target='#myModal'>Editar</button>
                            </div>
                        </div>
                    </div>
                    <div id='myModal' class='modal fade' role='dialog'>
                        <div class='modal-dialog'>

                          <div class='modal-content'>
                            <div class='modal-header'>
                            <h4 class='modal-title'>Editar ". $item['titulo'] . "</h4>
                              <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>

                            <div class='modal-body'>
                                <form class='user' action='editarPost.php' method='post'>
                                    <div class='form-group col-md-12'>
                                        <input type='text' name='titulo' class='form-control form-control' value='". $item['titulo'] . "'>
                                    </div>
                                    <div class='form-group col-md-12'>
                                        <label>Texto</label>
                                        <textarea class='form-control' name='texto'  rows='5'>". $item['post'] . "</textarea>
                                    </div>
                                    <input type='hidden' name='id' value='" . $item['id'] . "'/>
                                    <div class=' form-group col-md-12 '>
                                        <button type='submit' class='btn btn-primary'>Editar</button>
                                    </div>
                                </form>
                            </div>

                            <div class='modal-footer'>
                              <button type='button' class='btn btn-default' data-dismiss='modal'>Cancelar</button>
                            </div>
                          </div>

                        </div>
                    </div>";
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>