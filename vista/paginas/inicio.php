<div class="container mt-5">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <!-- Formulario de selección por fecha -->
        <div class="col-md-6">
          <h3>Filtrar Por Fecha</h3>
          <form method="get" action="index.php">
            <input type="hidden" name="pagina" value="por_fecha">
            <div class="form-group">
              <label for="fechaInicio">Fecha de Inicio:</label>
              <input type="date" class="form-control" id="fechaInicio" name="fechaInicio">
            </div>
            <div class="form-group">
              <label for="fechaFin">Fecha de Fin:</label>
              <input type="date" class="form-control" id="fechaFin" name="fechaFin">
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
          </form>
        </div>
        <!-- Formulario de selección por categoría -->
        <div class="col-md-6">
          <h3>Filtrar Por Categoría</h3>
          <form method="get" action="index.php">
            <input type="hidden" name="pagina" value="por_categoria">
            <div class="form-group">
              <label for="categoria">Categoría:</label>
              <select class="form-control" id="categoria" name="categoria">
                <option value="comida">Comida</option>
                <option value="transporte">Transporte</option>
                <option value="entretenimiento">Entretenimiento</option>
                <!-- Agrega más opciones de categoría según tus necesidades -->
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="container mt-5">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>pesos</th>
        <th>fecha</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Nafta</td>
        <td>$ 5000,00</td>
        <td>3/09/2023</td>
        <td>
          <div class="btn-group">
            <a href="index.php?pagina=editar" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
            <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
          </div>
        </td>

      </tr>
      <tr>
        <td>2</td>
        <td>Seguro</td>
        <td>$ 7450,00</td>
        <td>10/09/2023</td>
        <td>
          <div class="btn-group">
            <a href="index.php?pagina=editar" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
            <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
          </div>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Internet</td>
        <td>$ 4.000,00</td>
        <td>5/09/2023</td>
        <td>
          <div class="btn-group">
            <a href="index.php?pagina=editar" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
            <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
          </div>
        </td>
      </tr>

      <tr>
        <td colspan="3" align="right"><strong>Total Gastos:</strong></td>
        <td>16.450,00</td>
      </tr>
    </tbody>
  </table>
</div>