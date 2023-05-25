
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="includes/busca_dinamica.js"></script>


    <title>Início</title>
</head>
<body>
    <?php
        if(isset($_GET['perf']) && !empty($_GET['perf'])) {
            session_start();
            if ((!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) && (!isset($_SESSION['senha']) || empty($_SESSION['senha']))){
                header('Location: login.php');
                exit;
            }
    ?>
    <h1> Bem vindo ao Inventário do SMD!</h1>
    <h2>Perfil de administrador</h2>
    <section>
        <h2>Selecione um laboratório</h2>
        <article>
            <a href="info_laboratorios.php?lab=1&perf=adm"><button>Laboratório 1</button></a>
            <a href="info_laboratorios.php?lab=2&perf=adm""><button>Laboratório 2</button></a>
            <a href="info_laboratorios.php?lab=3&perf=adm""><button>Laboratório 3</button></a>
            <a href="info_laboratorios.php?lab=4&perf=adm""><button>Laboratório 4</button></a>
            <a href="info_laboratorios.php?lab=5&perf=adm""><button>Laboratório 5</button></a>
            <a href="info_laboratorios.php?lab=6&perf=adm""><button>Laboratório 6</button></a>            
        </article>
        <br>
        <div >
            <a href="modificar_inventario.php"><button> modificar </button></a>
            <a href="logout.php"><button>Sair da conta</button></a>
        </div>
    </section>
    <?php 
        } else {  
    ?>
    
    <h1> Bem vindo ao Inventário do SMD!</h1>   
    
    <section class= "d-flex justify-content-center ">
        <h2>Selecione um laboratório</h2>
        <br>
        <article class= "d-flex justify-content-center" >
            <a href="info_laboratorios.php?lab=1"><button>Laboratório 1</button></a>
            <a href="info_laboratorios.php?lab=2"><button>Laboratório 2</button></a>
            <a href="info_laboratorios.php?lab=3"><button>Laboratório 3</button></a>
            <a href="info_laboratorios.php?lab=4"><button>Laboratório 4</button></a>
            <a href="info_laboratorios.php?lab=5"><button>Laboratório 5</button></a>
            <a href="info_laboratorios.php?lab=6"><button>Laboratório 6</button></a>
        </article>
        <br>
        <a href="login.php"><button>login</button></a>
    </section>

    <?php 
        };
    ?>
    
    
    

    <div class="row justify-content-center my-5 w-100 ">
        <div class="col-6 text-center">
            <form>
                <div class="input-group mb-3">
                    <input type="text" id="search" class="form-control form-control-lg" placeholder="Search Here" autocomplete="off">
                    <button type="submit" id="submit" class="input-group-text btn-success px-4"><i class="fa fa-search"></i></button>
                </div>
            </form>

            <div id="list"></div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <div id="card"> </div>
        </div>
    </div> 

</body>
</html>