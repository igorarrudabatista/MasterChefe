      {{-- ITEM 7 --}}
      {!! Form::close() !!}

      <div class="tab-pane fade" id="list-relacao" role="tabpanel" aria-labelledby="list-relacao">


          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"> <big> <b> 11. </b> </big>Relação de Obras e Equipamentos / Material
                      Permanente</b></h5>

                  <!-- Floating Labels Form -->
                  <div class="card">
                      <div class="card-body">

                          <h5 class="card-title text-center">CADASTRO DE OBRAS E EQUIPAMENTOS / MATERIAL PERMANENTE</h5>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#obras_euipamentos">
                              + Novo Registro
                          </button>


                          {{-- <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center
                              the modal.</p> --}}
                          <table class="table datatable">
                              <thead>
                                  <tr>
                                      <th>Natureza</th>
                                      <th>Especificação</th>
                                      <th>Unidade</th>
                                      <th>Qtd.</th>
                                      <th>Valor</th>
                                      <th>Total</th>
                                      <th>Local de Destino</th>
                                      <th>Propriedade</th>
                                      <th></th>

                                  </tr>
                              </thead>

                              @foreach ($obras_equipamento as $obras_equipamentos)
                                  <tr>
                                      <td>{{ $obras_equipamentos->Natureza_id }} </td>
                                      <td>{{ $obras_equipamentos->Especificacao }} </td>
                                      <td>{{ $obras_equipamentos->Unidade }} </td>
                                      <td>{{ $obras_equipamentos->Qtd }} </td>
                                      <td>R$ {{ $obras_equipamentos->Valor_unit }} </td>
                                      <td class="text-danger"> R$
                                          {{ $obras_equipamentos->Valor_unit * $obras_equipamentos->Qtd }} </td>
                                      <td>{{ $obras_equipamentos->Local_destino }} </td>
                                      <td>{{ $obras_equipamentos->Propriedade }} </td>

                                      <td>
                                          <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                              data-bs-target="#editar_cronograma{{ $obras_equipamentos->id }}Editar"
                                              data-bs-meta-id="{{ $obras_equipamentos->id }}">
                                              Editar
                                          </button>
                                      </td>
                                      <td>
                                          <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                              data-bs-target="#excluir_cronograma{{ $obras_equipamentos->id }}"
                                              data-bs-meta-id="{{ $obras_equipamentos->id }}">
                                              Excluir
                                          </button>
                                      </td>
                                  </tr>
                              @endforeach

                          </table>

                          <!-- Vertically centered Modal -->

                          <div class="modal fade" id="obras_euipamentos" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">CADASTRO DE OBRAS E EQUIPAMENTOS / MATERIAL PERMANENTE
                                          </h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                              aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          {!! Form::open(['route' => ['trdigital.obras_equipamento', $n_processo->id], 'method' => 'patch']) !!}

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
                                                  <div class="col-md-6">
                                                      <div class="form-floating">
                                                          {!! Form::text('Especificacao', null, [
                                                              'placeholder' => 'Especificação',
                                                              'class' => 'form-control',
                                                              'id' => 'floatingName',
                                                          ]) !!}
                                                          <label for="floatingName"></label>
                                                          <label for="floatingEmail">Especificação</label>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-floating">
                                                          {!! Form::select(
                                                              'Unidade',
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
                                                          <label for="floatingEmail">Unidade</label>
                                                      </div>
                                                  </div>

                                              </div>
                                              <br>

                                              <div class="col-12">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="form-floating">
                                                              {!! Form::number('Qtd', null, [
                                                                  'placeholder' => 'Quantidade',
                                                                  'class' => 'form-control',
                                                                  'id' => 'floatingCity',
                                                              ]) !!}
                                                              <label for="floatingCity">Quantidade</label>
                                                          </div>
                                                      </div>

                                                      <div class="col-md-6">
                                                          <div class="form-floating">
                                                              {!! Form::number('Valor_unit', null, [
                                                                  'placeholder' => 'Valor',
                                                                  'class' => 'form-control',
                                                                  'id' => 'floatingZip',
                                                              ]) !!}
                                                              <label for="floatingZip">Valor</label>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="form-floating">

                                                              <select name="Cidade_id" id="Cidade_id"
                                                                  class="form-control custom-select" required>
                                                                  <option value="" disabled selected>Selecione o
                                                                      Local de destino
                                                                  </option>
                                                                  @foreach ($cidade as $cidades)
                                                                      <option value="{{ $cidades->id }}">
                                                                          {{ $cidades->Nome }}
                                                                      </option>
                                                                  @endforeach
                                                              </select>

                                                              <label for="floatingZip">Local de destino</label>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="form-floating">
                                                              <div class="form-check">
                                                                  {!! Form::radio('Propriedade', 'Concedente', false, ['class' => 'form-check-input', 'id' => 'radioOpcao1']) !!}
                                                                  <label class="form-check-label"
                                                                      for="radioOpcao1">Concedente</label>
                                                              </div>

                                                              <div class="form-check">
                                                                  {!! Form::radio('Propriedade', 'Contrapartida', false, ['class' => 'form-check-input', 'id' => 'radioOpcao2']) !!}
                                                                  <label class="form-check-label"
                                                                      for="radioOpcao2">Contrapartida</label>

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
          </div>
      </div>
