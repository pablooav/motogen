				
								<table class="gambiarra-tabela">
								<thead class="gambiarra-tabela">
									<tr>	
									<th class="gambiarra-tabela">ID</th>
									<th class="gambiarra-tabela">Nome do Motoboy</th>
									<th class="gambiarra-tabela">CPF</th>
									<th class="gambiarra-tabela">Pedidos Realizados</th>
									<th class="gambiarra-tabela">Valor Total (R$)</th>
									
								

									</tr>
								</thead>
								<tbody class="gambiarra-tabela"> 
									<?php
									require_once 'listar_relatorio_motoboy.php';									
									?>
									<?php if($dados) : ?>
									<?php foreach($dados as $motoboy) : ?>
									<tr>									
									<td class="gambiarra-tabela"><?php echo $motoboy['Id']?></td>
									<td class="gambiarra-tabela"><?php echo $motoboy['NomeMotoboy']?></td>
									<td class="gambiarra-tabela"><?php echo $motoboy['Cpf']?></td>	
									<td class="gambiarra-tabela"><?php echo $motoboy['NumeroPedidos']?></td>
									<td class="gambiarra-tabela"><?php echo $motoboy['ValorMotoboy']?></td>		
						
									
									</tr>
									
									<?php endforeach; ?>
									<?php else : ?>
									<tr>
									<td colspan="6"> Nenhum registro encontrado.</td>
									</tr>
									<?php endif; ?>
								</tbody>
							</table>
							<Br>