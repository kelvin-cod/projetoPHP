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
    <title>Gerenciar Clientes</title>
</head>
<style>
.footer {
    padding-top: 420px;
}
</style>

<body>
    <?php require_once('functions.php');	 
       index();	
       ?>
    <?php include(HEADER_TEMPLATE); ?>

    <div class="container-fluid  mt-5 ">
        <header>
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="ml-3">
                        <i class="fa fa-users"></i> Clientes
                    </h2>
                </div>
                <div class="col-sm-6 text-right h2">
                    <a class="btn btn-primary" href="add.php">
                        <i class="fa fa-plus"> </i>
                        Novo Cliente
                    </a>
                    <a class="btn btn-info" href="list.php">
                        <i class="fa fa-refresh"></i>
                        Atualizar
                    </a>
                </div>
            </div>
        </header>
        <?php if (!empty($_SESSION['message'])) : ?> <div
            class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php clear_messages(); ?>
        <?php endif; ?>
        <hr>
        <table class="table table-hover">
            <thead class="text-center">
                <tr class="bg-dark text-white">
                    <th>ID</th>
                    <th width="30%">Nome</th>
                    <th>CPF/CNPJ</th>
                    <th>Telefone</th>
                    <th>Atualizado em</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($customers) : ?>
                <?php foreach ($customers as $customer) : ?> <tr>
                    <td><?php echo $customer['id']; ?></td>
                    <td><?php echo $customer['name']; ?></td>
                    <td><?php echo $customer['cpf_cnpj']; ?></td>
                    <td>00 0000-0000</td>
                    <td><?php echo $customer['modified']; ?></td>
                    <td class="actions text-right">
                        <a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success">
                            <i class="fa fa-eye"></i>
                            Visualizar
                        </a>
                        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil"></i> Editar</a>
                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal"
                            data-customer="<?php echo $customer['id']; ?>">
                            <i class="fa fa-trash"></i>
                            Excluir
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else : ?> <tr>
                    <td colspan="6">Nenhum registro encontrado.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php include('modal.php'); ?>
    <!--Footer-->

    <div class="footer">
        <?php include(FOOTER_TEMPLATE); ?>
    </div>


</body>

</html>