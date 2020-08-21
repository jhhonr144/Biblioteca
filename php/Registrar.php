
 <span onclick="document.getElementById('iniciar').style.display = 'none'" class="close" title="Close Modal2">&times;</span>
  <div class="section third-section">
            <div class="container newsletter">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Registro</h3>
                        </div>
                    </div>
                </div>
                <div id="success-subscribe" class="alert alert-success invisible">
                    <strong>Genial!</strong></div>
                <div class="row-fluid">
                    <div class="span5">                        
                         <p>Unete a nosotros</p>
                        
                    </div>
                    <div class="span7">
                        <form id="registrar" name="registrar" class="inline-form">
                            <p><samp>  Nombre:</samp> <input type="text" name="nombre" id="nombre" class="span8" placeholder="Escriba Su Nombre" required />
                               <p><samp>  Cedula:</samp>  <input pattern=".{10,}"  maxlength="11" type="number" name="cedula" id="cedula" class="span8" placeholder="Cedula" required /></p>
                            <P> <samp>  Telefono:</samp>     <input pattern=".{10,}"  maxlength="13" type="number" name="telefono" id="telefono" class="span8" placeholder="Telefono" required /></p>                       
                            <p><samp>  Correo:</samp> <input type="email" name="email" id="email" class="span8" placeholder="Escriba Su email" required />
                         <p><samp>  Clave:</samp> <input type="password" name="clave" id="clave" class="span8" placeholder="Contraseña" required /></p>
                             </form>
                       
                        <div style="text-align:right" id="registrado">                             
                            <button onclick="iniciarsecion()"   class="button button-sp" >Cancelar</button>
                            <button  onclick="ya(document.registrar.nombre.value,document.registrar.cedula.value,document.registrar.telefono.value,document.registrar.email.value,document.registrar.clave.value)" class="button button-sp" >Registrarse</button>
                        </div>             
                        
                                                       
                     
                    </div>
                </div>
            </div>
    </div>
