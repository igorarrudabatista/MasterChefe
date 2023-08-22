<!-- Editar Plano COnsolidado -->
{!! Form::close() !!}

<div class="modal fade" id="editar_cronogramaEditar" tabindex="-1">
    {!! Form::open(['method' => 'PUT', 'route' => ['trdigital.cronograma_update', $n_processo->id]]) !!}

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Plano Consolidado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

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
                       
                                ], [
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
                                  ],  [
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
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                </div>



                                <!-- End floating Labels Form -->

                            </div>
                        </div>
                    </div>

                </div>
               

               {!! Form::close() !!}
           </div>
       </div>
   </div><!-- End Vertically centered Modal-->

                            </div>
                        