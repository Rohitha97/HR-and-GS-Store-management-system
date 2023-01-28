<main class="flex-shrink-0">
    <div class="container m">
        <?php echo $this->session->flashdata('invalid'); ?>
        <div class="text-center mt-1 align-middle">
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ADD NEW EMPLOYEE
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Emplyee Registration</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('employee/store'); ?>" method="POST">
                                <div class="modal-body">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="epfno" class="form-control" required>
                                        <label for="floatingInput">EPF Number</label>
                                        <small><?php echo form_error('epfno') ?></small>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" name="sapno" class="form-control" required>
                                        <label for="floatingInput">Sap Number</label>
                                        <small><?php echo form_error('sapno') ?></small>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" name="nicno" class="form-control" required>
                                        <label for="floatingInput">Nic Number</label>
                                        <small><?php echo form_error('nicno') ?></small>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" name="fname" class="form-control" required>
                                        <label for="floatingInput">Full Name</label>
                                        <small><?php echo form_error('fname') ?></small>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" name="depart" class="form-control" required>
                                        <label for="floatingInput">Department</label>
                                        <small><?php echo form_error('depart') ?></small>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="empadd" class="btn btn-primary">Save EMPLOYEE</button>
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
                        <th>EPF Number</th>
                        <th>Full Name</th>
                        <th>SPN Number</th>
                        <th>NIC</th>
                        <th>Department</th>
                        <!-- <th></th>
                        <th></th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employee as $row) : ?>
                        <tr>
                            <td><?php echo $row->epfno ?></td>
                            <td><?php echo $row->fname ?></td>
                            <td><?php echo $row->sapno ?></td>
                            <td><?php echo $row->nic ?></td>
                            <td><?php echo $row->depart ?></td>
                            <!-- <td>
                                <a href="<?= base_url('safteyshoes/edit/' . $row->epfno); ?>" class="btn btn-success btn-sm">Edit Details</a>
                            </td> -->
                            <!-- <td>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteEmp">Delete Employee</button>
                            </td> -->
                        </tr>
                        <!-- Modal
                        <div class="modal fade" id="deleteEmp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="<?= base_url('employee/delete/' . $row->epfno); ?>" class="btn btn-danger">Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</main>