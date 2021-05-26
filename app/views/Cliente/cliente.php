<div class="col-9 home">
				  <div class="caixa">										
					<div class="conteudo pt-3">

					<?php 
$this->verMSG();
$this->verERRO();     
?>

						<div class="titulo mb-0"><i class="far fa-list-alt"></i> Importar Cliente</span></div>
						
						<div class="base-caixa formulario mb-4 mostraFiltro">							
							<form action="<?php echo URL_BASE."Cliente/pesquisar" ?>" method="POST">
								<div class="rows">
								<div class="col-2 mt-4 pt-1">
										<input type="submit" value="Pesquisar" class="btn d-table m-auto">
									</div>
								</div>
							</form>
						</div>
						<div class="base-caixa">							
	
							<div class="tabela-responsiva">								
							<table width="100%" cellpadding="0" cellspacing="0" class="tabela" id="dataTable">
								<thead>
								<tr>
									<th width="10%" align="left">Tipo Movimento:</th>
									<th  align="left">banco:</th>
									<th  align="left">Nosso Numero:</th>                                    
                                    <th width="90%" align="left">Cliente:</th>
                                    <th  align="left">Vencimento:</th>
                                    <th width="0%" align="left">Pagamento:</th>
                                    <th width="0%" align="left">valor:</th>
                                    <th width="0" align="left">Juros e Multa:</th>
                                    <th width="0%" align="left">Parcela:</th>                                    
                                    <th width="0%" align="left">Valor Tarifa:</th>
                                    <th width="0%" align="left">Valor Recebido:</th>	
                                    <th width="0%" align="left">vlr_liquido:</th>
                                    <th width="0%" align="left">Documento:</th>	

								</tr>
								</thead>
								<tbody>
									<?php foreach($boletos as $retorno) {  ?>	 
                                                                           				
									<tr>
										<td ><?php 

                                        
                                        if ($retorno->codigo_movimento == 2) {
                                            echo "Entrada Confirmada";
                                        }
                                        if ($retorno->codigo_movimento == 3) {
                                            echo "Entrada Rejeitada";
                                        }
                                        if ($retorno->codigo_movimento == 4) {
                                            echo "Transferência de Carteira/Entrada";
                                        }
                                        if ($retorno->codigo_movimento == 5) {
                                            echo "Transferência de Carteira/Baixa";
                                        }
                                        if ($retorno->codigo_movimento == 6) {
                                            echo "Liquidação";
                                        }
                                        if ($retorno->codigo_movimento == 7) {
                                            echo "Confirmação do Recebimento da Instrução de Desconto";
                                        }
                                        if ($retorno->codigo_movimento == 8) {
                                            echo "Confirmação do Recebimento do Cancelamento do Desconto";
                                        }
                                        if ($retorno->codigo_movimento == 9) {
                                            echo "Baixa";
                                        }
                                        if ($retorno->codigo_movimento == 11) {
                                            echo "Títulos em Carteira (Em Ser)";
                                        }
                                        if ($retorno->codigo_movimento == 12) {
                                            echo "Confirmação Recebimento Instrução de Abatimento";
                                        }
                                        if ($retorno->codigo_movimento == 13) {
                                            echo "Confirmação Recebimento Instrução de Cancelamento Abatimento";
                                        }
                                        if ($retorno->codigo_movimento == 14) {
                                            echo "Confirmação Recebimento Instrução Alteração de Vencimento";
                                        }
                                        if ($retorno->codigo_movimento == 15) {
                                            echo "Franco de Pagamento";
                                        }
                                        if ($retorno->codigo_movimento == 17) {
                                            echo "Liquidação Após Baixa ou Liquidação Título Não Registrado";
                                        }
                                        if ($retorno->codigo_movimento == 19) {
                                            echo "Confirmação Recebimento Instrução de Protesto";
                                        }
                                        if ($retorno->codigo_movimento == 20) {
                                            echo "Confirmação Recebimento Instrução de Sustação/Cancelamento de Protesto";
                                        }
                                        if ($retorno->codigo_movimento == 23) {
                                            echo "Remessa a Cartório (Aponte em Cartório)";
                                        }
                                        if ($retorno->codigo_movimento == 24) {
                                            echo "Retirada de Cartório e Manutenção em Carteira";
                                        }
                                        if ($retorno->codigo_movimento == 25) {
                                            echo "Protestado e Baixado (Baixa por Ter Sido Protestado)";
                                        }
                                        if ($retorno->codigo_movimento == 26) {
                                            echo "Instrução Rejeitada";
                                        }
                                        if ($retorno->codigo_movimento == 27) {
                                            echo "Confirmação do Pedido de Alteração de Outros Dados";
                                        }
                                        if ($retorno->codigo_movimento == 28) {
                                            echo "Débito de Tarifas/Custas";
                                        }
                                        if ($retorno->codigo_movimento == 29) {
                                            echo "Ocorrências do Pagador";
                                        }
                                        if ($retorno->codigo_movimento == 30) {
                                            echo "Alteração de Dados Rejeitada";
                                        }
                                        if ($retorno->codigo_movimento == 33) {
                                            echo "Confirmação da Alteração dos Dados do Rateio de Crédito";
                                        }
                                        if ($retorno->codigo_movimento == 34) {
                                            echo "Confirmação do Cancelamento dos Dados do Rateio de Crédito";
                                        }
                                        if ($retorno->codigo_movimento == 35) {
                                            echo "Confirmação do Desagendamento do Débito Automático";
                                        }
                                        if ($retorno->codigo_movimento == 36) {
                                            echo "Confirmação de envio de e-mail/SMS";
                                        }
                                        if ($retorno->codigo_movimento == 37) {
                                            echo "Envio de e-mail/SMS rejeitado";
                                        }
                                        if ($retorno->codigo_movimento == 38) {
                                            echo "Confirmação de alteração do Prazo Limite de Recebimento (a data deve ser";
                                        }
                                        if ($retorno->codigo_movimento == 39) {
                                            echo "Confirmação de Dispensa de Prazo Limite de Recebimento";
                                        }
                                        if ($retorno->codigo_movimento == 40) {
                                            echo "Confirmação da alteração do número do título dado pelo Beneficiário";
                                        }
                                        if ($retorno->codigo_movimento == 41) {
                                            echo "Confirmação da alteração do número controle do Participante";
                                        }
                                        if ($retorno->codigo_movimento == 42) {
                                            echo "Confirmação da alteração dos dados do Pagador";
                                        }
                                        if ($retorno->codigo_movimento == 43) {
                                            echo "Confirmação da alteração dos dados do Pagadorr/Avalista";
                                        }
                                        if ($retorno->codigo_movimento == 44) {
                                            echo "Título pago com cheque devolvido";
                                        }
                                        if ($retorno->codigo_movimento == 45) {
                                            echo "Título pago com cheque compensado";
                                        }
                                        if ($retorno->codigo_movimento == 46) {
                                            echo "Instrução para cancelar protesto confirmada";
                                        }
                                        if ($retorno->codigo_movimento == 47) {
                                            echo "Instrução para protesto para fins falimentares confirmada";
                                        }
                                        if ($retorno->codigo_movimento == 48) {
                                            echo "Confirmação de instrução de transferência de carteira/modalidade de cobrança";
                                        }
                                        if ($retorno->codigo_movimento == 49) {
                                            echo "Alteração de contrato de cobrança";
                                        }
                                        if ($retorno->codigo_movimento == 50) {
                                            echo "Título pago com cheque pendente de liquidação";
                                        }
                                        if ($retorno->codigo_movimento == 51) {
                                            echo "Título DDA reconhecido pelo Pagador";
                                        }
                                        if ($retorno->codigo_movimento == 52) {
                                            echo "Título DDA não reconhecido pelo Pagador";
                                        }
                                        if ($retorno->codigo_movimento == 53) {
                                            echo "Título DDA recusado pela CIP";
                                        }
                                        if ($retorno->codigo_movimento == 54) {
                                            echo "Confirmação da Instrução de Baixa de Título Negativado sem Protesto";
                                        }
                                        if ($retorno->codigo_movimento == 55) {
                                            echo "Confirmação de Pedido de Dispensa de Multa";
                                        }
                                        if ($retorno->codigo_movimento == 56) {
                                            echo "Confirmação do Pedido de Cobrança de Multa";
                                        }
                                        if ($retorno->codigo_movimento == 57) {
                                            echo "Confirmação do Pedido de Alteração de Cobrança de Juros";
                                        }
                                        if ($retorno->codigo_movimento == 58) {
                                            echo "Confirmação do Pedido de Alteração do Valor/Data de Desconto";
                                        }
                                        if ($retorno->codigo_movimento == 59) {
                                            echo "Confirmação do Pedido de Alteração do Beneficiário do Título";
                                        }
                                        if ($retorno->codigo_movimento == 60) {
                                            echo "Confirmação do Pedido de Dispensa de Juros de Mora";
                                        }
                                        if ($retorno->codigo_movimento == 85) {
                                            echo "Confirmação de Desistência de Protesto";
                                        }
                                        if ($retorno->codigo_movimento == 86) {
                                            echo "Confirmação de cancelamento do Protesto";
                                        }
                                        
                                        
                                         ?></td>
										<td ><?php echo $retorno->codigo_banco ?></td>
										<td ><?php echo $retorno->nosso_numero ?></td>	                                       	
                                        <td ><?php echo $retorno->nome_pagador ?></td>	
                                        <td ><?php echo databr($retorno->vencimento) ?></td>	
                                        <td ><?php echo databr($retorno->R3U->data_ocorrencia) ?></td>	
                                        <td ><?php echo moedaBr($retorno->valor) ?></td>
                                        <td ><?php echo $retorno->R3U->vlr_juros_multa ?></td>	
                                        <td ><?php echo $retorno->parcela ?></td>
                                        <td ><?php echo moedaBr($retorno->vlr_tarifa) ?></td>	
                                        <td ><?php echo moedaBr($retorno->R3U->vlr_pago) ?></td>	
                                        <td ><?php echo $retorno->R3U->vlr_liquido ?></td>	
                                        <td ><?php echo $retorno->seu_numero ?></td>
                                        
										
																			
									 </tr>	
									 <?php } ?>
								  
								</tbody>
								 
							</table>
							
						</div>
						</div>
					
					</div>
				</div>
			</div>	