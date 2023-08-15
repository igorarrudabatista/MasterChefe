      {{-- ITEM 7 --}}
      <div class="tab-pane fade" id="list-consolidado" role="tabpanel" aria-labelledby="list-consolidado">

          {{-- {!! Form::open(['route' => 'metas.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}

          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"> <big> <b> 8. </b> </big>Plano de Aplicação Consolidado</b></h5>

                  <!-- Floating Labels Form -->
                  <div class="card">
                      <div class="card-body">

                          <h5 class="card-title text-center">CADASTROS DE PLANO DE APLICAÇÃO CONSOLIDADO </h5>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#verticalycentered">
                              + Novo Registro
                          </button>


                          {{-- <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center
                              the modal.</p> --}}
                          <table class="table datatable">
                              <thead>
                                  <tr>
                                      <th>Discriminação</th>
                                      <th><small> Complemento </small></th>
                                      <th><small> Valor Concedente</small></th>
                                      <th>Valor Proponente <small class="text-primary"> Financeira </small></th>
                                      <th>Valor Proponente <small class="text-primary"> <br>Não Financeira </small></th>
                                      <th>Editar</th>
                                      <th>Excluir</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($planoconsolidado as $planos)
                                      <tr>
                                          <td>{{ $planos->Discriminacao }} </td>
                                          <td>{{ $planos->Complemento }} </td>
                                          <td>{{ $planos->Valor_concedente }} </td>
                                          <td>{{ $planos->Valor_proponente_financeira }} </td>
                                          <td>{{ $planos->Valor_proponente_nao_financeira }} </td>
                                          <td>
                                              <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                  data-bs-target="#editarplano{{ $planos->id }}Editar"
                                                  data-bs-meta-id="{{ $planos->id }}">
                                                  Editar
                                              </button>
                                          </td>

                                          <td>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                  data-bs-target="#editarplano{{ $planos->id }}"
                                                  data-bs-meta-id="{{ $planos->id }}">
                                                  Excluir
                                              </button>
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>



                          <!-- Vertically centered Modal -->
                     

                          
                          
                          
                        </div>
                  </div>
                       
                  <div class="modal fade" id="verticalycentered" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Novo Registro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  {!! Form::open(['route' => ['trdigital.planoconsolidado', $n_processo->id], 'method' => 'patch']) !!}
                                  
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            {!! Form::text('Discriminacao', null, [
                                                'placeholder' => 'Discriminação',
                                                'class' => 'form-control',
                                                'id' => 'floatingName',
                                            ]) !!}

                                            <label for="floatingName">Discriminacao</label>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-floating">

                                                <select name="Complemento" id="Complemento"
                                                    class="form-control custom-select" required>
                                                    <option value="" disabled selected>
                                                        Selecione o Orgão Concedente</option>
                                                    @foreach ($metas as $meta)
                                                        <option value="{{ $meta->id }}">
                                                            {{ $meta->Especificacao_metas }}
                                                        </option>
                                                    @endforeach

                                                </select>

                                                <label for="floatingName"></label>
                                                <label for="floatingEmail">Complemento da
                                                    Discriminação</label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                {!! Form::text('Complemento', null, [
                                                    'placeholder' => 'Complemento',
                                                    'class' => 'form-control',
                                                    'id' => 'floatingName',
                                                ]) !!}
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

                     {{-- Modais de Edição e Exclusão --}}
            @foreach ($planoconsolidado as $planos)
                          {{-- Editar Plano --}} @include('trdigital.edit.questoes.planoconsolidado.editarplano')
                          {{-- @include('trdigital.edit.questoes.planoconsolidado.excluirplano', ['planos' => $planos]) --}}
        @endforeach
    </div>

              </div>
          </div>
      </div>
      </div>
