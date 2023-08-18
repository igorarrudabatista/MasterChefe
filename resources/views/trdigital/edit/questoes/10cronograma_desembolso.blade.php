      {{-- ITEM 7 --}}
      {!! Form::close() !!}

      <div class="tab-pane fade" id="list-desembolso" role="tabpanel" aria-labelledby="list-desembolso">
        {!! Form::open(['route' => ['trdigital.cronograma_store', $n_processo->id], 'method' => 'patch']) !!}


          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"> <big> <b> 10. </b> </big>Cronograma de Desembolso</b></h5>

                  <!-- Floating Labels Form -->
                  <div class="card">
                      <div class="card-body">

                          <h5 class="card-title text-center">CADASTRO DO CRONOGRAMA DE DESEMBOLSO</h5>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#cronograma_desembolso">
                              + Novo Registro
                          </button>


                          {{-- <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center
                              the modal.</p> --}}
                          <table class="table datatable">
                              <thead>
                                  <tr>
                                      <th>Meta</th>
                                      <th>Ano</th>
                                      <th>Mês</th>
                                      <th>Fonte</th>
                                      <th>Valor</th>
                                      <th>Editar</th>
                                      <th>Excluir</th>
                                

                                  </tr>
                              </thead>
                              @foreach ($cronograma_desembolso as $cronograma_desembolsos)
                              <tr>
                                  <td>{{ $cronograma_desembolsos->metas_id }} </td>
                                  <td>{{ $cronograma_desembolsos->ano }} </td>
                                  <td>{{ $cronograma_desembolsos->mes }} </td>
                                  <td>{{ $cronograma_desembolsos->fonte }} </td>
                                  <td class="text-danger"> <b> R${{ $cronograma_desembolsos->valor_desembolso }} </b></td>
                            
                                  <td>
                                      <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                          data-bs-target="#editar_cronograma{{ $cronograma_desembolsos->id }}Editar"
                                          data-bs-meta-id="{{ $cronograma_desembolsos->id }}">
                                          Editar
                                      </button>
                                  </td>

                                  <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                          data-bs-target="#excluir_cronograma{{ $cronograma_desembolsos->id }}"
                                          data-bs-meta-id="{{ $cronograma_desembolsos->id }}">
                                          Excluir
                                      </button>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                      
                          </table>

                          <!-- Vertically centered Modal -->

                          <div class="modal fade" id="cronograma_desembolso" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Cronograma de Desembolso</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                              aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">

                                          <div class="row g-3">
                                              <div class="col-md-12">
                                                  <div class="form-floating">

                                                    <select name="metas_id" id="metas_id"
                                                    class="form-control custom-select" required>
                                                    <option value="" disabled selected>
                                                        Selecione a Meta</option>
                                                    @foreach ($metas as $meta)
                                                        <option value="{{ $meta->id }}">
                                                            {{ $meta->Especificacao_metas }}
                                                        </option>
                                                    @endforeach
        
                                                </select>
                                                      <label for="floatingName">Meta</label>
                                                  </div>
                                                  <br>
                                              </div>

                                              <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="form-floating">

                                                        {!! Form::select('ano', [
                                                            '' => 'Selecione o Ano',
                                                            '2023' => '2023',
                                                            '2024' => '2024',
                                                            '2025' => '2025',
                                                            '2026' => '2026',
                                                            '2027' => '2027',
                                                            '2028' => '2028',
                                                            '2029' => '2029',
                                                            '2030' => '2030',
                                             
                                                        ], null, [
                                                            'class' => 'form-control custom-select',
                                                            'required' => true,
                                                            'id' => 'ano'
                                                        ]) !!}


                                        
                                                          <label for="floatingName"></label>
                                                          <label for="floatingEmail">Ano</label>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-floating">
                                                        {!! Form::select('mes', [
                                                            '' => 'Selecione o mês',
                                                            'Janeiro' => 'Janeiro',
                                                            'Fevereiro' => 'Fevereiro',
                                                            'Março' => 'Março',
                                                            'Abril' => 'Abril',
                                                            'Maio' => 'Maio',
                                                            'Junho' => 'Junho',
                                                            'Julho' => 'Julho',
                                                            'Agosto' => 'Agosto',
                                                            'Setembro' => 'Setembro',
                                                            'Outubro' => 'Outubro',
                                                            'Novembro' => 'Novembro',
                                                            'Dezembro' => 'Dezembro',
                                                        ], null, [
                                                            'class' => 'form-control custom-select',
                                                            'required' => true,
                                                            'id' => 'mes'
                                                        ]) !!}

                                               
                                                          <label for="floatingName"></label>
                                                          <label for="floatingEmail">Mês</label>
                                                      </div>
                                                  </div>

                                              </div>
                                              <br>

                                              <div class="col-12">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="form-floating">
                                                            <div class="form-check">
                                                                {!! Form::radio('fonte', 'Concedente', false, ['class' => 'form-check-input', 'id' => 'radioOpcao1']) !!}
                                                                <label class="form-check-label" for="radioOpcao1">Concedente</label>
                                                            </div>
                                                            
                                                            <div class="form-check">
                                                                {!! Form::radio('fonte', 'Contrapartida', false, ['class' => 'form-check-input', 'id' => 'radioOpcao2']) !!}
                                                                <label class="form-check-label" for="radioOpcao2">Contrapartida</label>
                                                            </div>

                                                          </div>
                                                      </div>

                                                      <div class="col-md-6">
                                                          <div class="form-floating">
                                                              {!! Form::number('valor_desembolso', null, [
                                                                  'placeholder' => 'a',
                                                                  'class' => 'form-control',
                                                                  'id' => 'floatingZip',
                                                              ]) !!}
                                                              <label for="floatingZip">Valor</label>
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


                              {{-- Editar memoria de calculo  --}} @include('trdigital.edit.questoes.cronograma_desembolso.editarcronograma')




                      </div>
                  </div>

              </div>
          </div>
      </div>