<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Registration Form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.6.0/modern-normalize.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css'>
<link rel="stylesheet" href="{{asset('/css/upload_image/style.css')}}">

<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="{{asset('/css/formulario/style-formulario.css')}}">
<link rel="stylesheet" href="{{asset('/css/formulario/style-checkbox.css')}}">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  
  
  <div class="login-container">
    <h1 class="create">Formulário Master Chefe</h1>
    
        <div class="social-media">
      <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
      <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
      <a href="#" class=github><i class="fab fa-github"></i></a>       
     </div>
    
    <p class="description">Or use your email for registration:</p>
   
{!! Form::open(array('route' => 'inscricao.store','method'=>'POST')) !!}

   
    
      <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="input-field" id="Nome" name="Nome" placeholder="Digite o seu Nome Completo">
          </div>
          <div class="form-group col-md-6">
            <input type="text" class="input-field" id="Telefone" name="Telefone" placeholder="Telefone">
          </div>
        <div class="form-group col-md-6">
          <input type="email" class="input-field" id="Email" name="Email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <select name="dre_id" id="dre_id" class="input-field">
                <option value="" disabled> Selecione a sua DRE</option>
                @foreach ($dre as $dres)
                <option value="{{ $dres->id}}">{{$dres->Nome}} </option>
                @endforeach
            </select>
            
            </div>
        <div class="form-group col-md-6">
            <select name="escola_id" id="escola_id" class="input-field">
                <option value="" disabled> Selecione a Escola</option>
                @foreach ($escola as $escolas)
                <option value="{{ $escolas->id}}">{{$escolas->EscolaNome}} </option>
                @endforeach
            </select>
            
            </div>
      </div>


<!-- partial:index.partial.html -->
<fieldset class="checkbox-group">
	<legend class="checkbox-group-legend"> <h1 class="create">Escolha os ingredientes da sua receita</h1>
    </legend>
    @foreach ($ingredientes as $ingredientes2)
        
	<div class="checkbox">
        <label class="checkbox-wrapper">
            <input type="checkbox"  name="products[]" value="{{ $ingredientes2->id}}" class="checkbox-input" />
			        <span class="checkbox-tile">
                <span class="checkbox-icon">
                    <img src="{{asset('/images/ingredientes/')}}/{{$ingredientes2->image}}"  width="90px" >
				      </span>
              <span class="checkbox-label">{{$ingredientes2->Nome}}</span>
              <label> Qnt. </label>
              <input type="number" name="quantities[]" placeholder="Quantidade"  class="input-field" value="1" />
			        </span>
		    </label>
	</div>

    @endforeach
    

</fieldset>

      <div class="form-group">
        <input type="text" class="input-field" id="Outros_ingredientes" name="Outros_ingredientes" placeholder="Outros Ingredientes">
      </div>
      <div class="form-group">
        <textarea name="message" class="input-field"  id="Preparo" name="Preparo" rows="10" cols="30">Descreva a forma de preparo:</textarea>
      </div>

{{-- 
      <label> <h2> Enviar foto </h2> </label>
      <div class="upload">
        <input type="file" title="" id="image" name="image"  class="drop-here">
        <div class="text text-drop">Imagem</div>
        <div class="text text-upload">Enviando</div>
        <svg class="progress-wrapper" width="300" height="300">
          <circle class="progress" r="115" cx="150" cy="150"></circle>
        </svg>
        <svg class="check-wrapper" width="130" height="130">
          <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
        </svg>
        <div class="shadow"></div>
      </div>  --}}
      
 <center>
    <div class="checkbox-group">
        <input type="checkbox" id="terms-and-privacy" name="terms-and-privacy" value="Terms-and-Privacy" required>
        <label for="Agree" class="terms-privacy-checkbox">Eu aceito os <a href="#" class="link">Termos</a> de <a href="#" class="link">Política de Privacidade.</a></label>
      </div>
    
      <div class="form-group col-md-12">  
            <button type="submit" class="btn btn-primary btn-lg">Enviar formulário</button>
      </div>
    </form>
    
    
          
     </form>
   </div>
  
    
   <center>
    <p>Desenvolvido pela <span class='text-danger'><i data-feather="heart"></i></span> <a href="https://seduc.mt.gov.br" target="_blank">SEDUC - TI </a></p>
</div>
  

  
  
</div>
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
