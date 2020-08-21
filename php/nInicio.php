
 <span onclick="document.getElementById('iniciar').style.display ='none'" class="close" title="Cerrar">&times;</span>
  
  <div  class="section third-section">
            <div class="container newsletter">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Iniciar Sesion</h3>
                        </div>
                    </div>
                </div>
                <div id="success-subscribe" class="alert alert-success invisible">
                    <strong>Genial!</strong></div>
                <div class="row-fluid">
                    <div class="span5">
                        <p>Debes iniciar sesión para obtener los beneficios de comprar o alquilar el libro que deseas.</p>
                         <p>Si no estas Registrado unete a nosotros</p>
                         <button onclick="registra()"  class="button button-sp">Registrarse</button>
                    </div>
                    <div class="span7">
                        <form class="inline-form" id="iniciando"  name="iniciando">
                            <p>Correo:  <span class="glyphicon glyphicon-cloud"></span><input type="email" name="email" id="email" class="span8"  maxlength="100" placeholder="Escriba Su email" required /></p>   
                            
                            <samp>  Clave:</samp>   <input type="password" name="mail" id="mail" class="span8" maxlength="100" placeholder=" Contraseña" required />
                            
                        </form>
                        <div style="text-align:right"><button onclick="document.getElementById('iniciar').style.display ='none'"  class="button button-sp">Cancelar</button>
                            <button id="subscribe" onclick="intento(document.iniciando.email.value,document.iniciando.mail.value)" class="button button-sp">Iniciar Sesion</button></div>             
                        
                        <div id="err-subscribe" class="error centered">Please provide valid email address.</div>
                    </div>
                </div>
            </div>
<!--        </div>

document.getElementById('iniciar').style.display = 'block';-->









