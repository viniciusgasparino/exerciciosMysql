<h1>Cadastro</h1>
		<fieldset>
			<legend>Lista de Cantores</legend>
			<a href="cadastro.html" class="btn float-right" style="top:-30px">Inserir novo</a>
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome do cantor</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($vocals as $vocals) { ?>
					<tr>
						<td align="center"><?= $vocals["id_cantor"] ?></td>
						<td align="center"><?= $vocals["cantor"] ?></td>
						<td align="center">
							<a href="cadastro.html" class="btn">Excluir</a>
							<a href="cadastro.html" class="btn">Editar</a>
						</td>
					</tr>
				<?php } ?>	
				</tbody>
			<table>
		</fieldset>