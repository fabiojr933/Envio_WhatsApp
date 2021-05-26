<script src="<?php echo URL_BASE."assets/js/produto.js" ?>"></script>				
				<div class="col-9 home">
				<div class="caixa">					
					<div class="conteudo pt-3">
						<div class="titulo mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Buscar arquivo para importação </span></div>
						<div class="base-caixa formulario">							
							<form action="<?php echo URL_BASE."Cliente/Cliente" ?>" method="POST" enctype="multipart/form-data">
							<?php  
								$this->verMSG();
								$this->verERRO();
							?>
	
								<div class="rows">
									<div class="col-4 img-up">
										<div class="campo-upload">
											<label for="arquivo"> Buscar Arquivo 
												<img src="<?php echo URL_BASE ?>assets/img/img-semproduto.jpg" id="imgUp" class="img-fluido" width="100px">
												<span>Encontrar arquivo</span>
											</label>
											<input type="file" name="arquivo" id="arquivo" > 
										</div>
										<div id="uploadStatus"></div>
									</div>							

																				
											<div class="col-12 mt-4 pb-4">
												<input type="hidden" />
												<input type="submit" value="Gerar" class="btn d-table m-auto">
											</div>
										</div>
									</div>	



								</div>
							</form>
						</div>					
					</div>
				</div>
			</div>	
			