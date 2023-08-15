<!-- Editar Plano COnsolidado -->
{!! Form::close() !!}

<div class="modal fade" id="editarplano{{ $planos->id }}Editar" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Plano Consolidado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method' => 'PUT', 'route' => ['trdigital.planoconsolidadoupdate', $planos->id]]) !!}

                <div class="modal-body">

                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">

                                {!! Form::text('Discriminacao', $planos->Discriminacao, [
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

                                    <select name="Complemento" id="Complemento" class="form-control custom-select"
                                        required>
                                        <option value="" disabled selected>
                                            Selecione o Orgão Concedente</option>
                                        @foreach ($metas as $meta)
                                            <option value="{{ $meta->id }}">
                                                {{ $meta->Especificacao_metas }}
                                            </option>
                                        @endforeach

                                    </select>

                                    <label for="floatingName"></label>
                                    <label for="floatingEmail">Complemento da Discriminação</label>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    {!! Form::text('Complemento', $planos->Complemento, [
                                        'placeholder' => 'Complemento',
                                        'class' => 'form-control',
                                        'id' => 'floatingName',
                                    ]) !!}
                                    <label for="floatingName"></label>
                                    <label for="floatingEmail">Complemento</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    {!! Form::number('Valor_concedente', $planos->Valor_concedente, [
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
                                        {!! Form::number('Valor_proponente_financeira', $planos->Valor_proponente_financeira, [
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
                                        {!! Form::number('Valor_proponente_nao_financeira', $planos->Valor_proponente_nao_financeira, [
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

            </div>
        </div>
        </div>
        </div>
