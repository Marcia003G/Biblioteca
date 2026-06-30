<div class="container-fluid">

    <div class="card card-danger">

        <div class="card-header">
            <h3 class="card-title">
                <i class="bi bi-arrow-return-left"></i>
                Registro de Devoluciones
            </h3>
        </div>

        <form>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <label>Usuario</label>
                        <input type="text" class="form-control" placeholder="Nombre del usuario">
                    </div>

                    <div class="col-md-6">
                        <label>Libro</label>
                        <input type="text" class="form-control" placeholder="Título del libro">
                    </div>

                </div>

                <br>

                <div class="row">

                    <div class="col-md-6">
                        <label>Fecha de devolución</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label>Estado del libro</label>

                        <select class="form-control">

                            <option>Buen estado</option>
                            <option>Con daños</option>
                            <option>Extraviado</option>

                        </select>

                    </div>

                </div>

            </div>

            <div class="card-footer">

                <button class="btn btn-danger">
                    Registrar Devolución
                </button>

            </div>

        </form>

    </div>

</div>