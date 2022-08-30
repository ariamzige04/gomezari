<form id="formulario" method="POST" action="/contacto" class="mini-seccion formulario">
    
    <fieldset>


        <div class="form-input">
            <label for="nombre">Nombre:<span>*</span></label>
            <input 
            required 
            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
            maxlength="15"
            minlength="3" 
            title="Escriba su nombre, no se permite números, máximo 15 caracteres" 
            autocomplete="off"  
            type="text" 
            id="nombre" 
            placeholder="Ingrese su nombre" 
            name="contacto[nombre]">
            <div class="validacion-error nombre">
                <p><i class="fas fa-exclamation-circle"></i>Escriba su nombre, no se permite números</p>
            </div>
        </div>

        <div class="form-input">
            <label for="apellido">Apellido:<span>*</span></label>
            <input 
            required 
            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
            maxlength="15"
            minlength="3" 
            title="Escriba su apellido, no se permite números, máximo 15 caracteres" 
            autocomplete="off"  
            type="text" 
            id="apellido" 
            placeholder="Ingrese su apellido" 
            name="contacto[apellido]">
            <div class="validacion-error apellido">
                <p><i class="fas fa-exclamation-circle"></i>Escriba su apellido, no se permite números</p>
            </div>
        </div>

        <div class="form-input">
            <label for="telefono">Teléfono:<span>*</span></label>
            <input 
            required 
            pattern="[0-9]{10}" 
            maxlength="10"
             
            title="Escriba su teléfono, no se permite letras, escriba 10 numeros" 
            autocomplete="off" 
            type="tel" 
            id="telefono" 
            placeholder="Ingrese su teléfono" 
            name="contacto[telefono]">
            <div class="validacion-error telefono">
                <p><i class="fas fa-exclamation-circle"></i>Escriba su teléfono, no se permite letras</p>
            </div>
        </div>

        <div class="form-input">
            <label for="correo">Correo:</label>
            <input 
             
            pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"
            maxlength="30"
            minlength="3" 
            title="Escriba su correo, debe de tener un @ y con su respectiva terminacion" 
            autocomplete="off" 
            type="email" 
            id="correo" 
            placeholder="Ingrese su correo" 
            name="contacto[correo]">
            <div class="validacion-error correo">
                <p><i class="fas fa-exclamation-circle"></i>Escriba su correo, debe de tener un @, con su respectiva terminacion y sin espacios</p>
            </div>
        </div>

        <div class="form-input">
            <label for="negocio">¿Cuál es el nombre de tu negocio?:<span>*</span></label>
            <input 
            required 
            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
            maxlength="30"
            minlength="3" 
            title="Escriba el nombre de tu negocio, máximo 30 caracteres" 
            autocomplete="off"  
            type="text" 
            id="negocio" 
            placeholder="Ingrese el nombre de su negocio" 
            name="contacto[negocio]">
            <div class="validacion-error negocio">
                <p><i class="fas fa-exclamation-circle"></i>Escriba el nombre de su negocio</p>
            </div>
        </div>

        <div class="form-input">
            <p>¿Cuentas con un sitio web?<span>*</span></p>
            
            <div class="sitio-web-si-no">

                <div class="check">
                    <label for="si">Si</label>
                    <input required name="contacto[sitio-cuentas]" type="radio" value="si" id="si" >
                </div>
                
                <div class="check">
                    <label for="no">No</label>
                    <input required name="contacto[sitio-cuentas]" type="radio" value="no" id="no" >
                </div>

            </div>
            <div class="validacion-error sitio-cuentas">
                <p><i class="fas fa-exclamation-circle"></i>Seleccione una opción</p>
            </div>
            
        </div>

        <!-- 
            pone input para poner el dominio del sitio web
         -->
        <div id="input-sitio">

        </div>
        <!-- 
            fin
        -->

        

        <div class="form-input">
            <label for="presupuesto">¿Cuál es tu presupuesto?:<span>*</span></label>
            <input 
            required 
            title="Escriba su presupuesto" 
            autocomplete="off"  
            type="number" 
            id="presupuesto" 
            min="1000" max="99999"
            placeholder="Ingrese su presupuesto" 
            name="contacto[presupuesto]">
            <div class="validacion-error presupuesto">
                <p><i class="fas fa-exclamation-circle"></i>Escriba su presupuesto</p>
            </div>
        </div>

        <div class="form-input">
            <label for="mensaje">¿Cómo deseas tu sitio web?<span>*</span></label>
            <textarea 
            required 
            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
            maxlength="500" 
            minlength="3"
            title="Escriba su mensaje, máximo 500 caracteres" 
            autocomplete="off" 
            id="mensaje" 
            placeholder="Cuéntame, estoy a tus órdenes" 
            name="contacto[mensaje]"></textarea>
            <div class="validacion-error mensaje">
                <p><i class="fas fa-exclamation-circle"></i>Escriba como deseas tu sitio web</p>
            </div>
        </div>

    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">


    </fieldset>

    <p>Nota: ¿No sabes cómo deseas tu sitio web? No te preocupes, envía el formulario con lo que tengas y con mucho gusto me pondré en contacto contigo. </p>

    
    <!-- <div class="paypal">
        <img loading="lazy" src="/build/img/paypal.svg" alt="Se paga con PayPal">
    </div> -->

    <!-- <div class="g-recaptcha" data-sitekey="6LedoHMfAAAAAPRXI09JymtYzMrUNJs7vyWBnzMh" data-callback="correctCaptcha"></div> -->
    <!-- es el de abajo 18/04/2022 -->
    <!-- <div class="g-recaptcha" data-sitekey="6LfHv4EfAAAAABSJFiw6I27Ku7m5OI7R5YdR9Ykg"></div> -->

    <input type="submit" value="Enviar" title="Enviar Formulario" class="btn-formulario boton-pri">
    <!-- <button class="g-recaptcha" 
        data-sitekey="6LdKJHkfAAAAANfkK5ADE-2P5m7Sx96DHgvwQ1-r" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button> -->
</form>

