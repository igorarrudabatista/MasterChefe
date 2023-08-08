@extends('base.base')
@section('content')
<?php 
$processoCount = session()->get('processoCount'); 
$processoCount_corrigir = session()->get('processoCount_corrigir'); 
$processoCount_finalizado = session()->get('processoCount_finalizado'); 
$processoCount_aguardando = session()->get('processoCount_aguardando'); 
$processoCount_tramitada = session()->get('processoCount_tramitada'); 
$processoCount_nao_finalizada = session()->get('processoCount_nao_finalizada'); 
?>

<div id="auth">
        
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card py-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <img src="{{asset('/images/ficha.png')}}" height="48" class='mb-4'>
                            <h3>Consulta de Ficha</h3>
                            <p></p>
                        </div>
                        <form action="index.html">
                            <div class="form-group">
                                <label for="first-name-column">Número da Ficha</label>
                                <input type="number" id="first-name-column" class="form-control" name="fname-column">
                            </div>
    
                            <div class="form-group">
                                <label for="first-name-column"> Categoria </label>
                                <input type="email" id="first-name-column" class="form-control" name="fname-column">
                            </div>
    
                            <div class="form-group">
                                <label for="first-name-column"> Nome do Aluno </label>
                                <input type="email" id="first-name-column" class="form-control" name="fname-column">
                            </div>
    
                            <div class="form-group">
                                <label for="first-name-column">Data de criação</label>
                                <input type="date" id="first-name-column" class="form-control" name="fname-column">
                            </div>
    
                            <div class="clearfix">
                                <button class="btn btn-primary float-end">Pesquisar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        </div>

   



@endsection