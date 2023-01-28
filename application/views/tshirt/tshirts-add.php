<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tshirt Add</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Add
                            <a href="<?= base_url('tshirt'); ?>" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('tshirt/store'); ?>" method="POST">
                            <div class="mb-3">
                                EPF No: <input readonly class="form-label" value="<?= $epfno[0]['epfno']; ?>"></input> &ensp; &ensp;
                                Name: <input readonly class="form-label" value="<?= $epfno[0]['fname']; ?>"></input> &ensp; &ensp;
                                Sap No: <input readonly class="form-label" value="<?= $epfno[0]['sapno']; ?>"></input>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea2" class="form-label">Quantity</label>
                                <select name="qty" class="form-select mb-3" aria-label="Default select example">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Quantity</label>
                                <input type="text" name="qty" class="form-control" required>
                            </div> -->
                            <div class="form-group d-flex">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Requested Date</label>
                                    <input type="date" name="rdate" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3" style="padding-left:20px">
                                    <label for="exampleFormControlTextarea1" class="form-label">Issue Date</label>
                                    <input type="date" name="idate" class="form-control">
                                </div>
                            </div>
                            <!-- <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Requested Date</label>
                                <input type="date" name="rdate" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Issue Date</label>
                                <input type="date" name="idate" class="form-control">
                            </div> -->
                            <!-- <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Using Days</label>
                                <input type="text" name="udate" class="form-control" required>
                            </div> -->
                            <div class="form-group d-flex">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleFormControlTextarea2" class="form-label">Previous Item Handover Status</label>
                                    <select name="oldh" class="form-select mb-3" aria-label="Default select example">
                                        <option value="Initial Item Transfer">Initial Item Transfer</option>
                                        <option value="Previous Item Transfered">Previous Item Transfered</option>
                                        <option value="Previous Item Not Transfered">Previous Item Not Transfered</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3" style="padding-left:20px">
                                    <label for="exampleFormControlTextarea1" class="form-label">Approval</label>
                                    <select name="appr" class="form-select mb-3" aria-label="Default select example">
                                        <option value="Approved">Approved</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="exampleFormControlTextarea2" class="form-label">Old Item Handover Status</label>
                                <select name="oldh" class="form-select mb-3" aria-label="Default select example">
                                    <option value="">--select--</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Approval</label>
                                <select name="appr" class="form-select mb-3" aria-label="Default select example">
                                    <option value="">--select--</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div> -->
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Special Notes</label>
                                <textarea class="form-control" name="spn" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="tshirt" class="btn btn-primary">Save Product</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>