
@extends('layout.principal')

@section('index')

<!-- div de criação de nova questão-->
<button class="btn btn-round btn-rose" data-toggle="modal" data-target="#signupModal">
	<i class="material-icons">add_circle</i>
	Nova Questão
</button>

<div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-signup" role="document">
		<div class="modal-content">
			<div class="col-md-12">
				
				<form id="contact-form2" method="post">
					<div class="card-header card-header-rose text-center">
						<h4 class="card-title">CRIAR NOVA QUESTÃO</h4>
					</div>
					<div class="card-body">
						<div class="form-group label-floating has-rose is-empty bmd-form-group is-filled">
							<label for="exampleMessage" class="bmd-label-floating">Texto da Questão</label>
							<textarea name="message" class="form-control" id="exampleMessage" rows="6"></textarea>
							<span class="material-input"></span>
						</div>
					</div>
					<div class="card-footer justify-content-between">
						<span class="title"> Selecione a Alternitva Correta </span>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value=""> Questão (A)
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<button type="submit" class="btn btn-rose pull-right">Gravar</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
<!-- fim div de criação de questão-->

<div class="row">

	<div class="col-md-4">
		<div class="card">
			<ul>
				<li>
					<div class="card-body">
						<h4 class="card-title">Enunciado da Questão Um</h4>
						<br>A) exemplo questão
						<br>B) exemplo questão
						<br>C) exemplo questão
						<br>D) exemplo questão
						<br>E) exemplo questão
						<hr>
					</div>
				</li>
				<li>
					<div class="card-body">
						<h4 class="card-title">Enunciado da Questão Dois</h4>
						<br> A) exemplo questão
						<br>B) exemplo questão
						<br>C) exemplo questão
						<br>D) exemplo questão
						<br>E) exemplo questão
						<hr>
					</div>
				</li><li>
					<div class="card-body">
						<h4 class="card-title">Enunciado da Questão Três</h4>
						<br> A) exemplo questão
						<br>B) exemplo questão
						<br>C) exemplo questão
						<br>D) exemplo questão
						<br>E) exemplo questão
						<hr>
					</div>
				</li><li>
					<div class="card-body">
						<h4 class="card-title">Enunciado da Questão Quadro</h4>
						<br> A) exemplo questão
						<br>B) exemplo questão
						<br>C) exemplo questão
						<br>D) exemplo questão
						<br>E) exemplo questão
						<hr>
					</div>
				</li>

				<li>
					<div class="card-body">
						<h4 class="card-title">Enunciado da Questão Cinco</h4>
						<br> A) exemplo questão
						<br>B) exemplo questão
						<br>C) exemplo questão
						<br>D) exemplo questão
						<br>E) exemplo questão
						<hr>
					</div>
				</li>
			</ul>
		</div>
	</div>


	<div class="col-md-8">
		<div class="card">
			<div class="card-header card-header-icon card-header-success">
				<div class="card-icon">
					<i class="material-icons">playlist_add_check</i>
				</div>
				<h1>Jnet</h1>
			</div>
		</div>
	</div>
</div>
@endsection