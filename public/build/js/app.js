function iniciarApp(){eventListeners()}document.addEventListener("DOMContentLoaded",(function(){iniciarApp()}));const pantallaCompleta=document.querySelector(".pantallaCompleta"),body=document.querySelector(".body"),menuBtn=document.querySelector("#menu-toggle"),nav=document.querySelector(".nav"),iconosModo=document.querySelector(".btn-modo-oscuro");function eventListeners(){if(menuBtn.addEventListener("click",navegacion),pantallaCompleta.addEventListener("click",pantalla),toggleModo(),"/contacto"===window.location.pathname){document.querySelectorAll('input[name="contacto[sitio-cuentas]"]').forEach(e=>e.addEventListener("click",seleccionarMetodo));document.querySelector(".btn-formulario").addEventListener("click",anadirValidacion)}document.querySelector("#curriculum-pagina-publica")&&consultarAPIpublica()}function navegacion(){menuBtn.classList.toggle("open"),nav.classList.toggle("muestra"),body.classList.toggle("fijar-body"),pantallaCompleta.classList.toggle("activarPantallaNegra")}function pantalla(){menuBtn.classList.remove("open"),nav.classList.remove("muestra"),body.classList.remove("fijar-body"),pantallaCompleta.classList.remove("activarPantallaNegra");const e=document.querySelector(".modal-formulario");e&&(e.classList.add("cerrar"),setTimeout(()=>{document.querySelector(".modal-formulario").remove()},500))}function seleccionarMetodo(e){const o=document.querySelector("#input-sitio");"si"===e.target.value?o.innerHTML='\n      <div class="form-input">\n        <label for="sitio">¿Cuál es el nombre de tu sitio web?:<span>*</span></label>\n        <input \n        required \n        pattern="https?://([a-zA-Z0-9]([^ @&%$\\/()=?¿!.,:;]|d)*[a-zA-Z0-9][.])+[a-zA-Z]{2,4}([.][a-zA-Z]{2})?/?((?<=/)(([^ @&$#\\/()+=?¿!,:;\'&quot;^´*%|]|d)+[/]?)*(#(?<=#)[^ @&$#\\/()+=?¿!,:;\'&quot;^´*%|]*)?(?(?<=?)([^ @&$#\\/()+=?¿!,:;\'&quot;^´*|]+[=][^ @&$#\\/()+=?¿!,:;\'&quot;^´*|]+(&(?<=&)[^ @&$#\\/()+=?¿!,:;\'&quot;^´*|]+[=][^ @&$#\\/()+=?¿!,:;\'&quot;^´*|]+)*))?)?"\n        maxlength="100" \n        title="Escriba el nombre de su sitio web, máximo 100 caracteres" \n        autocomplete="off"  \n        type="url" \n        id="sitio" \n        placeholder="https://tusitioweb.com/" \n        name="contacto[sitio]">\n        <div class="validacion-error sitio">\n            <p><i class="fas fa-exclamation-circle"></i>Escriba su sitio web, debe iniciar con https:// o http://</p>\n        </div>\n    </div>\n\n      ':o.innerHTML="\n    \n    "}const toggleModo=()=>{iconosModo.addEventListener("click",()=>{body.classList.toggle("dark"),document.querySelector(".sun-logo").classList.toggle("animate-sun"),document.querySelector(".moon-logo").classList.toggle("animate-moon"),body.classList.contains("dark")?(localStorage.setItem("modo","dark"),añadirAnimacionDark()):(localStorage.setItem("modo","claro"),removerAnimacionDark())}),"dark"===localStorage.getItem("modo")?(body.classList.toggle("dark"),añadirAnimacionDark()):(body.classList.remove("dark"),removerAnimacionDark())};function removerAnimacionDark(){document.querySelector(".moon-logo").classList.remove("animate-moon"),document.querySelector(".sun-logo").classList.remove("animate-sun")}function añadirAnimacionDark(){document.querySelector(".moon-logo").classList.add("animate-moon"),document.querySelector(".sun-logo").classList.add("animate-sun")}function anadirValidacion(){document.querySelector(".formulario").classList.add("anadir-validacion")}window.addEventListener("load",()=>{const e=document.querySelector(".loader-fondo");e.style.opacity=0,e.style.visibility="hidden",body.classList.remove("fijar-body"),setTimeout((function(){e.remove()}),1200)});
//# sourceMappingURL=app.js.map