@if(auth()->check())
    
@else
    <!-- Si no hay un usuario autenticado -->
    <!-- Modal de Advertencia -->
<div class="modal fade" id="modalAdvertencia" tabindex="-1" role="dialog" aria-labelledby="modalAdvertenciaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAdvertenciaLabel">¿Eres mayor de edad?</h5>
            </div>
            <div class="modal-body">
                Por favor, confirma que eres mayor de edad para acceder a este sitio.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnMayorEdad">Sí, soy mayor de edad</button>
                <button type="button" class="btn btn-secondary" id="btnMenorEdad">No, no soy mayor de edad</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Advertencia para Menores -->
<div class="modal fade" id="modalMenores" tabindex="-1" role="dialog" aria-labelledby="modalMenoresLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMenoresLabel">¡Hola!</h5>
            </div>
            <div class="modal-body">
                <p>Parece que no tienes la edad suficiente para entrar a este sitio. ¿Sabías que...?</p>
                <ul>
                    <li class="mb-2">Tu cerebro aún está en desarrollo, y el cannabis puede afectar negativamente su crecimiento.</li>
                    <li class="mb-2">Fumar cannabis puede dañar tus pulmones y aumentar el riesgo de problemas respiratorios en el futuro.</li>
                    <li class="mb-2">El cannabis puede afectar tu memoria, concentración y aprendizaje.</li>
                    <li class="mb-2">Consumir cannabis puede aumentar tu riesgo de sufrir problemas de salud mental, como ansiedad y depresión.</li>
                </ul>
                <p>¡No te arriesgues!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnAceptarMenores">Sí, soy mayor de edad</button>
                <button type="button" class="btn btn-secondary" id="btnSalirSitio">Salir del sitio</button>
            </div>
        </div>
    </div>
</div>
    
@endif


