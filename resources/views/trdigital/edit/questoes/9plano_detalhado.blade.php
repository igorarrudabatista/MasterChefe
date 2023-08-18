      {{-- ITEM 7 --}}
      {!! Form::close() !!}

      <div class="tab-pane fade" id="list-detalhado" role="tabpanel" aria-labelledby="list-detalhado">
          {!! Form::open(['route' => ['trdigital.planodetalhado', $n_processo->id], 'method' => 'patch']) !!}

          {{-- {!! Form::open(['route' => 'metas.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}

          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"> <big> <b> 9. </b> </big>Plano de Aplicação Detalhado - Memória de Cálculo</b>
                  </h5>

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
                                  @foreach ($planodetalhado as $planodetalhados)
                                      <tr>
                                          <td>{{ $planodetalhados->Natureza_id }} </td>
                                          <td>{{ $planodetalhados->Produto_Servico_detalhado }} </td>
                                          <td>{{ $planodetalhados->Unidade_medida_detalhado }} </td>
                                          <td>{{ $planodetalhados->Quantidade_detalhado }} </td>
                                          <td class="text-success">R$ {{ $planodetalhados->Valor_unit_detalhado }} </td>
                                          {{-- <?php $total1 = $planodetalhados->Quantidade_detalhado * planodetalhados; ?> --}}
                                          <td> <b class="text-danger"> R$
                                                  {{ $planodetalhados->Quantidade_detalhado * $planodetalhados->Valor_unit_detalhado }}
                                              </b> </td>
                                          <td>
                                          
                                              <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                  data-bs-target="#editarplano{{ $planodetalhados->id }}Editar"
                                                  data-bs-meta-id="{{ $planodetalhados->id }}">
                                                  Editar
                                              </button>
                                          </td>

                                          <td>
                                              <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                  data-bs-target="#excluirmemoria{{ $planodetalhados->id }}"
                                                  data-bs-meta-id="{{ $planodetalhados->id }}">
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
                                          {!! Form::open(['route' => ['trdigital.planodetalhado', $n_processo->id], 'method' => 'patch']) !!}

                                          <div class="row g-3">
                                              <div class="col-md-12">
                                                  <div class="form-floating">
                                                      <select name="Natureza_id" id="Natureza_id"
                                                          class="form-control custom-select" required>
                                                          <option value="" disabled selected>Selecione a Natureza
                                                          </option>
                                                          @foreach ($planoconsolidado as $planoDetalhados)
                                                              <option value="{{ $planoDetalhados->id }}">
                                                                  {{ $planoDetalhados->Natureza }}
                                                              </option>
                                                          @endforeach
                                                      </select>

                                                      <label for="floatingName">Natureza</label>
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
                                                          <button type="submit"
                                                              class="btn btn-primary btn-lg">Salvar</button>
                                                      </div>

                                                      {!! Form::close() !!}

                                                      <!-- End floating Labels Form -->

                                                  </div>
                                              </div>
                                          </div>

                                      </div>

                                  </div>
                              </div>
                          </div><!-- End Vertically centered Modal-->


                          {{-- Modais de Edição e Exclusão --}}
                          @foreach ($planodetalhado as $planodetalhados)
                              {{-- Editar memoria de calculo  --}} @include('trdigital.edit.questoes.planodetalhado.editarplanodetalhado')
                              <!-- Modal excluir plano consolidado -->
                              <div class="modal fade" id="excluirmemoria{{ $planodetalhados->id }}" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title">Confirmar Exclusão</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                  aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                              Tem certeza de que deseja excluir este Plano Detalhado? -
                                              {{ $planodetalhados->id }}
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary"
                                                  data-bs-dismiss="modal">Cancelar</button>
                                              {!! Form::open(['route' => ['trdigital.planodetalhado_destroy', $planodetalhados->id], 'method' => 'delete']) !!}
                                              <button type="submit" class="btn btn-danger">Excluir</button>
                                              {!! Form::close() !!}
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{-- @include('trdigital.edit.questoes.planoconsolidado.excluirplano', ['planos' => $planos]) --}}
                          @endforeach
                      </div>
                  </div>

              </div>
          </div>
      </div>
