<script src="js/functions.js" type="text/javascript"></script>
<script src="js/marked.min.js"></script>
<script>
$(document).ready(function(){
	$('form').submit(function(e){
		e.preventDefault();
	})
})
var theme = [];
function gerarurl(){
	var createdurl = "http://localhost:8030/"
	var border = $('#mborder option:selected').val();console.log(border);
	var background = $('#mbackground option:selected').val();console.log(background);
	if($('#mportraits').prop('checked')){
		var portrait = 'on';
	}else{
		var portrait = 'off';
	}
	if($('#mmap').prop('checked')){
		var view = 'map';
	}else{
		var view = 'player';
	}
	var createdurl = createdurl+"Stream-n-Roll/?page=stream&border="+border+"&bg="+background+"&players=8&view="+view+"&portraits="+portrait;
	console.log(createdurl);
}
	function mark(){
		document.getElementById('preview').innerHTML =
		marked(document.getElementById('desc').value);
	}
	var preview = 'off';
	function showpre(){
		if(preview == 'off'){
			document.getElementById('desc').style.visibility = "hidden";
			document.getElementById('desc').style.height = "0px";
			document.getElementById('preview').style.visibility = "visible";
			document.getElementById('preview').style.height = "400px";
			preview = 'on';
		}else{
			document.getElementById('preview').style.visibility = "hidden";
			document.getElementById('preview').style.height = "0px";
			document.getElementById('desc').style.visibility = "visible";
			document.getElementById('desc').style.height = "400px";
			preview = 'off';
		}
	}

</script>
<form>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 description">
			<!-- Botão de ativação de preview -->
			<button id='edit' onclick="showpre();mark()">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
					<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
					<path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
				</svg>
			</button>
			<!-- Nome Mesa -->
			<input type="text" value='Nome da Mesa' id="nomemesa" style="width:100%; overflow-x:auto;">
			<!-- Descrição Mesa -->
			<div class="form-group green-border-focus">
				<textarea class="form-control" id="desc" rows="3" onkeydown="mark()" style="resize:none;"></textarea>
			</div>
			<div class="form-group green-border-focus">
				<p class="form-control" id="preview"></p>
			</div>
			<button id="savealter">Salvar Alterações</button>
		</div>
		<div class="col-md-3">
		<h3 style="text-align:center;margin-top:40px;">Markdown</h3>
		<table class="table table-sm table-dark" id="markdownhelp">
			<thead>
				<tr>
					<th scope="col">Markdown</th>
					<th scope="col">Função</th>
					<th scope="col">Exemplo</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>#</td>
					<td>Titulo</td>
					<td># Titulo</td>
				</tr>
				<tr>
					<td>##</td>
					<td>Subtitulo</td>
					<td>## Subtitulo</td>
				</tr>
				<tr>
					<td>1.</td>
					<td>Lista Numerada</td>
					<td> 1. item</td>
				</tr>
				<tr>
					<td>-</td>
					<td>Lista</td>
					<td> - item</td>
				</tr>
				<tr>
					<td>*</td>
					<td>Italico</td>
					<td>*<i>Italico</i>**</td>
				</tr>
				<tr>
					<td>**</td>
					<td>Negrito</td>
					<td>**<strong>Negrito</strong>**</td>
				</tr>
				<tr>
					<td>></td>
					<td>Espaçar</td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<p style="text-align:justify;text-indent:20px;"> Você pode utilizar <i>markedown</i> para formatar a descrição da mesa, utilizando os comandos acima. Você pode ver como está ficando clicando no botão
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
			<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
			<path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
		</svg>.
		</p>
		</div>
		<div class="col-md-3">
		<table class="table" id="apoverlay">
			<thead class="thead-light">
				<tr>
					<th colspan='2'> Informações da Mesa</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Criador</th>
					<td><input type="text" class="tableinputtext" value="Default" name="creator" readonly></td>
				</tr>
				<tr>
					<th scope="row">Sistema</th>
					<td>
						<select name="system" id="mbackground" class="form-control">
							<option value="dnd5e">D&D 5e</option>
						</select>
					</td>
				</tr>
				<tr>
					<th scope="row">Max Players</th>
					<td>
						<select name="maxp" id="mbackground" class="form-control">
							<option value="6">6</option>
							<option value="8">8</option>
						</select>
					</td>
				</tr>
				<tr>
					<th scope="row">Data de Criação</th>
					<td><input type="text" class="tableinputtext" value="xx/xx/xxxx" name="created" readonly></td>
				</tr>
			</tbody>
			
			<thead class="thead-light">
				<tr class="">
					<th colspan='2' >Aparencia da Overlay</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Bordas:</th>
					<td>
						<select name="bordas" id="mborder" class="form-control">
							<option value="wood">Madeira</option>
							<option value="stone">Pedra</option>
						</select>
					</td>
				</tr>
				<tr>
					<th scope="row">Fundo:</th>
					<td>
						<select name="bordas" id="mbackground" class="form-control">
							<option value="ambiente1">Ambiente 1</option>
							<option value="ambiente2">Ambiente 2</option>
							<option value="pantano">Pantano</option>
							<option value="cidadeflutuante">Cidade Flutuante</option>
						</select>
					</td>
				</tr>
				<tr>
					<th scope="row">Imagem dos Persongens</th>
					<td>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="mportraits">
							<label class="custom-control-label" for="mportraits"></label>
						</div>
					</td>
				</tr>
				<tr>
					<th scope="row">Area para imagens/Mapas</th>
					<td>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="mmap">
							<label class="custom-control-label" for="mmap"></label>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan='2'><button onclick="gerarurl()" id="urlgen">Gerar Link</button></td>
				</tr>
			</tbody>
		</table>
		
		
		
		
		
			
		</div>
	</div>
</div>
</form>