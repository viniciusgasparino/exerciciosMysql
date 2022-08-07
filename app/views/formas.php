<h1>Áreas da figuras geométricas</h1>
		<fieldset>
			<legend>Calculo</legend>
			<form action="<?= URL_BASE . "area/calcular" ?>" method="post">
				<label class="col-4">
					<small>Nome</small>
					<select name="figura">
						<option value="quadrado" <?php if($figura=="quadrado") {echo "selected";} ?>>Quadrado</option>
						<option value="retangulo" <?php if($figura=="retangulo") {echo "selected";} ?>>Retângulo</option>
						<option value="triangulo" <?php if($figura=="triangulo") {echo "selected";} ?>>Triângulo</option>
						<option value="circulo" <?php if($figura=="circulo") {echo "selected";} ?>>Circulo</option>
					</select>
				</label>
				
				<label class="col">
					<small>Base</small>
					<input type="text" name="base" value="<?= isset($base) ? $base : 0 ?>" placeholder="Digite aqui">
				</label>
				<label class="col">
					<small>Altura</small>
					<input type="text" name="altura" value="<?= isset($altura) ? $altura : 0 ?>" placeholder="Digite aqui">
				</label>
				<label class="col">
					<small>Raio</small>
					<input type="text" name="raio" value="<?= isset($raio) ? $raio : 0 ?>" placeholder="Digite aqui">
				</label>
				<div class="col-12">
					<input type="submit" value="calcular">
				</div>
			</form>
		<?php if(isset($resultado)) { ?>	
			<fieldset class="alt">
				<legend>Resultado</legend>
				<div class="centralizar"><img src="<?= URL_BASE . "assets/img/" .$figura . ".png" ?>"></div>
				<h5>Área do <?= $figura ?> é área = <b><?= $formulas ." = ". $resultado ?></b></h5> 
			</fieldset>
			</fieldset>
		<?php } ?>	