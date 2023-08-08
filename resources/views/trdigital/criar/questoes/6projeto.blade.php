   <div class="tab-pane fade" id="list-projeto" role="tabpanel" aria-labelledby="list-projeto-list">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title"> <b> <big> 6. </b> </big> Identificação do Projeto </h5>

          <!-- General Form Elements -->
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label"> <b> Título: </b>  </label>
  
              <div class="col-sm-10">
                {!! Form::text('Titulo_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
            
  
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"> <b> Objeto:</b></label>
              <div class="col-sm-10">
                {!! Form::text('Objeto_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button>  </p>

              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"><b> Objetivo Geral: </b></label>
              <div class="col-sm-10">
                {!! Form::textarea('Obj_Geral_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>

              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"><b> Objetivo específico: </b></label>
              <div class="col-sm-10">
                {!! Form::textarea('Obj_especifico_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"><b> Justificativa:</b> </label>
              <div class="col-sm-10">
                {!! Form::textarea('Justificativa_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"><b>Contextualização </b> </label>
              <div class="col-sm-10">
                {!! Form::textarea('Contextualizacao_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>

              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label"><b>Diagnóstico </b> </label>
              <div class="col-sm-10">
                {!! Form::textarea('Diagnostico_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>

              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Importância do Projeto:</label>
              <div class="col-sm-10">
                {!! Form::textarea('Importancia_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Caracterização dos Interesses Recíprocos entre o Proponente/Estado</label>
              <div class="col-sm-10">
                {!! Form::textarea('Caracterizacao_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Público alvo Interno</label>
              <div class="col-sm-10">
                {!! Form::textarea('Publico_Alvo_Interno_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Público alvo Externo</label>
              <div class="col-sm-10">
                {!! Form::textarea('Publico_Alvo_Externo_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Problemas a serem resolvidos</label>
              <div class="col-sm-10">
                {!! Form::textarea('Problemas_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Resultados esperados</label>
              <div class="col-sm-10">
                {!! Form::textarea('Resultados_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Início</label>
              <div class="col-sm-10">
                {!! Form::date('Inicio_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Término</label>
              <div class="col-sm-10">
                {!! Form::date('Fim_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

              </div>
            </div>
            

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Informa Emenda n° Parlamentar:</label>
              <div class="col-sm-10">
                {!! Form::textarea('N_Emenda_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Informa Emenda nome do  Autor:</label>
              <div class="col-sm-10">
                {!! Form::textarea('Nome_Autor_Emenda_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Valor de Repasse </label>
              <div class="col-sm-10">
                {!! Form::number('Valor_Repasse_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Valor de Contrapartida:  </label>
              <div class="col-sm-10">
                {!! Form::number('Valor_Contrapartida_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                  Ver Dica ?
                </button> </p>
              </div>
            </div>
           
            <button type="submit"
            class="btn btn-primary">Enviar</button>
            
            
            <!-- End General Form Elements -->
            
          </div>
        </div>
        
      </div>
