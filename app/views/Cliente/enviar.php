<div class="col-9 home">
    <div class="caixa">
        <div class="conteudo pt-3">

            <?php
            $this->verMSG();
            $this->verERRO();
            ?>

            <div class="titulo mb-0"><i class="far fa-list-alt"></i> Importar Cliente</span></div>
            <form action="<?php echo URL_BASE . "Cliente/envio" ?>" method="POST">
                <div class="col-12 mt-4 pb-4">
                    <input type="submit" value="Gerar" class="btn d-table m-auto">
                </div>

            </form>

            <div class="base-caixa">

                <div class="tabela-responsiva">
                    <table width="100%" cellpadding="0" cellspacing="0" class="tabela" id="dataTable">
                        <thead>
                            <tr>
                                <th width="5%" align="left">Id</th>
                                <th width="20%" align="left">Nome:</th>
                                <th width="10%" align="left">Telefone:</th>
                                <th width="65%" align="left">Mensagem:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cliente as $clientes) {  ?>

                                <tr>

                                    <td><?php echo $clientes[0] ?></td>
                                    <td><?php echo $clientes[1]   ?></td>
                                    <td><?php echo $clientes[2] ?></td>
                                    <td><?php echo $clientes[3] ?></td>

                                </tr>
                            <?php } ?>

                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </div>
</div>