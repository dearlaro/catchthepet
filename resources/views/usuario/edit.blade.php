<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro</title>
	<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="gradient">
	   <!-- início do preloader -->
	   <div id="preloader">
        <div class="inner">
           <img src="img/gatoLoade.gif" alt="" srcset="">
        </div>
    </div>  

	<a href="../Login/index.html"><img src="img/seta.png" class="icon-back" alt="voltar"></a>
	<main>
		<div class="box">
			<div class="inner-box">
				<div class="forms-wrap">
				<form action="{{route('usuario.update', $usuario->id)}}" method="post"  autocomplete="off" class="sing-in-form">
						<div class="logo">
							<img src="img/logoo.png" alt="logo">
							<h4>Catch The Pet</h4>
						</div>

						<div class="heading">
							<h2>Cadastra-se</h2>
							<div class="login-button">
							     <button><a href="../Login/index.html" class="toggle">Entrar</a></button>
						    </div>
						</div>

						<div class="actual-form">
							<div class="input-group" x-data>
								<div class="input-wrap">
									<label for="firstname">Primeiro Nome</label>
							        <input class="input-field" type="text"  id="primeironome" name="primeironome" placeholder="Digite seu primeiro nome" maxLength="16"  autocomplete="off" required value="{{$usuario->primeironome}}">
								</div>

								<div class="input-wrap">
									<label for="lastname">Sobrenome</label>
									<input type="text" minlength="4" class="input-field" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" maxLength="16" autocomplete="off" required value="{{$usuario->sobrenome}}">
								</div>

								
								<div class="input-wrap">
									<label for="email">E-mail</label>
									<input type="email" class="input-field"  id="email" name="email" placeholder="Digite seu email" autocomplete="off" required maxlength="30" value="{{$usuario->email}}">
								</div>

								<div class="input-wrap">
									<label for="number">Celular</label>
									<input type="tel" class="input-field" id="telefone" name="telefone" placeholder="(00) 0000-0000" autocomplete="off" value="" x-mask="(99) 99999-99999" required value="{{$usuario->telefone}}">
								</div>

								<div class="input-wrap">
									<label>Senha</label>
									<input type="password" minlength="4"  required maxlength="16" class="input-field" placeholder="Digite sua senha" id="senha" name="senha" autocomplete="off" required value="{{$usuario->senha}}">
								</div>

								<div class="input-wrap">
									<label>Confirme sua senha</label>
									<input type="password" minlength="4"  required maxlength="16" class="input-field" placeholder="Confirme sua senha" id="senha" name="senha" autocomplete="off"required value="{{$usuario->senha}}">
								</div>
						</div>

						
						<div class="gender-inputs">
							<div class="gender-title">
								<h6>Genero</h6>
							</div>
		
							<div class="gender-group">
								<div class="gender-input">
									<input type="radio" id="genero" name="genero" class="ativo">
									<label for="female">Feminino</label>
									<span class="check"></span>
								</div>
		
								<div class="gender-input">
									<input type="radio" id="genero" name="genero" class="ativo">
									<label for="male">Masculino</label>
									<span class="check"></span>
								</div>

		
								<div class="gender-input">
									<input type="radio" id="genero" name="genero" class="ativo" >
									<label for="none">Prefiro não dizer</label>
									<span class="check"></span>
								</div>
							</div>
						</div>

							<a  class="sing-btn" >Continue</a>


							<p class="text">
								Ao me inscrever, concordo com os
								<a href="#">Termos e Serviços</a> e 
								<a href="#">Politica de Privacidade</a>
							</p>
						</div>
					</form>



					<form action="index.html" autocomplete="off" class="sing-up-form">
						<div class="logo">
							<img src="img/logoo.png" alt="logo">
							<h4>Catch The Pet</h4>
						</div>

						<div class="heading">
							<h2>Cadastro Pet</h2>
							<div class="login-button">
							     <button><a href="{{ route('usuario.principal')}}" class="toggle">Entrar</a></button>
						    </div>
						</div>

						<div class="actual-form">

							<div class="input-group" x-data>

								<div class="input-wrap">
									<label for="namePet"> Nome</label>
									<input type="text" minlength="4" id="nome"  name="nome" class="input-field" placeholder="Digite o nome" autocomplete="off" maxlength="16" required value="{{$pet->nome}}">
								</div>

								<div class="input-wrap">
									<label for="CorPet"> Cor</label>
									<input type="text" id="cor"  name="cor" class="input-field" placeholder="Digite uma cor" autocomplete="off" maxlength="16" required value="{{$pet->cor}}">
								</div>

								
								<div class="input-wrap">
									<label>Descrição</label>
									<textarea class="textarea" id="descricao"  name="descricao" placeholder="Alguma caracteristica?..."  style="resize: none" value="{{$pet->descricao}}" ></textarea>
								</div>
								</div>
							
						<div class="gender-inputs">
							<div class="gender-title">
								<h6>Raça</h6>
							</div>		
							<div class="gender-group">
								<div class="gender-input">
									<input type="radio" id="raca" name="raca" class="ativo" >
									<label for="Cat" name="nameRaca">Gato</label>
									<span class="check"></span>
								</div>
		
								<div class="gender-input">
									<input type="radio" id="raca" name="raca" class="ativo" >
									<label for="dog" name="nameRaca">Cachorro</label>
									<span class="check"></span>
								</div>

		
								<div class="gender-input">
									<input type="radio" id="raca" name="raca" class="ativo" >
									<label for="otherPet"  name="nameRaca">Outros</label>
									<span class="check"></span>
								</div>
							</div>
						</div>
						<div class="genderPet">
						<div class="gender-inputs">
							<div class="gender-title">
								<h6>Sexo</h6>
							</div>
		
							<div class="gender-group">
								<div class="gender-input">
									<input type="radio" id="sexo" name="sexo" class="ativo">
									<label for="femalePet">Femea</label>
									<span class="check"></span>
								</div>
		
								<div class="gender-input">
									<input type="radio" id="sexo" name="sexo" class="ativo">
									<label for="malePet">Macho</label>
									<span class="check"></span>
								</div>
							</div>
						</div>
						</div>


								<a class="sing-btn" href="../Principal/index.html">Finalizar</a>


								<p class="text">
									Ao me inscrever, concordo com os
									<a href="#">Termos e Serviços</a> e 
									<a href="#">Politica de Privacidade</a>
								</p>
							</div>
					</form>
				</div>
				<div class="cardTwo ">
				      <div class="img">
							<div class="form-card">
								<div class="img-card">
									<img src="img/perfil.png" class="imgP" id="imgP" alt="perfil" >
								</div>
								<div class="img-card2">
									<img src="img/seloPet.png" class="img-selo" id="img-selo" >
								</div>
					
								<div class="infor-card">

											<div class="cc-nameP">
												<div id="nome"class="value" value="{{$pet->nome}}"></div>
											</div>
																								
										<div class="cc-raca">		
											<div class="value" id="raca" value="{{$pet->raca}}"></div>
										</div>

										<div class="cc-cor">
											<div id="cor" class="value" value="{{$pet->cor}}"></div>
										</div>					
									</div>
								</div>
					      </div>
				     </div>



					 <div class="cardOne Show">
					 <div class="img">
						<div class="form-card">
							<div class="img-card">
								<img src="img/perfil.png" class="imgPerfil" id="imgPerfil" alt="perfil" >
							</div>
							<div class="img-card2">
								<img src="img/selo.png" class="img-selo" id="img-selo" >
							</div>
				
							<div class="infor-card">

								<div class="name">
										<div class="cc-name">
											<div id="primeironome" class="value" value="{{$usuario->primeironome}}"></div>
									</div>
									<div class="cc-lastName">
										<div id="sobrenome" class="value" value="{{$usuario->sobrenome}}"></div>
									</div>
								</div>
					
									<div class="cc-email">		
										<div class="value" id="email" value="{{$usuario->email}}"></div>
									</div>
					
									<div class="cc-tel">
										<div class="value" id="telefone" value="{{$usuario->telefone}}"></div>
									</div>
								</div>
							</div>
					  </div>
					</div>
				 </div>
				</div>
			</div>		
		</div>
	</div>
	</div>
</div>
		</div>
	</main>
	<script src="{{ asset('js/cadastroPreloader.js') }}"></script>
	<script type="module" src="{{ asset('js/cadastroMain.js') }}"></script>
	<script src="{{ asset('js/cadastroForm.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/cadastroJquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/cadastroJquery.mask.min.js') }}"></script>

</body>
</html>