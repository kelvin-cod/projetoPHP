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
    padding-top: 50px;
}
</style>

<body>
    <?php 		
        require_once('functions.php'); 		
        view($_GET['id']);	
    ?>

    <?php include(HEADER_TEMPLATE); ?>

    <main>
        <div class="container text-center mt-4 border-black">
            <div class="inline">
                <h2>
                    <i class="fa fa-user"></i>
                    Cliente
                    <?php echo $customer['id']; ?>
                </h2>
            </div>
            <hr>
            <?php if (!empty($_SESSION['message'])) : ?> <div class="alert alert-<?php echo $_SESSION['type']; ?>">
                <?php echo $_SESSION['message']; ?></div> <?php endif; ?>
            <dl class="dl-horizontal">
                <dt>Nome / Razão Social:</dt>
                <dd><?php echo $customer['name']; ?></dd>
                <dt>CPF / CNPJ:</dt>
                <dd><?php echo $customer['cpf_cnpj']; ?></dd>
                <dt>Data de Nascimento:</dt>
                <dd><?php echo $customer['birthdate']; ?></dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Endereço:</dt>
                <dd><?php echo $customer['address']; ?></dd>
                <dt>Bairro:</dt>
                <dd><?php echo $customer['hood']; ?></dd>
                <dt>CEP:</dt>
                <dd><?php echo $customer['zip_code']; ?></dd>
                <dt>Data de Cadastro:</dt>
                <dd><?php echo $customer['created']; ?></dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Cidade:</dt>
                <dd><?php echo $customer['city']; ?></dd>
                <dt>Telefone:</dt>
                <dd><?php echo $customer['phone']; ?></dd>
                <dt>Celular:</dt>
                <dd><?php echo $customer['mobile']; ?></dd>
                <dt>UF:</dt>
                <dd><?php echo $customer['state']; ?></dd>
                <dt>Inscrição Estadual:</dt>
                <dd><?php echo $customer['ie']; ?></dd>
            </dl>
            <div id="actions" class="row mb-3">
                <div class="col-md-12">
                    <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-info">
                        Editar
                    </a>
                    <a href="list.php" class="btn btn-danger">
                        Voltar

                    </a>
                </div>
            </div>
        </div>



    </main>
    <!--Footer-->
    <div class="footer">
        <?php include(FOOTER_TEMPLATE); ?>
    </div>

</body>

</html>