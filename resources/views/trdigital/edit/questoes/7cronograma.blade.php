      {{-- ITEM 7 --}}
      {!! Form::close() !!}
      <div class="tab-pane fade" id="list-Cronograma" role="tabpanel" aria-labelledby="list-Cronograma-list">
          {!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.metasstore', $n_processo->id]]) !!}

          {{-- {!! Form::open(['route' => 'trdigital.metasstore', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}  --}}
          {{-- <form method="POST" action="{{ route('trdigital/metasstore', ['n_processo' => $id]) }}">
            @csrf --}}

          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"> <big> <b> 7. </b> </big>Cronograma de Execução</b></h5>

                  <!-- Floating Labels Form -->
                  <div class="card">
                      <div class="card-body">

                          <h5 class="card-title text-center">CADASTROS DE METAS E ETAPAS</h5>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#novameta">
                              + Nova Meta
                          </button>


                          {{-- <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center
                              the modal.</p> --}}
                          <table class="table datatable">
                              <thead>
                                  <tr>


                                  </tr>
                              </thead>
                              @foreach ($metas as $meta)
                                  <td>

                                      <div class="card ">
                                          <div class="card-body text-primary">

                                              <h6 class="card-title text-center text-primary"> <b> METAS  </b></a></h6>
                                           
                                                  <b>Especificacao:
                                                  </b>{{ $meta->Especificacao_metas ?? 'Não informado' }} <br>
                                                  <b> Unidade de medida: </b>
                                                  {{ $meta->Unidade_medida_metas ?? 'Não informado' }} <br>
                                                  <b> Quantidade: </b> {{ $meta->Quantidade_metas ?? 'Não informado' }}
                                                  <br>
                                                  <b> Início </b> {{ $meta->Inicio_metas ?? 'Não informado' }} <br>
                                                  <b> Término: </b> {{ $meta->Termino_metas ?? 'Não informado' }} <br>

                                                  <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                  data-bs-target="#editarmeta" data-bs-meta-id="{{ $meta->id }}">
                                                  Editar Meta
                                              </button>
                                              

                                                  <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                      data-bs-target="#excluirmeta"data-bs-meta-id="{{ $meta->id }}">
                                                      Excluir meta
                                                  </button>

                                                  <hr>
                                                  <input type="hidden" class="form-control" id="metas_id_{{ $meta->id }}" name="metas_id" value="{{ $meta->id }}">

                                                  <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                      data-bs-target="#novaetapa" data-meta-id="{{ $meta->id }}">
                                                      Criar Nova Etapa
                                                  </button>

                                                  {{-- <a class="btn btn-warning"
                                                      href="{{ route('trdigital.edit', $n_processo->id) }}">Editar</a>

                                                  <a class="btn btn-danger"
                                                      href="{{ route('trdigital.edit', $n_processo->id) }}">Remover</a> --}}

                                              </small>
                                          </div>
                                      </div>
                                  </td>

                                  
          <!-- Criar METAS -->
          <div class="modal fade" id="novameta" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nova Meta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="metaId" name="metaId">

                        @foreach ($metas as $meta)
                            {!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.metasstore', $n_processo->id]]) !!}

                            <input type="hidden" class="form-control" id="metas_id" name="metas_id"
                                value="{{ $meta->id }}">
                        @endforeach
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
        </div>
        {!! Form::close() !!}
        <!-- Editar METAS -->
        <div class="modal fade" id="editarmeta" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Meta {{$meta->id}} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="metaId" name="metaId">

                        @foreach ($metas as $meta)
                        
                            {!! Form::model($meta, ['method' => 'PATCH', 'route' => ['trdigital.metasupdate', $meta->id]]) !!}
                            <input type="hidden" class="form-control" id="metas_id" name="metas_id"

                            value="{{ $meta->id }}">


                        @endforeach
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">

                                    {!! Form::text('Especificacao_metas', $meta->Especificacao_metas, [
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
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

                                  <div class="modal fade" id="excluirmeta" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirmar Exclusão </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza de que deseja excluir esta Meta? -> <span id="meta-id"></span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                {!! Form::open(['route' => ['trdigital.metasstoredestroy', '__META_ID__'], 'method' => 'delete', 'id' => 'delete-form']) !!}
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                

                                

                                  <td>
                                    @foreach ($meta->etapas as $etapa)
                                        <div class="card ">
                                            <div class="card-body text-primary">

                                                <h6 class="card-title text-center text-success"> <b> <u> ETAPAS </u> </b></h6>
                                                <br> 
                                                    {{ $etapa->Especificacao_etapa ?? ' nao informada' }} </b><br>
                                                    {{ $etapa->Quantidade_etapa ?? ' nao informada' }} </b><br>
                                                    {{ $etapa->Unidade_medida_etapa ?? ' nao informada' }} </b><br>
                                                    {{ $etapa->Inicio_etapa ?? ' nao informada' }} </b><br>
                                                    {{ $etapa->Termino_etapa ?? ' nao informada' }} </b><br>
                                                    <br>
                                                </small>
                                                <hr>

                                                <a class="btn btn-warning"
                                                    href="{{ route('trdigital.edit', $n_processo->id) }}">Editar Etapa</a>

                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#excluiretapa" data-meta-id="{{ $etapa->id }}">
                                                    Excluir etapa
                                                   </button>                                                   


                                            </div>
                                        </div>

                                        <div class="modal fade" id="excluiretapa" tabindex="-1">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title">Confirmar Exclusão</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                          aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                      Tem certeza de que deseja excluir esta Etapa?
                                                      {{ $etapa->Especificacao_etapa ?? 'etapa nao informada' }}
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary"
                                                          data-bs-dismiss="modal">Cancelar</button>
                                                      {!! Form::open(['route' => ['trdigital.etapasstoredestroy', $etapa->id], 'method' => 'delete']) !!}
                                                      <button type="submit" class="btn btn-danger">Excluir</button>
                                                      {!! Form::close() !!}
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    @endforeach
                                </td>


                                  </tr>
                                  
                              @endforeach

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          </form>





          <!-- Criar Etapas-->
          <div class="modal fade" id="novaetapa" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Nova Etapa</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                              aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          
                          {{-- {!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.etapasstore', $n_processo->id]]) !!} --}}
                          {!! Form::open(['route' => ['trdigital.etapasstore', $n_processo->id], 'method' => 'patch']) !!}
                          <input type="hidden" id="metas_id_{{ $meta->id }}" name="metas_id" value="{{ $meta->id }}">

{{-- 
                          <input type="hidden" class="form-control" id="metas_id" name="metas_id"
                              value="{{ $meta->id }}"> --}}

                          <div class="row g-3">
                              <div class="col-md-12">
                                  <div class="form-floating">

                                      {!! Form::text('Especificacao_etapa', null, [
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
                                          {!! Form::number('Quantidade_etapa', null, [
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
                                          {!! Form::text('Unidade_medida_etapa', null, [
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
                                              {!! Form::date('Inicio_etapa', null, [
                                                  'placeholder' => 'a',
                                                  'class' => 'form-control',
                                                  'id' => 'floatingCity',
                                              ]) !!}
                                              <label for="floatingCity">Início</label>
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="form-floating">
                                              {!! Form::date('Termino_etapa', null, [
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
                      {!! Form::close() !!}
                  </div>
              </div>
          </div>


          <!-- Editar Etapa-->
          <div class="modal fade" id="editaretapa" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Editar Etapa</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                              aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                          <div class="row g-3">
                              <div class="col-md-12">
                                  <div class="form-floating">

                                      {!! Form::text('Especificacao_etapa', null, [
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
                                          {!! Form::number('Quantidade_etapa', null, [
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
                                          {!! Form::text('Unidade_medida_etapa', null, [
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
                                              {!! Form::date('Inicio_etapa', null, [
                                                  'placeholder' => 'a',
                                                  'class' => 'form-control',
                                                  'id' => 'floatingCity',
                                              ]) !!}
                                              <label for="floatingCity">Início</label>
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="form-floating">
                                              {!! Form::date('Termino_etapa', null, [
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
                      {!! Form::close() !!}
                  </div>
              </div>
          </div>


      </div>

      {!! Form::close() !!}


      {{-- <script>
        $(document).ready(function () {
            $('#novaetapa').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var metaId = button.data('meta-id');
    
                // Atribuir o valor do ID da meta ao campo oculto
                $('#metas_id').val(metaId);
            });
        });
    </script>
     --}}

         
     <script>
        $(document).ready(function () {
            $('#excluirmeta').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var metaId = button.data('bs-meta-id');
                $('#meta-id').text(metaId);
                var deleteForm = document.getElementById('delete-form');
                var actionUrl = deleteForm.getAttribute('action');
                actionUrl = actionUrl.replace('__META_ID__', metaId);
                deleteForm.setAttribute('action', actionUrl);
            });
        });
    </script>
     <script>
        $(document).ready(function () {
            $('#editarmeta').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var metaId = button.data('bs-meta-id');
                $('#metaId').val(metaId);
            });
        });
    </script>

    