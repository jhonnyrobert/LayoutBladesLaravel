
@extends('layout.principal')

@section('index')
<div class="table-responsive">
	<div class="content">
		<div class="col-md-12">
			<div class="material-datatables">
				<table id="datatable" class="display" cellspacing="0" width="100%" style="width:100%">
					<thead>
						<tr class="text-center" >
							<th>Id</th>
							<th>Nome</th>
							<th>Cpf</th>
							<th>Fone</th> <!--alteração aqui #3-->   
							<th>Data de Registro</th>
							<th>Curso 1</th>
							<th>Curso 2</th>
							<th>Email</th>
							<th>status</th>
							<th>Documentação</th>
						</tr>
					</thead>
					<tbody>
						{{-- @forelse($inscricoes as $insc) --}}
						<tr class="text-center">
							<td>{{$insc->id ?? '-'}}</td> <!--NUMERO -->  
							<td>{{$insc->nome  ?? '-'}}</td>
							<td>{{$insc->cpf  ?? '-'}}</td> <!--alteração aqui #3-->   
							<td>{{$insc->celular  ?? '-'}}</td>
							<td>{{$insc->data_prova  ?? '-'}}</td>
							<td>{{$insc->curso1  ?? '-'}}</td>
							<td>{{$insc->curso2  ?? '-'}}</td>
							<td>{{$insc->email  ?? '-'}}</td> <!--alteração aqui #4-->   
							<td></td>
						</tr>
                    {{--@empty

                        <tr class="text-center">
                            <td colspan="9"> Nenhum Resultado</td> <!--NUMERO -->  
                        </tr>
                        @endforelse--}}
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end content-->
    </div>
    <!--  end card  -->
</div>
@endsection