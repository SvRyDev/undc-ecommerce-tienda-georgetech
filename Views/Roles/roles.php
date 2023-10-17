<?php
headerAdmin($data);
navAdmin($data);
getModal('modals_roles', $data);
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-person-bounding-box"></i>
                <?php echo $data['page_title'] ?>
                <button class="btn btn-primary" type="button" onclick="openModal();"><i
                        class="bi bi-plus-circle"></i>Nuevo</button>
            </h1>
            <p>Gestion de Usuarios</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>roles"><?= $data['page_title'] ?></a></li>
        </ul>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableRoles">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

<?php
footerAdmin($data);
?>