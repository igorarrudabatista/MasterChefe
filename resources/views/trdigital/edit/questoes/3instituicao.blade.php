      {{-- ITEM 3 --}}
      <div class="tab-pane fade" id="list-messages" role="tabpanel"
      aria-labelledby="list-messages-list">

             <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <big> <b> 3. </b> </big>Identificação da <b> Instituição
                        Proponente </b></h5>

                    <!-- Floating Labels Form -->
                    <div class="row g-3">
                      <div class="col-md-12">
                          <div class="form-floating">
                            {!! Form::text('Nome_Instituicao', $n_processo->instituicao->Nome_Instituicao, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                              <label for="floatingName">Nome da Instituição</label>
                          </div>
                      <br></div>
                      
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-floating">
                            {!! Form::number('CNPJ_Instituicao', $n_processo->instituicao->CNPJ_Instituicao, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                            <label for="floatingName"></label>
                              <label for="floatingEmail">CNPJ</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating">
                            {!! Form::number('Telefone_Instituicao', $n_processo->instituicao->Telefone_Instituicao, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                            <label for="floatingName"></label>
                              <label for="floatingEmail">Telefone</label>
                          </div>
                      </div>
                
                      </div>
                      <br>

                      <div class="col-12">
                          <div class="form-floating">
                            {!! Form::textarea('Endereco_Instituicao', $n_processo->instituicao->Endereco_Instituicao, ['placeholder'=> 'a', 'class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                              <label
                                  for="floatingTextarea">Endereço</label>
                          </div><br>
                          <div class="row">

                      <div class="col-md-4">
                          <div class="col-md-12">
                              <div class="form-floating">
                                {!! Form::text('Nome_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      
                                <label for="floatingCity">Cidade</label>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="form-floating mb-3">
                              <select class="form-select"
                                  id="floatingSelect"
                                  aria-label="State">
                                  <option selected>Mato Grosso</option>
                                  <option value="1">Oregon
                                  </option>
                                  <option value="2">DC</option>
                              </select>
                              <label
                                  for="floatingSelect">Estado</label>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-floating">
                            {!! Form::text('', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingZip']) !!}                                                                                                                                                                                                                                                         
                              <label for="floatingZip">CEP</label>
                          </div>
                          
                      </div>
                      

                      <div class="col-md-6">
                          <div class="form-floating">
                            {!! Form::file('Anexo1_Instituicao', ['placeholder'=> 'a','class' => 'form-control', 'id' => 'formFile']) !!}
                            <label for="floatingZip">Anexar Comprovante de Endereço</label>
                          </div>
                          @if ($n_processo->instituicao && $n_processo->instituicao->Anexo1_Instituicao)
                          <div class="icon">
                              <div class="col-md-12 iframe-container">
                                  <iframe src="{{ asset('storage/' . $n_processo->instituicao->Anexo1_Instituicao) }}"></iframe>
                              </div>
                              <a class="btn btn-primary" href="{{ asset('storage/' . $n_processo->instituicao->Anexo1_Instituicao) }}"
                                  target="_blank">
                                  <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                              </a>
                          </div>
                      @else
                          <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                      @endif
                      </div>

                      
                      <div class="col-md-6">
                          <div class="form-floating">
                            {!! Form::file('Anexo2_Instituicao', ['placeholder'=> 'a','class' => 'form-control', 'id' => 'formFile']) !!}
                            <label for="floatingZip">Anexar Cartão CNPJ </label>
                          </div>
                          @if ($n_processo->instituicao && $n_processo->instituicao->Anexo2_Instituicao)
                          <div class="icon">
                              <div class="col-md-12 iframe-container">
                                  <iframe src="{{ asset('storage/' . $n_processo->instituicao->Anexo2_Instituicao) }}"></iframe>
                              </div>
                              <a class="btn btn-primary" href="{{ asset('storage/' . $n_processo->instituicao->Anexo2_Instituicao) }}"
                                  target="_blank">
                                  <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                              </a>
                          </div>
                      @else
                          <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                      @endif
                      </div>
          

                  <!-- End floating Labels Form -->

              </div>
              
            </div>
              <div class="text-center">
                <button type="submit"
                    class="btn btn-primary btn-lg">Salvar</button>

            </div>
      </div>
  </div>
 </div>
 </div>
