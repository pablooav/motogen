				
								<table class="gambiarra-tabela">
								<thead class="gambiarra-tabela">
									<tr>	
									<th class="gambiarra-tabela">CNPJ da Empresa</th>
									<th class="gambiarra-tabela">Razão Social</th>
									<th class="gambiarra-tabela">Idade</th>
									<th class="gambiarra-tabela">Lucro Total até o momento</th>
									
									
								

									</tr>
								</thead>
								<tbody class="gambiarra-tabela"> 
									<?php
									require_once 'listar_relatorio_lucro.php';									
									?>
									<?php if($dados) : ?>
									<?php foreach($dados as $lucro) : ?>
									<tr>		
									<td class="gambiarra-tabela"><?php echo $lucro['Cnpj']?></td>	
								<td class="gambiarra-tabela"><?php echo $lucro['RazaoSocial']?></td>											
									<td class="gambiarra-tabela"><?php $dias = $lucro['DiasCriacao']; echo '' . round($dias / 365) .' anos'?></td>
									<td class="gambiarra-tabela"><?php echo 'R$ '.$lucro['LucroTotal']?></td>
	
						
									
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