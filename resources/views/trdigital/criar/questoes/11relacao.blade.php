      {{-- ITEM 7 --}}
      <div class="tab-pane fade" id="list-relacao" role="tabpanel" aria-labelledby="list-relacao">

        {{-- {!! Form::open(['route' => 'metas.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}

          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"> <big> <b> 11. </b> </big>Relação de Obras e Equipamentos / Material Permanente</b></h5>

                  <!-- Floating Labels Form -->
                  <div class="card">
                      <div class="card-body">

                          <h5 class="card-title text-center">CADASTROS DE METAS E ETAPAS</h5>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#verticalycentered">
                              + Nova Meta
                          </button>


                          {{-- <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center
                              the modal.</p> --}}
                          <table class="table datatable">
                              <thead>
                                  <tr>
                                      <th>N° da Meta</th>
                                      <th>Etapa/Fase</th>
                                      <th>Especificação</th>
                                      <th>Unid. de Medida</th>
                                      <th>Qtd.</th>
                                      <th>Início</th>
                                      <th>Término</th>
                                      <th></th>

                                  </tr>
                              </thead>
                          {{-- @foreach ($nProcessos as $n_processo)
                              @foreach ($n_processo->Metas as $meta)
                                  <!-- Aqui você pode acessar os atributos da meta -->
                                  <td>  {{ $meta->Especificacao_metas }} </td>
                                    <td> {{ $meta->Quantidade_metas }} </td>
                                        <td> {{ $meta->Unidade_medida_metas }} </td>
                                  <!-- ... e assim por diante -->
                              @endforeach
                      @endforeach --}}
                      
                          </table>

                          <!-- Vertically centered Modal -->

                          <div class="modal fade" id="verticalycentered" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Nova Meta</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                              aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">

                                          <div class="row g-3">
                                              <div class="col-md-12">
                                                  <div class="form-floating">

                                                      {!! Form::text('Especificacao_metas', null, [
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
                                                          {!! Form::number('Quantidade_metas', null, [
                                                              'placeholder' => 'Quantidade_metas',
                                                              'class' => 'form-control',
                                                              'id' => 'floatingName',
                                                          ]) !!}
                                                          <label for="floatingName"></label>
                                                          <label for="floatingEmail">Unidade de Medida</label>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-floating">
                                                          {!! Form::text('Unidade_medida_metas', null, [
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
                                                              {!! Form::date('Inicio_metas', null, [
                                                                  'placeholder' => 'a',
                                                                  'class' => 'form-control',
                                                                  'id' => 'floatingCity',
                                                              ]) !!}
                                                              <label for="floatingCity">Início</label>
                                                          </div>
                                                      </div>

                                                      <div class="col-md-6">
                                                          <div class="form-floating">
                                                              {!! Form::date('Termino_metas', null, [
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
                                  </div>
                              </div>
                          </div><!-- End Vertically centered Modal-->

                      </div>
                  </div>

              </div>
          </div>
      </div>