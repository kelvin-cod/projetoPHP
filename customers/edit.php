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
    <title>Editar Clientes</title>
</head>
<style>
.footer {
    padding-top: 420px;
}
</style>

<body>
    <?php 	 
     require_once('functions.php'); 
        edit();	
    ?>
    <?php include(HEADER_TEMPLATE); ?>

    <div class="container ">
        <div class="pt-5">
            <h2> <i class="fa fa-user"></i> Editar Cliente</h2>
        </div>

        <form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
            <hr />
            <div class="row">
                <div class="form-group col-md-7">
                    <label for="name">Nome / Razão Social</label>
                    <input type="text" class="form-control" name="customer['name']"
                        value="<?php echo $customer['name']; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="campo2">CNPJ / CPF</label>
                    <input type="text" class="form-control" name="customer['cpf_cnpj']"
                        value="<?php echo $customer['cpf_cnpj']; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="campo3">Data de Nascimento</label>
                    <input type="text" class="form-control" name="customer['birthdate']"
                        value="<?php echo $customer['birthdate']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                    <label for="campo1">Endereço</label>
                    <input type="text" class="form-control" name="customer['address']"
                        value="<?php echo $customer['address']; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="campo2">Bairro</label>
                    <input type="text" class="form-control" name="customer['hood']"
                        value="<?php echo $customer['hood']; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="campo3">CEP</label>
                    <input type="text" class="form-control" name="customer['zip_code']"
                        value="<?php echo $customer['zip_code']; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="campo3">Data de Cadastro</label>
                    <input type="text" class="form-control" name="customer['created']" disabled
                        value="<?php echo $customer['created']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="campo1">Município</label>
                    <input type="text" class="form-control" name="customer['city']"
                        value="<?php echo $customer['city']; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="campo2">Telefone</label>
                    <input type="text" class="form-control" name="customer['phone']"
                        value="<?php echo $customer['phone']; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="campo3">Celular</label>
                    <input type="text" class="form-control" name="customer['mobile']"
                        value="<?php echo $customer['mobile']; ?>">
                </div>
                <div class="form-group col-md-1">
                    <label for="campo3">UF</label>
                    <input type="text" class="form-control" name="customer['state']"
                        value="<?php echo $customer['state']; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="campo3">Inscrição Estadual</label>
                    <input type="text" class="form-control" name="customer['ie']"
                        value="<?php echo $customer['ie']; ?>">
                </div>

            </div>
            <div id="actions" class="row justify-content-center mt-3">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="list.php" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>

    </div>
    <!--Footer-->
    <div class="footer">
        <?php include(FOOTER_TEMPLATE); ?>
    </div>

</body>

</html>