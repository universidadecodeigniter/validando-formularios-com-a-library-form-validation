<?php $this->load->view('commons/cabecalho'); ?>

<div class="container">
	<div class="page-header">
		<h1>Validando formulários com a library Form Validation</h1>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<?php if ($erros): ?>
			<div class="alert alert-warning">
				<ul>
					<?= $erros; ?>
				</ul>
			</div>
		<?php endif; ?>

		<?php if ($sucesso): ?>
			<div class="alert alert-success">
					<?= $sucesso; ?>
			</div>
		<?php endif; ?>
	</div>

	<form class="form-horizontal" action="<?=base_url()?>" method="POST">

		<div class="form-group">
			<label class="col-md-4 control-label" for="sexo">Sexo</label>
			<div class="col-md-4">
				<select id="sexo" name="sexo" class="form-control">
					<option value="">Selecione...</option>
					<option value="M" <?= set_select('sexo','M') ?>>Masculino</option>
					<option value="F" <?= set_select('sexo','F') ?>>Feminimo</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="nome">Nome</label>
			<div class="col-md-4">
				<input id="nome" name="nome" placeholder="Nome" class="form-control input-md" required="" type="text" value="<?=set_value('nome')?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="idade">Idade</label>
			<div class="col-md-4">
				<input id="idade" name="idade" placeholder="Idade" class="form-control input-md" type="text" value="<?=set_value('idade')?>">
				<span class="help-block">Somente número</span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="email">Email</label>
			<div class="col-md-4">
				<input id="email" name="email" placeholder="Email" class="form-control input-md" required="" type="text" value="<?=set_value('email')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="emailconfirmar">Confirme seu Email</label>
			<div class="col-md-4">
				<input id="emailconfirmar" name="emailconfirmar" placeholder="Confirme seu Email" class="form-control input-md" type="text">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="cidade">Cidade</label>
			<div class="col-md-4">
				<input id="cidade" name="cidade" placeholder="Cidade" class="form-control input-md" required="" type="text" value="<?=set_value('cidade')?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="conhecimento">Conhecimento em programação</label>
			<div class="col-md-4">
				<label class="radio-inline" for="conhecimento-0">
					<input name="conhecimento" id="conhecimento-0" value="1" type="radio" <?= set_radio('conhecimento','1') ?>>
					Iniciante
				</label>
				<label class="radio-inline" for="conhecimento-1">
					<input name="conhecimento" id="conhecimento-1" value="2" type="radio" <?= set_radio('conhecimento','2') ?>>
					Intermediário
				</label>
				<label class="radio-inline" for="conhecimento-2">
					<input name="conhecimento" id="conhecimento-2" value="3" type="radio" <?= set_radio('conhecimento','3') ?>>
					Avançado
				</label>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="cpf">CPF</label>
			<div class="col-md-4">
				<input id="cpf" name="cpf" placeholder="CPF" class="form-control input-md" type="text" value="<?=set_value('cpf')?>">
				<span class="help-block">Clique <a href="javascript:void(0)" onclick="gerarCPF(document.getElementById('cpf'));">aqui</a> para gerar um CPF e não precisar usar o seu.</span>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-4 col-md-offset-4">
				<input type="submit" class="btn btn-success" value="Validar"/>
			</div>
		</div>

	</form>
</div>

<?php $this->load->view('commons/rodape'); ?>
