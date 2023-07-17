<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>SEDUC MT - Formulário - MasterChef </title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.6.0/modern-normalize.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css'>
    <link rel="stylesheet" href="{{ asset('/css/upload_image/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/formulario/style-formulario.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/formulario/style-checkbox.css') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Inclua os arquivos JavaScript e CSS do SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
</head>
</head>

<style>
    .showcase-area {
        height: 45vh;
        background: linear-gradient(rgba(240, 240, 240, 0),
                rgba(255, 255, 255, 0.055)),
            url("{{ asset('/images/logo_seduc_chef_grande.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-top: 5px;
        border-radius:20px
    }

    .showcase-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        font-size: 1.6rem;
    }
</style>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">

        @if (session('success'))
            <script>
                swal({
                    title: "Obrigado!",
                    text: "{{ session('success') }}",
                    icon: "success",
                });
            </script>
        @endif

        <section class="showcase-area" id="showcase">
            <div class="showcase-container">

                <h1 class="main-title" id="home"> <a href="/Site" class="app-link"> <img
                            src="{{ asset('/images/logo_sseduc_chef_grande.jpg') }}" class=""> </a> </h1>
                        
                    </div>
                </section>
                <div class="login-container">
                    <center>
                        <div class=" alert-primary" >
                            <h2 class="alert-heading"><br> Formulário Competição <b> SuperChef da Educação</b>  SEDUC - MT </h2> <br> <h3>
                            </h3> 
                
                <div class="alert alert-primary" role="alert">
                    <h3 class="alert-heading"> DADOS PESSOAIS
                        {!! Form::open(['route' => 'Site.store_formulario', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    </h4> <BR>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="input-field b-cat b-cat-img" id="Nome" name="Nome"
                                    placeholder="Digite o seu Nome Completo" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="input-field b-cat b-cat-img" id="telefone" name="Telefone"
                                    placeholder="Insira o seu telefone com o DDD" required>

                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="input-field b-cat b-cat-img" id="cpf" name="cpf"
                                    placeholder="Digite o seu CPF" required>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="email" class="input-field b-cat b-cat-img" id="Email" name="Email"
                                    placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-4">
                                <select name="cidade_id" id="cidade_id" class="input-field b-cat b-cat-img" required>
                                    <option value="" enable> Selecione a sua Cidade</option>
                                    @foreach ($cidade as $cidades)
                                        <option value="{{ $cidades->id }}">{{ $cidades->Nome }} </option>
                                    @endforeach
                                </select>
                            </div>
                       

                        </div>
                        <hr>
                        <h3 class="alert-heading">SELECIONE A SUA <B>DRE </B> E <B> ESCOLA </B></h2>
                            
                            <div class="form-group col-md-6">
                                <select name="dre_id" id="dre_id" class="input-field b-cat b-cat-img" required>
                                    <option value="" enable> Selecione a sua DRE</option>
                                    @foreach ($dre as $dres)
                                        <option value="{{ $dres->id }}">{{ $dres->Nome }} </option>
                                    @endforeach
                                </select>
                            </div>
                       
                            <div class="form-group col-md-6">
                                <select name="escola_id" id="escola_id" class="input-field b-cat b-cat-img" required>
                                    <option value="" enable> Selecione a sua Escola</option>
                                    @foreach ($escola as $escolas)
                                        <option value="{{ $escolas->id }}">{{ $escolas->EscolaNome }} </option>
                                    @endforeach
                                </select>

                            </div> 
                </div>
            </div>

                <div class="alert alert-warning" role="alert">
                    <h3 class="alert-heading">Qual o nome da sua receita?</h3>
                    <div class="form-group">
                        <input type="text" class="input-field b-cat b-cat-js" id="Nome_Prato" name="Nome_Prato"
                            placeholder="Nome da Receita" required>
                    </div>
                </div>
                <div class="alert alert-warning" role="alert">
                    <h3 class="alert-heading">Motivo da escolha da receita</h3>
                    <div class="form-group">
                        <input type="text" class="input-field b-cat b-cat-js" id="motivo" name="motivo"
                            placeholder="Motivo da escolha receita" required>
                    </div>
                </div>

                <div class="alert alert-warning" role="alert">
                    <h3 class="alert-heading">Selecione todos os ingredientes da sua receita</h4>
                        <hr>
                        <hp> Certifique que você selecionou o ingredientes desejados </h6>
                            <div class="form-group">

                                <!-- Checkbox dos ingredientes -->
                                <fieldset class="checkbox-group">
                                    <legend class="checkbox-group-legend">
                                    </legend>
                                    @foreach ($ingredientes as $ingredientes2)
                                        <div class="checkbox">
                                            <label class="checkbox-wrapper">
                                                <input type="checkbox" name="products[]"
                                                    value="{{ $ingredientes2->id }}" multiple class="checkbox-input" />
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        @if ($ingredientes2->image == NULL)
                                                        <img src="{{asset('/images/logo_seduc_chef.jpg')}}" width="60px">
                                                        @else
                                                        <img src="{{ asset('/images/ingredientes/' . $ingredientes2->image) }}"
                                                            width="60px">
                                                            @endif
                                                    </span>
                                                    <span class="checkbox-label">{{ $ingredientes2->Nome }}</span>
                                                    <small>Quantidade:</small>
                                                    {{-- <input type="number" name="quantities[]" placeholder="Quantidade" multiple class="checkbox-label input-field" value="1" /> --}}
                                                    <input type="number" name="quantities[{{ $ingredientes2->id }}]"
                                                        placeholder="Quantidade" class="checkbox-label input-field2"
                                                        value="1" />

                                                    {{-- <select name="units[]" id="units" class="input-field text-primary"> --}}
                                                    <small>Unid. de medida:</small>

                                                    <select name="units[{{ $ingredientes2->id }}]" id="units"
                                                        class="input-field2 text-primary">

                                                        <option value="Unidade">Unidade</option>
                                                        <option value="Litro">Litro</option>
                                                        <option value="Mililitro">Mililitro</option>
                                                        <option value="Quilo Grama - Kg">Quilo Grama - Kg</option>
                                                        <option value="Grama">Grama</option>
                                                        <option value="Xícara de Chá">Xícara de Chá</option>
                                                        <option value="Copo Americano">Copo Americano</option>
                                                        <option value="Colher de café">Colher de café</option>
                                                        <option value="Colher de chá">Colher de chá</option>
                                                        <option value="Colher de sopa">Colher de sopa</option>
                                                    </select>
                                                </span>
                                            </label>
                                        </div>
                                    @endforeach



                                </fieldset>

                            </div>
                            {{-- 
                           <hr>
<p class="mb-0">Conte para nós o nome da sua receita.</p> --}}
                </div>

                <div class="alert alert-success" role="alert">
                    <h3 class="alert-heading">Outros Ingredientes</h4>
                        <p class="mb-0">Caso não exista o ingrediente na lista acima escreva os aqui. </p>
                        <div class="form-group">
                            <input type="text" class="input-field" id="Outros_ingredientes"
                                name="Outros_ingredientes" placeholder="Outros Ingredientes">
                        </div>
                        <hr>
                        <p class="mb-0">
                        <div class="form-group">
                            <h4 class="alert-heading">Esceva a forma de preparo da sua receita</h4>
                            <textarea class="input-field" id="Preparo" name="Preparo" rows="10" cols="30"
                                placeholder="Descreva a forma de preparo" required> </textarea>
                            <input type="hidden" name="voto" id="voto" value="0" required />
                        </div>
                        Seja detalhista, não esqueça de informar todos os procedimentos e passos.</p>
                </div>

                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Envie a Foto do seu prato</h4>
                    <div class="upload">
                        <input type="file" title="" id="image" name="image" class="drop-here"
                            required>
                        <div class="text text-drop">Imagem</div>
                        <div class="text text-upload">Enviando</div>
                        <svg class="progress-wrapper" width="300" height="300">
                            <circle class="progress" r="115" cx="150" cy="150"></circle>
                        </svg>
                        <svg class="check-wrapper" width="130" height="130">
                            <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                        </svg>
                        <div class="shadow"></div>
                    </div>
                    <hr>
                    <p class="mb-0">---</p>
                </div>




                <center>
                    <div class="checkbox-group">
                        
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg"> Enviar  </button>
                        </div>
                    </div>


                    <center>
                        <p>Desenvolvido pela <span class='text-danger'><i data-feather="heart"></i></span> <a
                                href="https://www3.seduc.mt.gov.br" target="_blank"> <b> SEDUC - TI </b> </a></p>


                                <script>
                                    $("#telefone").mask("(99) 99999-9999");
                            
                                    $("#cep").mask("99999-999");
                            
                                    $("#cpf").mask("999.999.999-99");
                            
                                    $("#cnpj").mask("99.999.999/9999-99");
                            
                                    $("#data").mask("99/99/9999");
                                </script>              
                        <script>
                            // Aguarde o carregamento do documento
                            document.addEventListener('DOMContentLoaded', function() {
                                // Obtenha o formulário pelo ID ou por um seletor
                                const form = document.getElementById('myForm'); // Substitua "myForm" pelo ID do seu formulário

                                // Adicione um listener para o evento de envio do formulário
                                form.addEventListener('submit', function(event) {
                                    event.preventDefault(); // Impede o envio normal do formulário

                                    // Exiba o SweetAlert
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Obrigado!',
                                        text: 'Mensagem de agradecimento',
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        // Redirecione ou execute outras ações após o usuário clicar em OK
                                        // Por exemplo, redirecionar para uma página de agradecimento
                                        if (result.isConfirmed) {
                                            window.location.href = 'pagina-de-agradecimento.html';
                                        }
                                    });
                                });
                            });
                        </script>

                        <!-- partial -->
                        <script>
                            //Duplicar linha de Produto e Quantidade em Criar Orçamento

                            $(document).ready(function() {
                                let row_number = 1;
                                $("#add_row").click(function(e) {
                                    e.preventDefault();
                                    let new_row_number = row_number - 1;
                                    $('#product' + row_number).html($('#product' + new_row_number).html()).find(
                                        'td:first-child');
                                    $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
                                    row_number++;
                                });
                                $("#delete_row").click(function(e) {
                                    e.preventDefault();
                                    if (row_number > 1) {
                                        $("#product" + (row_number - 1)).html('');
                                        row_number--;
                                    }
                                });
                            });
                        </script>

                        
                        <script src="{{ asset('/js/upload_image/script.js') }}"></script>
</body>

</html>
