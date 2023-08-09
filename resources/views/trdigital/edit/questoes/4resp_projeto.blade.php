    {{-- ITEM 4 --}}
    <div class="tab-pane fade" id="list-settings" role="tabpanel"
    aria-labelledby="list-settings-list">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> <big> <b> 4. </b> </big>Identificação do <b> Responsável pelo Projeto </b></h5>
            {!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.update', $n_processo->id], 'enctype' => 'multipart/form-data']) !!}

            <!-- Floating Labels Form -->
            <form class="row g-3">
              <div class="col-md-12">
                  <div class="form-floating">
                    {!! Form::text('Nome_Resp_projeto', $n_processo->Resp_projeto->Nome_Resp_projeto, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                      <label for="floatingName">Nome Completo</label>
                  </div>
              <br></div>
              
              <div class="row">
              <div class="col-md-4">
                  <div class="form-floating">
                    {!! Form::number('Telefone_Resp_projeto', $n_processo->Resp_projeto->Telefone_Resp_projeto, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                    <label for="floatingName"></label>
                      <label for="floatingEmail">Telefone</label>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-floating">
                    {!! Form::number('', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                    <label for="floatingName"></label>
                      <label for="floatingEmail">CPF</label>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-floating">
                    {!! Form::number('', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                    <label for="floatingName"></label>
                      <label for="floatingEmail">RG</label>
                  </div>
              </div>
        
              </div>
              <br>
        
              <div class="col-12">
                  <div class="form-floating">
                    {!! Form::textarea('Endereco_Resp_projeto', $n_processo->Resp_projeto->Endereco_Resp_projeto, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                      <label
                          for="floatingTextarea">Endereço</label>
                  </div><br>
                  <div class="row">

              <div class="col-md-4">
                  <div class="col-md-12">
                      <div class="form-floating">
                        {!! Form::text('', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      
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


              <div class="text-center">
                  <button type="submit"
                      class="btn btn-primary btn-lg">Salvar</button>
            
              </div>

          <!-- End floating Labels Form -->

      </div>
  </div>
</div>
</div> 
</div> 
