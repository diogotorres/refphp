<!DOCTYPE html>
<html>
<header>
    <title>Lista de endereços</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</header>

<body>
    <?php
        //recupera a lista de endereços no banco
        require('ConnectionFactory.class.php');
        $con = ConnectionFactory::getConnection();
        $sql = "SELECT * FROM enderecos";
        $query = mysqli_query($con, $sql);
    ?>
    <div class="container-fluid">
        <div class="row">
            <h1>Lista de endereços</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Logradouro</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody id="tblEnderecos">
                    <?php
                        //preenche a lista com as linhas da consulta
                        while($row = $query->fetch_assoc()){
                            echo "<tr>";
                            echo "<th scope='row'>".$row['id']."</th>";
                            echo "<td>".$row['cep']."</td>";
                            echo "<td>".$row['logradouro']."</td>";
                            echo "<td>".$row['bairro']."</td>";
                            echo "<td>".$row['cidade']."</td>";
                            echo "<td>".$row['estado']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <a href="index.html">Voltar</a>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>