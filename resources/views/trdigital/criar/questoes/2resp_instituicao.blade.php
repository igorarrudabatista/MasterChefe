  {{-- ITEM 2 --}}
  <div class="tab-pane fade" id="list-profile" role="tabpanel"
  aria-labelledby="list-profile-list">

  <div class="card-body">
      <h5 class="card-title"> <big><b> 2. </b> </big> Identificação do <b> Responsável
          pela Instituição </b></h5>

      <!-- Floating Labels Form -->
      <div class="row g-3">
          <div class="col-md-12">
              <div class="form-floating">
                {!! Form::text('Nome_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                  <label for="floatingName">Nome Completo</label>
              </div>
          </div>
          <br>
          <div class="row">
          <div class="col-md-4">
              <div class="form-floating">
                {!! Form::number('Telefone_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                <label for="floatingName"></label>
                  <label for="floatingEmail">Telefone</label>
              </div>
          </div>
          
          <div class="col-md-4">
              <div class="form-floating">
                {!! Form::email('Email_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                  <label for="floatingEmail">E-mail</label>
              </div>
          </div>
          <div class="col-md-4">
            <div class="form-floating">
              {!! Form::text('Cargo_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                <label for="floatingEmail">Cargo / Função</label>
            </div>
        </div>
          </div>
          <br>
    
          <div class="col-12">
              <div class="form-floating">
                {!! Form::textarea('End_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

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
          <div class="col-md-6">
              <div class="form-floating">
                {!! Form::file('Anexo1_Resp_Instituicao', ['class' => 'form-control']) !!}

                <label for="floatingZip">Anexar RG ou CPF</label>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-floating">
                {!! Form::file('Anexo2_Resp_Instituicao', ['class' => 'form-control']) !!}

                <label for="floatingZip">Anexar Comprovante de Endereço</label>
              </div><br>
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

