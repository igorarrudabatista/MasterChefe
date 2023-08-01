   <div class="tab-pane fade" id="list-projeto" role="tabpanel" aria-labelledby="list-projeto-list">
       <div class="card">
           <div class="card-body">
               <h5 class="card-title"> <b> <big> 6. </b> </big>
                   Identificação do Projeto </h5>
               {!! Form::open([
                   'url' => route('trdigital.validar.projeto', ['id' => $n_processo->Projeto_conteudo->id]),
                   'method' => 'post',
               ]) !!}

               <!-- General Form Elements -->
               <div class="row mb-3">
                   <label for="inputText" class="col-sm-2 col-form-label">
                       <b> Título:
                       </b> </label>


                   <div class="col-sm-10">
                       {!! Form::text('Titulo_Projeto_Conteudo', $n_processo->Projeto_conteudo->Titulo_Projeto_Conteudo, ['class' => 'form-control', 'disabled' => 'disabled',
                       'id' => 'floatingTextarea']) !!}

                       {!! Form::radio(
                           'Titulo_Projeto_Conteudo_sit',
                           '1',
                           $n_processo->Projeto_conteudo->Titulo_Projeto_Conteudo_sit == 1,
                           [
                               'class' => 'form-check-input',
                               'id' => 'gridRadios1',
                           ],
                       ) !!}
                       <label class="form-check-label" for="gridRadios1">
                           <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                               Validado</span>
                       </label>

                       {!! Form::radio(
                           'Titulo_Projeto_Conteudo_sit',
                           '0',
                           $n_processo->Projeto_conteudo->Titulo_Projeto_Conteudo_sit == 0,
                           [
                               'class' => 'form-check-input',
                               'id' => 'gridRadios2',
                           ],
                       ) !!}
                       <label class="form-check-label" for="gridRadios2">
                           <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                               Corrigir</span>
                       </label>
                   </div>
               </div>


               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">
                       <b>
                           Objeto:</b></label>
                   <div class="col-sm-10">
                       {!! Form::text('Objeto_Projeto_Conteudo', $n_processo->Projeto_conteudo->Objeto_Projeto_Conteudo, 
                       ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
                       {!! Form::radio(
                           'Objeto_Projeto_Conteudo_sit',
                           '1',
                           $n_processo->Projeto_conteudo->Objeto_Projeto_Conteudo_sit == 1,
                           [
                               'class' => 'form-check-input',
                               'id' => 'gridRadios1',
                           ],
                       ) !!}
                       <label class="form-check-label" for="gridRadios1">
                           <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                               Validado</span>
                       </label>

                       {!! Form::radio(
                           'Objeto_Projeto_Conteudo_sit',
                           '0',
                           $n_processo->Projeto_conteudo->Objeto_Projeto_Conteudo_sit == 0,
                           [
                               'class' => 'form-check-input',
                               'id' => 'gridRadios2',
                           ],
                       ) !!}
                       <label class="form-check-label" for="gridRadios2">
                           <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                               Corrigir</span>
                       </label>

                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label"><b>
                           Objetivo
                           Geral: </b></label>
                   <div class="col-sm-10">
                    {!! Form::text('Obj_Geral_Projeto_Conteudo', $n_processo->Projeto_conteudo->Obj_Geral_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
                       {!! Form::radio(
                           'Obj_Geral_Projeto_Conteudo_sit',
                           '1',
                           $n_processo->Projeto_conteudo->Obj_Geral_Projeto_Conteudo_sit == 1,
                           [
                               'class' => 'form-check-input',
                               'id' => 'gridRadios1',
                           ],
                       ) !!}
                       <label class="form-check-label" for="gridRadios1">
                           <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                               Validado</span>
                       </label>

                       {!! Form::radio(
                           'Obj_Geral_Projeto_Conteudo_sit',
                           '0',
                           $n_processo->Projeto_conteudo->Obj_Geral_Projeto_Conteudo_sit == 0,
                           [
                               'class' => 'form-check-input',
                               'id' => 'gridRadios2',
                           ],
                       ) !!}
                       <label class="form-check-label" for="gridRadios2">
                           <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                               Corrigir</span>
                       </label>

                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label"><b>
                           Objetivo
                           específico: </b></label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Obj_especifico_Projeto_Conteudo', $n_processo->Projeto_conteudo->Obj_especifico_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
                
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                               data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label"><b>
                           Justificativa:</b> </label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Justificativa_Projeto_Conteudo', $n_processo->Projeto_conteudo->Justificativa_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
          
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                               data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label"><b>Contextualização
                       </b> </label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Contextualizacao_Projeto_Conteudo', $n_processo->Projeto_conteudo->Contextualizacao_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
           
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                               data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>

                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label"><b>Diagnóstico
                       </b> </label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Diagnostico_Projeto_Conteudo', $n_processo->Projeto_conteudo->Diagnostico_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
                     
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                               data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>

                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Importância
                       do
                       Projeto:</label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Importancia_Projeto_Conteudo', $n_processo->Projeto_conteudo->Importancia_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
                     
          
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                               data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Caracterização
                       dos Interesses Recíprocos entre o
                       Proponente/Estado</label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Caracterizacao_Projeto_Conteudo', $n_processo->Projeto_conteudo->Caracterizacao_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                               data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Público
                       alvo
                       Interno</label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Publico_Alvo_Interno_Projeto_Conteudo', $n_processo->Projeto_conteudo->Publico_Alvo_Interno_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     
         
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm"
                               data-bs-toggle="modal" data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Público
                       alvo
                       Externo</label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Publico_Alvo_Externo_Projeto_Conteudo', $n_processo->Projeto_conteudo->Publico_Alvo_Externo_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm"
                               data-bs-toggle="modal" data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Problemas a
                       serem resolvidos</label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Problemas_Projeto_Conteudo', $n_processo->Projeto_conteudo->Problemas_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm"
                               data-bs-toggle="modal" data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Resultados
                       esperados</label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Resultados_Projeto_Conteudo', $n_processo->Projeto_conteudo->Resultados_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm"
                               data-bs-toggle="modal" data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>

               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Início</label>
                   <div class="col-sm-5">
                    {!! Form::date('Inicio_Projeto_Conteudo', $n_processo->Projeto_conteudo->Inicio_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     

                   </div>
               </div>
               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Término</label>
                   <div class="col-sm-5">
                    {!! Form::date('Fim_Projeto_Conteudo', $n_processo->Projeto_conteudo->Fim_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     

                   </div>
               </div>


               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Informa
                       Emenda
                       n° Parlamentar:</label>
                   <div class="col-sm-10">
                    {!! Form::textarea('N_Emenda_Projeto_Conteudo', $n_processo->Projeto_conteudo->N_Emenda_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm"
                               data-bs-toggle="modal" data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>

               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Informa
                       Emenda
                       nome do Autor:</label>
                   <div class="col-sm-10">
                    {!! Form::textarea('Nome_Autor_Emenda_Projeto_Conteudo', $n_processo->Projeto_conteudo->Nome_Autor_Emenda_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     
             
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm"
                               data-bs-toggle="modal" data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>

               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Valor
                       de
                       Repasse </label>
                   <div class="col-sm-10">
                    {!! Form::number('Valor_Repasse_Projeto_Conteudo', $n_processo->Projeto_conteudo->Valor_Repasse_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     
                    
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm"
                               data-bs-toggle="modal" data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>

               <div class="row mb-3">
                   <label for="inputNumber" class="col-sm-2 col-form-label">Valor
                       de
                       Contrapartida: </label>
                   <div class="col-sm-10">
                    {!! Form::number('Valor_Contrapartida_Projeto_Conteudo', $n_processo->Projeto_conteudo->Valor_Contrapartida_Projeto_Conteudo, 
                    ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
     
                       <p class="small"> <button type="button" class="btn btn-primary btn-sm"
                               data-bs-toggle="modal" data-bs-target="#dica1">
                               Ver Dica ?
                           </button> </p>
                   </div>
               </div>
               <button type="submit" class="btn btn-primary">Enviar</button>
               {!! Form::close() !!}

           </div>


       </div>
   </div>

