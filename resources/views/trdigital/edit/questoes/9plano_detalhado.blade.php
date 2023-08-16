      {{-- ITEM 7 --}}
      <div class="tab-pane fade" id="list-detalhado" role="tabpanel" aria-labelledby="list-detalhado">

        {{-- {!! Form::open(['route' => 'metas.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}

          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"> <big> <b> 9. </b> </big>Plano de Aplicação Detalhado - Memória de Cálculo</b></h5>

                  <!-- Floating Labels Form -->
                  <div class="card">
                      <div class="card-body">

                          <h5 class="card-title text-center">MEMÓRIA DE CÁLCULO</h5>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#novoregistro-memoriacalculo">
                              + Novo Registro
                          </button>


                          {{-- <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center
                              the modal.</p> --}}
                          <table class="table datatable">
                              <thead>
                                  <tr>
                                      <th>Natureza</th>
                                      <th> Produto ou Serviço</th>
                                      <th>Unid. Medida</th>
                                      <th>Qtd.</th>
                                      <th>Valor Unit.</th>
                                      <th>Valor Total</th>
                                      <th>Editar</th>
                                      <th>Excluir</th>

                                  </tr>
                              </thead>
     
                      
                          </table>

                          <!-- Vertically centered Modal -->

                          <div class="modal fade" id="novoregistro-memoriacalculo" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Novo Registro - Memória de Cálculo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          {!! Form::open(['route' => ['trdigital.planoconsolidado', $n_processo->id], 'method' => 'patch']) !!}
                                          
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <div class="form-floating">
        
                                                    <select name="Complemento" id="Complemento"
                                                    class="form-control custom-select" required>
                                                    <option value="" disabled selected>
                                                        Selecione a Natureza</option>
                                                    @foreach ($metas as $meta)
                                                        <option value="{{ $meta->id }}">
                                                            {{ $meta->Especificacao_metas }}
                                                        </option>
                                                    @endforeach

                                                </select>

                                                    <label for="floatingName">Discriminacao</label>
                                                </div>
                                                <br>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-floating">
        
                                                         {!! Form::text('Complemento', null, [
                                                            'placeholder' => 'Complemento',
                                                            'class' => 'form-control',
                                                            'id' => 'floatingName',
                                                        ]) !!}
        
                                                        <label for="floatingName"></label>
                                                        <label for="floatingEmail">Produto ou Serviço</label>
                                                    </div>
                                                </div>
        
        
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
                                                            null,
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
                                                        {!! Form::number('Valor_concedente', null, [
                                                            'placeholder' => '',
                                                            'class' => 'form-control',
                                                            'id' => 'floatingName',
                                                        ]) !!}
                                                        <label for="floatingName"></label>
                                                        <label for="floatingEmail">Valor - Concedente</label>
                                                    </div>
                                                </div>
        
                                            </div>
                                            <br>
        
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            {!! Form::number('Valor_proponente_financeira', null, [
                                                                'placeholder' => 'a',
                                                                'class' => 'form-control',
                                                                'id' => 'floatingCity',
                                                            ]) !!}
                                                            <label for="floatingCity">Valor Proponente</label>
                                                            {{-- <label for="floatingCity">Valor Proponente - (Contrapartida Financeira)</label> --}}
                                                        </div>
                                                    </div>
        
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            {!! Form::number('Valor_proponente_nao_financeira', null, [
                                                                'placeholder' => 'a',
                                                                'class' => 'form-control',
                                                                'id' => 'floatingZip',
                                                            ]) !!}
                                                            <label for="floatingZip">Valor Proponente </label>
                                                            {{-- <label for="floatingZip">Valor Proponente - (Contrapartida Não Financeira)</label> --}}
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
                                </div>
                            </div>
                        </div><!-- End Vertically centered Modal-->

                      </div>
                  </div>

              </div>
          </div>
      </div>