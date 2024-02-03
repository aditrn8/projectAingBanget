<div class="page-wrapper">
    <div class="container-fluid">
        <a href="<?= site_url('dashboard'); ?>" class="btn btn-danger"><span class="fa fa-arrow-left"></span> Back</a>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        Data Pending Cuti Validator 2
                    </div>
                    <div class="panel-body">
                        <!-- <div class="table-responsive"> -->
                        <table id="dtb" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Unit</th>
                                    <th>Posisi</th>
                                    <th>Tgl Cuti</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data_total->result() as $d) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $d->Name; ?></td>
                                        <td><?= $d->Unit; ?></td>
                                        <td><?= $d->Position; ?></td>
                                        <td><?= $d->Created_date; ?></td>
                                        <td><span class="badge badge-warning">Waiting Approval</span></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#dtb').DataTable({
            paging: true,
            // scrollX: true,
            // lengthChange: true,
            searching: true,
            ordering: true
        });
    })
</script>