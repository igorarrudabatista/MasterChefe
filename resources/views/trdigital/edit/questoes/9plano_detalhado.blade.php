      {{-- ITEM 7 --}}
      {!! Form::close() !!}

      <div class="tab-pane fade" id="list-detalhado" role="tabpanel" aria-labelledby="list-detalhado">
        {!! Form::open(['route' => ['trdigital.memoria_calculo', $n_processo->id], 'method' => 'patch']) !!}

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
                              <tbody>
                                @foreach ($memoria_calculo as $memoria_de_calculo)
                                    <tr>
                                        <td>{{ $memoria_de_calculo->Natureza_detalhado }} </td>
                                        <td>{{ $memoria_de_calculo->Produto_Servico_detalhado }} </td>
                                        <td>{{ $memoria_de_calculo->Unidade_medida_detalhado }} </td>
                                        <td>{{ $memoria_de_calculo->Quantidade_detalhado }} </td>
                                        <td class="text-success">R$ {{ $memoria_de_calculo->Valor_unit_detalhado }} </td>
                                        {{-- <?php $total1 = $memoria_de_calculo->Quantidade_detalhado * memoria_de_calculo  ?> --}}
                                            <td> <b class="text-danger"> R$ {{ $memoria_de_calculo->Quantidade_detalhado * $memoria_de_calculo->Valor_unit_detalhado}} </b> </td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editarplano{{ $memoria_de_calculo->id }}Editar"
                                                data-bs-meta-id="{{ $memoria_de_calculo->id }}">
                                                Editar
                                            </button>
                                        </td>

                                        <td>
                                          <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#excluirplano{{ $memoria_de_calculo->id }}"
                                                data-bs-meta-id="{{ $memoria_de_calculo->id }}">
                                                Excluir
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                      
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
                                                    <select name="Natureza_id" id="Natureza_id" class="form-control custom-select" required>
                                                        <option value="" disabled selected>Selecione a Natureza</option>
                                                        @foreach ($memoria_calculo as $planoDetalhado)
                                                            <option value="{{ $planoDetalhado->id }}">
                                                                {{ $planoDetalhado->Plano_consolidado->Natureza }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    <label for="floatingName">Naturezaaa</label>
                                                </div>
                                                <br>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-floating">
        
                                                         {!! Form::text('Produto_Servico_detalhado', null, [
                                                            'placeholder' => 'Produto ou Serviço',
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
                                                            'Unidade_medida_detalhado',
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
                                                        {!! Form::number('Quantidade_detalhado', null, [
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
                                                            {!! Form::number('Valor_unit_detalhado', null, [
                                                                'placeholder' => 'a',
                                                                'class' => 'form-control',
                                                                'id' => 'floatingCity',
                                                            ]) !!}
                                                            <label for="floatingCity">Valor Unit.</label>
                                                            {{-- <label for="floatingCity">Valor Proponente - (Contrapartida Financeira)</label> --}}
                                                        </div>
                                                    </div>
        
              
        
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                                    </div>
        
        
                                                    <!-- End floating Labels Form -->
        
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                
                                </div>
                            </div>
                        </div><!-- End Vertically centered Modal-->

                      </div>
                  </div>

              </div>
          </div>
      </div>