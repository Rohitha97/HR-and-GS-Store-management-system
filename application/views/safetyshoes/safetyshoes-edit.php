<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Safetyshoes Edit</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Overall Update
                            <button type="button" class="btn btn-danger float-end" data-bs-toggle="modal" data-bs-target="#Modal2">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('safetyshoes/update/' . $safetyshoes->id); ?>" method="POST">
                            <input type="hidden" name="overall_id" value="<?= $safetyshoes->id ?>">
                            <div class="mb-3">
                                EPF No: <input readonly class="form-label" value="<?= $safetyshoes->epfno; ?>"></input> &ensp; &ensp;
                                Name: <input readonly class="form-label" value="<?= $safetyshoes->fname; ?>"></input> &ensp; &ensp;
                                Sap No: <input readonly class="form-label" value="<?= $safetyshoes->sapno; ?>"></input> &ensp; &ensp;
                                Department: <input readonly class="form-label" value="<?= $safetyshoes->depart; ?>"></input>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea2" class="form-label">Quantity</label>
                                <select name="qty" class="form-select mb-3" aria-label="Default select example">
                                    <option value="<?= $safetyshoes->qty ?>"><?= $safetyshoes->qty ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <!-- <div class="mb-3">
                                <label>Quantity</label>
                                <input type="text" name="qty" value="<?= $safetyshoes->qty ?>" class="form-control">
                            </div> -->
                            <div class="form-group d-flex">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Request Date</label>
                                    <input type="date" name="rdate" value="<?= $safetyshoes->rdate  ?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3" style="padding-left:20px">
                                    <label for="exampleFormControlTextarea1" class="form-label">Issue Date</label>
                                    <input type="date" name="idate" value="<?= $safetyshoes->idate ?>" class="form-control">
                                </div>
                            </div>
                            <!-- <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Request Date</label>
                                <input type="date" name="rdate" value="<?= $safetyshoes->rdate  ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Issue Date</label>
                                <input type="date" name="idate" value="<?= $safetyshoes->idate ?>" class="form-control">
                            </div> -->
                            <!-- <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Using Days</label>
                                <input type="text" name="udate" value="<?= $overall->udate ?>" class="form-control" required>
                            </div> -->
                            <div class="form-group d-flex">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleFormControlTextarea2" class="form-label">Previous Item Handover Status</label>
                                        <select name="oldh" class="form-select mb-3" aria-label="Default select example">
                                            <!-- <option value=""><?= $safetyshoes->oldh ?></option> -->
                                            <option value="<?= $safetyshoes->oldh ?>"><?= $safetyshoes->oldh ?></option>
                                            <option value="Initial Item Transfer">Initial Item Transfer</option>
                                            <option value="Previous Item Transfered">Previous Item Transfered</option>
                                            <option value="Previous Item Not Transfered">Previous Item Not Transfered</option>
                                        </select>
                                </div>
                                <div class="col-md-6 mb-3" style="padding-left:20px">
                                    <label for="exampleFormControlTextarea1" class="form-label">Approval</label>
                                    <select name="appr" class="form-select mb-3" aria-label="Default select example">
                                        <!-- <option value="---"><?= $safetyshoes->appr ?></option> -->
                                        <option value="<?= $safetyshoes->appr ?>"><?= $safetyshoes->appr ?></option>
                                        <option value="Approved">Approved</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="exampleFormControlTextarea2" class="form-label">Old Item Handover Status</label>
                                <select name="oldh" class="form-select mb-3" aria-label="Default select example">
                                    <option value="">---<?= $safetyshoes->oldh ?>---</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Approval</label>
                                <select name="appr" class="form-select mb-3" aria-label="Default select example">
                                    <option value="---">---<?= $safetyshoes->appr ?>---</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div> -->
                            <div class="mb-3">
                                <label for="exampleForm ControlTextarea1" class="form-label">Special Notes</label>
                                <textarea name="spn" class="form-control" value="" id="exampleFormControlTextarea1" rows="3"><?= $safetyshoes->spn ?></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_overall" class="btn btn-primary"> Update</button>
                                <button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#Modal2">Send Email</button>
                            </div>
                        </form>
                        <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabal">Do you want to send an email?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form target="_blank" action="https://formsubmit.co/it.trainee@swisstekaluminium.com method=" POST">
                                        <input type="hidden" name="_next" value="<?= base_url('safetyshoes/email'); ?>">
                                        <!-- <input type="hidden" name="_cc" value="it.trainee@swisstekaluminium.com""> -->
                                        <input type="hidden" name="_captcha" value="false">
                                        <input type="hidden" name="_template" value="table">
                                        <input type="hidden" name="_subject" value="Safetyshoes Approval: EPF No-<?php echo $safetyshoes->epfno ?>">
                                        <input type="text" name="EPF_Number" class="form-control" value="<?php echo $safetyshoes->epfno ?>" style="display:none">
                                        <input type="text" name="Name" class="form-control" value="<?php echo $safetyshoes->fname ?>" style="display:none">
                                        <input type="text" name="Department" class="form-control" value="<?php echo $safetyshoes->depart ?>" style="display:none">
                                        <input type="text" name="SAP_Number" class="form-control" value="<?php echo $safetyshoes->sapno ?>" style="display:none">
                                        <input type="text" name="Quantity" class="form-control" value="<?php echo $safetyshoes->qty ?>" style="display:none">
                                        <input type="text" name="Request_Date" class="form-control" value="<?php echo $safetyshoes->rdate ?>" style="display:none">
                                        <input type="text" name="Issue_Date" class="form-control" value="<?php echo $safetyshoes->idate ?>" style="display:none">
                                        <input type="text" name="Used_Date" class="form-control" value="<?php echo $safetyshoes->udate ?>" style="display:none">
                                        <input type="text" name="Old_Item_Handover" class="form-control" value="<?php echo $safetyshoes->oldh ?>" style="display:none">
                                        <input type="text" name="Approval" class="form-control" value="<?php echo $safetyshoes->appr ?>" style="display:none">
                                        <input type="text" name="Special_Note" class="form-control" value="<?php echo $safetyshoes->spn ?>" style="display:none">
                                        <div class="modal-footer">
                                            <a href="<?= base_url('safetyshoes'); ?>" class="btn btn-danger">No</a>
                                            <button type="submit" class="btn btn-success">Yes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>