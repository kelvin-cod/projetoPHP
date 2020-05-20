<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../favicon.ico" />
    <title>Novo Cliente</title>
</head>
<style>
.footer {
    padding-top: 350px;
}
</style>

<body>
    <?php 	 
        require_once('functions.php'); 
        add();	
     ?>

    <?php include(HEADER_TEMPLATE); ?>
    <main>
        <div class="container mt-4">
            <div class="inline">
                <h2> <i class="fa fa-plus 2x"></i> Novo Cliente</h2>
            </div>
            <form action="add.php" method="post">
                <!-- area de campos do form -->
                <hr />
                <div class="row pt-3">
                    <div class="form-group col-md-7">
                        <label for="name">Nome / Razão Social</label>
                        <input type="text" class="form-control" name="customer['name']" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo2">CNPJ / CPF</label>
                        <input type="text" class="form-control" name="customer['cpf_cnpj']" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="campo3">Data de Nascimento</label>
                        <input type="text" class="form-control" name="customer['birthdate']" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="campo1">Endereço</label>
                        <input type="text" class="form-control" name="customer['address']" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo2">Bairro</label>
                        <input type="text" class="form-control" name="customer['hood']" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="campo3">CEP</label>
                        <input type="text" class="form-control" name="customer['zip_code']" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="campo3">Data de Cadastro</label>
                        <input type="text" class="form-control" name="customer['created']" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="campo1">Município</label>
                        <input type="text" class="form-control" name="customer['city']" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="campo2">Telefone</label>
                        <input type="text" class="form-control" name="customer['phone']" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="campo3">Celular</label>
                        <input type="text" class="form-control" name="customer['mobile']" required>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="campo3">UF</label>
                        <input type="text" class="form-control" name="customer['state']" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="campo3">Inscrição Estadual</label>
                        <input type="text" class="form-control" name="customer['ie']" required>
                    </div>

                </div>
                <div id="actions" class="row justify-content-center mt-2">
                    <div class="col-md-3 ">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="../index.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>



    </main>
    <!--Footer-->
    <div class="footer">
        <?php include(FOOTER_TEMPLATE); ?>
    </div>


</body>

</html>