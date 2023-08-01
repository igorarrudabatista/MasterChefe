<div class="tab-pane fade" id="list-atas" role="tabpanel" aria-labelledby="list-atas-list">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><b> <big> 5. </b> </big>
                Atas,
                Certidões, Comprovantes e Declarações (Anexar):
            </h5>
            {!! Form::open([
                'url' => route('trdigital.validar.documentos', ['id' => $n_processo->Doc_anexo2->id]),
                'method' => 'post',
            ]) !!}
            <!-- Default Accordion -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <strong> <big> A) </strong> </big>
                            Cópia da
                            Ata da Assembleia de Fundação ou
                            Constituição ou do Estatuto Social,
                            ou
                            Regimento Interno, conforme o caso
                        </button>

                    </h2>

                    <style>
                        .iframe-container {
                            display: flex !important;
                            justify-content: center !important;
                        }

                        .iframe-container iframe {
                            width: 1200px !important;
                            height: 400px !important;
                        }
                    </style>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">


                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo1)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo1) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo1) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif


                            {!! Form::radio('Doc_Anexo2_Anexo1_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo1_sit == 1, [
                                'class' => 'form-check-input',
                                'id' => 'gridRadios1',
                            ]) !!}
                            <label class="form-check-label" for="gridRadios1">
                                <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                    Validado</span>
                            </label>

                            {!! Form::radio('Doc_Anexo2_Anexo1_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo1_sit == 0, [
                                'class' => 'form-check-input',
                                'id' => 'gridRadios2',
                            ]) !!}
                            <label class="form-check-label" for="gridRadios2">
                                <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                    Corrigir</span>
                            </label>
                        </div>
                    </div>

                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong> <big> B) </strong> </big>
                            Certidão
                            de Habilitação Plena
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">



                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo2)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo2) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo2) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif
                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo2_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo2_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo2_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo2_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong> <big> C) </strong> </big>
                            Certidão
                            de ausência de irregularidades /
                            impedimentos perante TCU / TCE e
                            CGE;
                        </button>

                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif
                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo3_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo3_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#d" aria-expanded="false" aria-controls="d">
                            <strong> <big> D) </strong> </big>
                            Cópia da
                            Ata da Assembleia de Fundação ou
                            Constituição ou do Estatuto Social,
                            ou
                            Regimento Interno, conforme o caso.

                        </button>
                    </h2>
                    <div id="d" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo4)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo4) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo4) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif
                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo4_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo4_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo4_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo4_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#e" aria-expanded="false" aria-controls="e">
                            <strong> <big> E) </strong> </big>
                            Cópia do
                            Ato de Eleição de nomeação ou posse
                            da Mesa
                            Diretora e Dirigente, conforme o
                            caso.


                        </button>
                    </h2>
                    <div id="e" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo5)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo5) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo5) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif
                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo5_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo5_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo5_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo5_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#f" aria-expanded="false" aria-controls="f">
                            <strong> <big> F) </strong> </big>
                            Comprovante de Abertura de Conta e
                            Extrato
                            de Conta Bancária zerada e
                            específica para a
                            formalização do Instrumento.

                        </button>
                    </h2>
                    <div id="f" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo6)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo6) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo6) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif

                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo6_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo6_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo6_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo6_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#g" aria-expanded="false" aria-controls="g">
                            <strong> <big> G) </strong>
                            </big>Comprovação da qualificação
                            técnica e
                            da capacidade operacional, mediante
                            comprovação de funcionamento
                            regular.

                        </button>
                    </h2>
                    <div id="g" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo7)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo7) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo7) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif
                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo7_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo7_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo7_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo7_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#h" aria-expanded="false" aria-controls="h">
                            <strong> <big> H) </strong> </big>
                            Comprovação de Experiência Prévia na
                            Realização de Parcerias com objetos
                            semelhantes – (Anexar Cópia de
                            Publicações e
                            Parcerias executadas ou em
                            andamento).

                        </button>
                    </h2>
                    <div id="h" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo8)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo8) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo8) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif

                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo8_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo8_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo8_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo8_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#i" aria-expanded="false" aria-controls="i">
                            <strong> <big> I) </strong> </big>
                            Declaração que comprove a
                            regularidade do
                            mandato de sua diretoria, da
                            realização de
                            assembleias ordinárias e da
                            atividade
                            regular, com validade restrita ao
                            exercício
                            de sua emissão, quando for o caso.

                        </button>
                    </h2>
                    <div id="i" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo9)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo9) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo9) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif
                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo9_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo9_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo9_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo9_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#j" aria-expanded="false" aria-controls="j">
                            <strong> <big> J) </strong> </big>
                            Declaração de Capacidade
                            Administrativa,
                            Técnica e Gerencial Para a Execução
                            do Plano
                            De Trabalho (modelo em anexo);


                        </button>
                    </h2>
                    <div id="j" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo10)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo10) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo10) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif
                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo10_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo10_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo10_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo10_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#k" aria-expanded="false" aria-controls="k">
                            <strong> <big> K) </strong> </big>
                            Declaração de Contrapartida – quando
                            for o
                            caso (modelo em anexo);
                        </button>
                    </h2>
                    <div id="k" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo11)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo11) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo11) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif
                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo3_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo3_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#l" aria-expanded="false" aria-controls="l">
                            <strong> <big> L) </strong> </big>
                            Declaração da Não Ocorrência de
                            Impedimentos
                            (modelo em anexo);

                        </button>
                    </h2>
                    <div id="l" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($n_processo->Doc_anexo2 && $n_processo->Doc_anexo2->Doc_Anexo2_Anexo12)
                                <div class="icon">
                                    <div class="col-md-12 iframe-container">
                                        <iframe
                                            src="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo12) }}"></iframe>
                                    </div>
                                    <a class="btn btn-primary"
                                        href="{{ asset('storage/' . $n_processo->Doc_anexo2->Doc_Anexo2_Anexo12) }}"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                                    </a>
                                </div>
                                @else
                                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                            @endif
                        </div>
                        {!! Form::radio('Doc_Anexo2_Anexo12_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo12_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                Validado</span>
                        </label>

                        {!! Form::radio('Doc_Anexo2_Anexo12_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo12_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                                Corrigir</span>
                        </label>
                    </div>
                </div>
            </div><!-- End Default Accordion Example -->


            <button type="submit" class="btn btn-primary">Enviar</button>

        </div>
    </div>
    </div>




{!! Form::close() !!}
