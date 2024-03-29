<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <meta name="description" content="A SocialWell é uma empresa dedicada ao desenvolvimento de soluções tecnológicas focadas no bem-estar mental, proporcionando uma abordagem única e integrada para a promoção da saúde emocional por meio de análises de redes sociais e interações digitais.">
	    <meta name="keywords" content="Socialize com seu Bem-Estar">
	    <meta name="robots" content="index,follow" />

        <title>SocialWell - Socialize com seu Bem-Estar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700&amp;subset=latin-ext" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <link href="/assets/css/style.css" rel="stylesheet" />

        <link rel="stylesheet" href="/assets/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="/assets/css/ion.rangeSlider.skinNice.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
    
        <link rel="stylesheet" href="/assets/css/tools.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-V403GE7PZ9"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-V403GE7PZ9');
        </script>

    </head>
    <body class="antialiased">
        <div id="general-wrapper">
        <!-- Header -->
            <div id="header">
                <nav class="navbar navbar-default">
                    <div class="container">
        
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                            <a class="navbar-brand" href="https://www.socialwell.com.br"></a>
                        </div>
                    
                        <div class="collapse navbar-collapse" id="header-menu">
                            <ul class="nav navbar-nav hide-link">
                               
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Sobre</a>
                                </li>
                                
                               
							</ul>
                            <ul class="nav navbar-nav navbar-right">
								<li>
									<a class="link-text" href="#">Cadastre-se</a>
								</li>
								<li>
									<a class="btn-register" href="#">Login</a>
								</li>
                            </ul>
                                                    
                        </div>
                    </div>
                </nav>
            </div>

                    <!-- Investidor -->
            <div id="hero">
                <div class="container vertical-align">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hero-caption">
                                <h1>Socialize com seu Bem-Estar</h1>
                                <p>Promoção da saúde emocional por meio de análises de redes sociais e interações digitais!</p>
                                <a class="btn btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLScNYCNdQuag83_Mn0PcLZGm21tjVQrWSv5K81mxZiuXl28HJw/viewform">Responder pesquisa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Apoio? -->
            <div id="howitworks" class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Missão</h2>
                                <p>Dedicamos nossa expertise em tecnologia para oferecer suporte significativo às pessoas que enfrentam desafios de saúde mental relacionados ao uso excessivo de redes sociais. Buscamos proporcionar uma abordagem inovadora, acessível e personalizada, incentivando a autoconsciência digital, conexões significativas e o bem-estar emocional.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="hiw-box">
                                <div class="hiw-icon">
                                    <img src="/assets/images/hiw-icon-3.svg" alt="cadastro" />
                                </div>
                                <h3>Cadastre-se na plataforma</h3>
                                <p>Cadastre-se e vincule sua conta do Instagram.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <div class="hiw-box">
                                <div class="hiw-icon">
                                    <img src="/assets/images/hiw-icon-4.svg" alt="analise" />
                                </div>
                                <h3>Análise</h3>
                                <p>Seu perfil é analisado por nosso sistema.</p>
                            </div>
                        </div>
                    
                        <div class="col-md-4 col-sm-4">
                            <div class="hiw-box">
                                <div class="hiw-icon">
                                    <img src="/assets/images/hiw-icon-3.svg" alt="Feedback" />
                                </div>
                                <h3>Feedback</h3>
                                <p> O sistema fornece feedback de uso, acompanhado de dicas para aprimorar o comportamento na rede social.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center">
                                <a class="btn btn-green" href="#">Solicite agora!</a>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            
            <!-- Aplicativo -->
            <div id="mobile-apps">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="phone-text">
                                <h3>Nosso aplicativo é <br />nossa plataforma de apoio a saúde mental!</h3>
                                <p>O SocialWell é uma ferramenta que utiliza dados de interação do Instagram  <br />para fornecer feedback personalizado aos usuários, visando aprimorar sua saúde mental e comportamento nas redes sociais.</p>
                                <p>Analisando a frequência de uso e o conteúdo postado,  <br />o app identifica padrões alinhados com nosso dataset, incluindo possíveis indicativos de tendências depressivas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 hidden-xs hidden-sm">
                            <div class="phone-image">
                                <img src="/assets/images/phone-image.png" alt="app socialwell" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <!-- Equipe -->
            <div id="howitworks" class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Equipe</h2>
                                <p> Um Estudo Exploratório no Contexto de Projeto Acadêmico compreendendo o comportamento em Redes Sociais. </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="hiw-box">
                                <div class="hiw-icon">
                                    <a href="https://www.linkedin.com/in/aristotelesfl/" target="_blank">
                                        <img style="border-radius: 50%;" src="/assets/images/ari.jpeg" alt="Aristóteles Feitosa" />
                                    </a>
                                </div>
                                <h3>Aristóteles Feitosa</h3>
                                <p>Cofundador, Acadêmico de de Ciências da Computação - UECE.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <div class="hiw-box">
                                <div class="hiw-icon">
                                    <a href="https://www.linkedin.com/in/carlos-daniel-pereira-da-costa-353389283/" target="_blank">
                                        <img style="border-radius: 50%;" src="/assets/images/daniel.jpeg" alt="Carlos Daniel" />
                                    </a>
                                </div>
                                <h3>Carlos Daniel</h3>
                                <p>Cofundador, Acadêmico de Engenharia Elétrica - UNIFSA.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
                </div>
                
                <!-- Footer -->
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="footer-logo" href="https://www.socialwell.com.br">
                                    <img src="/assets/images/logo.png" alt="SocialWell" />
                                    
                                </a>
                                
                                <ul class="social-links">
                                    <li>
                                        <a class="social-instagram" target="_blank" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="social-facebook" target="_blank" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="social-twitter" target="_blank" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="row credits">
                            <div class="col-md-6 col-sm-6">
                                <p>Copyright &copy; 2023 SocialWell </p>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                
                            </div>
                        </div>
                    </div>
                </div>





        </div>   


     <!-- Scripts -->
	<script src="/assets/js/jquery-3.2.0.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script> 
    <script src="/assets/js/ion.rangeSlider.min.js"></script>
	<script src="/assets/js/main.js"></script>      
       
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="socialwell.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
/*]]>*/</script>


	
	<script>
	
	$(document).ready(function() {

	    // Calculate
		$("#calculate-input").ionRangeSlider({
	        min: 500,
	        max: 15000,
	        from: 2000,
	        prefix: "R$ ",
	        step: 50,
	        prettify_enabled: true,
	        prettify_separator: "."
		});
		
		
		
	});
	
	
</script>
    </body>


</html>
