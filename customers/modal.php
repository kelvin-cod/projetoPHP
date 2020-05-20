<!-- Modal de Delete-->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header  bg-dark">
                <h6 class="modal-title text-white" id="modalLabel">Excluir Item</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body"> Deseja realmente excluir este item? </div>
            <div class="modal-footer justify-content-center">

                <a id="confirm" class="btn btn-success" href="#">
                    <i class="fa fa-check"></i> Sim
                </a>
                <a id="cancel" class="btn btn-danger text-white ml-3" data-dismiss="modal">
                    <i class="fa fa-times"></i> Não
                </a>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->