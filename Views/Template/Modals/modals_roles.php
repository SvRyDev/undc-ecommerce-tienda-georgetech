<!-- Modal -->
<div class="modal fade" id="modalFormRol" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">




                <div class="tile">

                    <div class="tile-body">
                        <form id="formRol" name="formRol">
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input class="form-control" type="text" id="txtNombre" name="txtNombre"
                                    placeholder="Enter full name" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Descripcion</label>
                                <textarea class="form-control" rows="4" id="txtDescripcion" name="txtDescripcion"
                                    placeholder="Enter your address" ></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="exampleSelect1">Estado</label>
                                <select class="form-control" id="listStatus" name="listStatus">
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>

                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit">
                                    <i class="bi bi-check-circle-fill me-2"></i>Guardar</button>
                                <a class="btn btn-secondary" data-bs-dismiss="modal"  aria-label="Close"><i
                                        class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
                            </div>

                        </form>
                    </div>


                </div>

            </div>


        </div>
    </div>
</div>