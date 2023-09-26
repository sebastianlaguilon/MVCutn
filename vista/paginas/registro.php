<div class="container mt-5">
   <div class="row">
      <div class="col-md-6 offset-md-3">


         <!-- Agrega un div con clases de borde y estilo de fondo -->
         <div class="border rounded p-3">

            <h1 class="text-center">Ingresos de Gastos</h1>

            <div class="d-flex justify-content-center">
               <form action="" class="p-5 bg-light" method="post">
                  <div class="form-group">
                   <label for="nombre">Nombre:</label>
                     <div class="input-group">

                        <div class="input-group-prepend">
                           <span class="input-group-text" ><i class="fas fa-barcode"></i></span>

                        </div>
                        <input type="text" class="form-control" placeholder="Ingrese Nombre" id="nombre" name="actualizarNombre">
                     </div>
                  </div>
                  <div class="form-group">
                  <label for="nombre">Importe:</label>
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Ingrese el Importe" id="email" name="actualizarEmail">
                     </div>
                  </div>
                  <div class="form-group">
                  <label for="nombre">Seleccionar Categoria:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="categoria"><i class="fas fa-list"></i></label>
                    </div>
                    <select class="custom-select" id="categoria" name="categoria">
                        <option selected>Elija una categoría...</option>
                        <option value="comida">Comida</option>
                        <option value="transporte">Vehiculo LLO125 </option>
                        <option value="entretenimiento">Entretenimiento</option>
                    </select>
                </div>
            </div>

                     <?php

                  

                     ?>

                     <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3">Registrar</button>
                     </div>
               </form>
            </div>


         </div>
      </div>
   </div>
</div>

</html>