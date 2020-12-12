<title>Criar Campanha</title>

<form>
<!-- Digite Nome da Campanha-->
<label for="Campaing">Nome da Campanha:</label>
<input type="text" id="Campaing" name="Campaing" required>

<!-- Escolha o Sistema--->
<label for="Rpgsys">Escolha o Sistema:</label>
<select id="Rpgsys" name="Rpgsys" required>
	<option value="" disabled selected>Selecione...</option>
	<optgroup label="Dungeons & Dragons">
		<option value="dd5e">Dungeons & Dragons: 5 edição</option>
	</optgroup>
	<optgroup label="Tormenta RPG">
		<option value="" disabled >Em Breve</option>
	</optgroup>
	<optgroup label="Call of Cthulhu">
		<option value="" disabled >Em Breve</option>
	</optgroup>
</select>
<!--Defina a quantidade de Jogadores-->
<label for="Qplayer">Quantidades de Jogadores(Mestre não Incluso)</label>
<select id="Qplayer" name="Qplayer" required>
	<option value="" disabled selected>Selecione...</option>
	<option value="2">2 Jogadores</option>
	<option value="3">3 Jogadores</option>
	<option value="4">4 Jogadores</option>
	<option value="5">5 Jogadores</option>
	<option value="6">6 Jogadores</option>
	<option value="7">7 Jogadores</option>
	<option value="8">8 Jogadores</option>	
</select>

<input type="submit" value="Criar Campanha">
</form>