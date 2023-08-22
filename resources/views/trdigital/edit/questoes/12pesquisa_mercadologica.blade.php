      {{-- ITEM 7 --}}
      {!! Form::close() !!}

      <div class="tab-pane fade" id="list-pesquisa" role="tabpanel" aria-labelledby="list-pesquisa">


          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"> <big> <b> 12. </b> </big>Pesquisa Mercadológica</b></h5>

                  <!-- Floating Labels Form -->
                  <div class="card">
                      <div class="card-body">

                          <h5 class="card-title text-center">CADASTRO DE PESQUISA MERCADOLÓGICA</h5>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#novo_pesquisa_mercadologica">
                              + Novo Registro
                          </button>


                          {{-- <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center
                              the modal.</p> --}}
                          <table class="table datatable">
                              <thead>
                                  <tr>
                                      <th>Descrição do bem </th>
                                      <th>Qtd.</th>
                                      <th>Empresa</th>
                                      <th>Valor</th>
                                      <th>Anexo</th>
                                      <th>Editar</th>
                                      <th>Excluir</th>

                                  </tr>
                              </thead>
                              @foreach ($pesquisa_mercadologica as $pesquisa)
                              <tr>
                                  <td> <small> {{ $pesquisa->Descricao_bem ?? ''}} </small> </td>
                                  @foreach ($pesquisa->pesquisa_mercadologica_pivots as $pivot)
                                  <td> {{ $pivot->Qtd ?? '' }}       </td>
                                  
                                  <td>{{ $pivot->Empresa ?? '' }} </td>
                                  <td class="text-danger"> R$ {{ $pivot->Valor ?? '' }} </td>
                                  @if ($pivot->Anexo  == '')
                                  <td class="text-danger"> <i class="bi bi-file-earmark-pdf-fill"></i> Documento não enviado</td>
                                  @else
                                  <td class="text-success">  <i class="bi bi-file-earmark-pdf-fill"></i> Documento enviado   </td>
                                  @endif
                                  
                                  <td>
                                      <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                      data-bs-target="#editar_cronograma{{ $pesquisa->id ?? ''}}Editar"
                                      data-bs-meta-id="{{ $pesquisa->id ?? ''}}">
                                      Editar
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#excluir_cronograma{{ $pesquisa->id ?? '' }}"
                                    data-bs-meta-id="{{ $pesquisa->id ?? ''}}">
                                    Excluir
                                </button>
                            </td>
                        </tr>
                        @endforeach
                                @endforeach
                            </tbody>
                        </table>
                          

                          <!-- Vertically centered Modal -->

                          <div class="modal fade" id="novo_pesquisa_mercadologica" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">CADASTRO DE PESQUISA MERCADOLÓGICA</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                              aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        {!! Form::open(['route' => ['trdigital.pesquisa_mercadologica', $n_processo->id], 'method' => 'patch']) !!}

                                          <div class="row g-3">

                                              <div class="col-md-9">
                                                  <div class="form-floating">
                                                    {!! Form::text('Descricao_bem', null, [
                                                        'placeholder' => 'Descrição do bem',
                                                        'class' => 'form-control',
                                                        'id' => 'floatingName',
                                                    ]) !!}
                                                      <label for="floatingName">Descrição do bem</label>
                                                  </div>

                                                  <br>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="form-floating">
                                                    {!! Form::number('Qtd[]', null, [
                                                        'placeholder' => 'Quantidade',
                                                        'class' => 'form-control',
                                                        'id' => 'floatingCity',
                                                    ]) !!}
                                                      <label for="floatingName">Quantidade</label>
                                                  </div>

                                                  <br>
                                              </div>

                                              <div class="row">
                                                  <div class="col-md-9">
                                                      <div class="form-floating">
                                                        {!! Form::text('Empresa[]', null, [
                                                            'placeholder' => 'Empresa',
                                                            'class' => 'form-control',
                                                            'id' => 'floatingName',
                                                        ]) !!}
                                                          <label for="floatingName"></label>
                                                          <label for="floatingEmail">Nome da Empresa</label>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-floating">
                                                        {!! Form::number('Valor[]', null, [
                                                            'placeholder' => 'Valor',
                                                            'class' => 'form-control',
                                                            'id' => 'floatingZip',
                                                        ]) !!}
                                                        <label for="floatingZip">Valor</label>
                                                    </div>
                                                </div>

                                              </div>
                                              

                                              <div class="col-12">
                                                  <div class="row">
                                               

                                                   
                                                      <div class="col-md-10">
                                                          <div class="form-floating">
                                                            
                                                            {!! Form::file('Anexo[]', ['placeholder'=> 'Anexo','class' => 'form-control', 'id' => 'formFile']) !!}

                                                            
                                                              <label for="floatingZip">Anexar do Comprovante</label>
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
