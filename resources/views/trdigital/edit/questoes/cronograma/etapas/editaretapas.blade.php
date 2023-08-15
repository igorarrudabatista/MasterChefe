  <!-- Editar Etapa-->
  {!! Form::close() !!}

  <div class="modal fade" id="editaretapa{{ $etapa->id }}" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Editar Etapa </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  {!! Form::open(['method' => 'PUT', 'route' => ['trdigital.etapaupdate', $etapa->id]]) !!}
                  <input type="hidden" class="form-control" id="metas_id" name="metas_id" value="{{ $meta->id }}">
                  <div class="row g-3">
                      <div class="col-md-12">
                          <div class="form-floating">

                              {!! Form::text('Especificacao_etapa', $etapa->Especificacao_etapa, [
                                  'placeholder' => 'Especificacao_metas',
                                  'class' => 'form-control',
                                  'id' => 'floatingName',
                              ]) !!}
                              <label for="floatingName">Especificação</label>
                          </div>
                          <br>
                      </div>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-floating">


                                  {!! Form::select(
                                      'Unidade_medida_etapa',
                                      [
                                          'Unidade.' => 'Unidade',
                                          'Quilograma' => 'Quilograma',
                                          'Metro' => 'Metro',
                                          'Centímetro' => 'Centímetro',
                                          'Milímetro' => 'Milímetro',
                                      ],
                                      $etapa->Unidade_medida_etapa,
                                      [
                                          'placeholder' => '',
                                          'class' => 'form-select', // Usamos 'form-select' para um estilo de dropdown do Bootstrap
                                          'id' => 'floatingName',
                                      ],
                                  ) !!}


                                  <label for="floatingName"></label>
                                  <label for="floatingEmail">Unidade de Medida</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-floating">
                                  {!! Form::number('Quantidade_etapa', $etapa->Quantidade_etapa, [
                                      'placeholder' => '',
                                      'class' => 'form-control',
                                      'id' => 'floatingName',
                                  ]) !!}
                                  <label for="floatingName"></label>
                                  <label for="floatingEmail">Quantidade</label>
                              </div>
                          </div>

                      </div>
                      <br>

                      <div class="col-12">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      {!! Form::date('Inicio_etapa', $etapa->Inicio_etapa, [
                                          'placeholder' => 'a',
                                          'class' => 'form-control',
                                          'id' => 'floatingCity',
                                      ]) !!}
                                      <label for="floatingCity">Início</label>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="form-floating">
                                      {!! Form::date('Termino_etapa', $etapa->Termino_etapa, [
                                          'placeholder' => 'a',
                                          'class' => 'form-control',
                                          'id' => 'floatingZip',
                                      ]) !!}
                                      <label for="floatingZip">Término</label>
                                  </div>
                              </div>

                              <!-- End floating Labels Form -->

                          </div>
                      </div>
                  </div>

              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
              </div>
              {!! Form::close() !!}
          </div>
      </div>
  </div>
