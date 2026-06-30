<div class="container-fluid">

    <div class="card card-danger">

        <div class="card-header">
            <h3 class="card-title"><i class="bi bi-journal-bookmark-fill"></i></i>
                Categorías de Libros
            </h3>
        </div>

        <form>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <label>Nombre de la Categoría</label>
                        <input type="text" class="form-control" placeholder="Ej. Novela">
                    </div>

                    <div class="col-md-6">
                        <label>Descripción</label>
                        <input type="text" class="form-control" placeholder="Descripción de la categoría">
                    </div>

                </div>

                <br>

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>
                            <th>ID</th>
                            <th>Categoría</th>
                            <th>Descripción</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Novela</td>
                            <td>Libros narrativos de ficción.</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Ciencia</td>
                            <td>Libros científicos y tecnológicos.</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Historia</td>
                            <td>Libros históricos.</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Literatura Infantil</td>
                            <td>Libros para niños.</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="card-footer">

                <button class="btn btn-danger">
                    Guardar Categoría
                </button>

            </div>

        </form>

    </div>

</div>