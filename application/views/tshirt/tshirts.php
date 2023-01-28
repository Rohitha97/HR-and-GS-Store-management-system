<main class="flex-shrink-0">
    <div class="container">
        <?php echo $this->session->flashdata('invalid'); ?>
        <?php echo $this->session->flashdata('email'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 id="tableName">Product Details (T-Shirts) </h4>
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#Modal1">Add Product</button>
                        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabal">Enter EPF Number</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('tshirt/add'); ?>" method="POST">
                                            <div class="mb-3">
                                                <input type="text" name="epfno" class="form-control" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="epfadd-tshirt" class="btn btn-primary">ADD</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Epf nu</th>
                                    <th>Name</th>
                                    <th>Sap nu</th>
                                    <th>Qty</th>
                                    <th>Request Date</th>
                                    <th>Issue Date</th>
                                    <th>Using Date</th>
                                    <th>Handover</th>
                                    <th>Approval</th>
                                    <th>Note</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tshirt as $row) : ?>
                                    <tr>
                                        <td><?php echo $row->epfno ?></td>
                                        <td><?php echo $row->fname ?></td>
                                        <td><?php echo $row->sapno ?></td>
                                        <td><?php echo $row->qty ?></td>
                                        <td><?php echo $row->rdate ?></td>
                                        <td><?php echo $row->idate ?></td>
                                        <td><?php echo $row->udate ?></td>
                                        <td><?php echo $row->oldh ?></td>
                                        <td><?php echo $row->appr ?></td>
                                        <td><?php echo $row->spn ?></td>
                                        <td>
                                            <a href="<?= base_url('tshirt/edit/' . $row->id); ?>" title="Edit data & Send Email" class="btn btn-success btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('tshirt/tableupdate/' . $row->id); ?>"  title="Update Used Date" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-wrench"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>