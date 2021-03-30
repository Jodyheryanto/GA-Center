    <div class="main-content col-lg-12">
        <section class="section">
        <div class="section-header">
            <h1>E-Phone</h1>
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">E-Phone</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                <h4>E-Phone Ext.</h4>
                <div class="card-header-form">
                    <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
                <div class="card-body p-0">
                    <?php if($this->session->flashdata('msg')): ?>
                    <div class="alert alert-success alert-dismissible show fade center" style="width: 700px; margin: 20px 300px;">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            <?php echo $this->session->flashdata('msg'); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Position</th>
                                <th class="text-center">Ext.</th>
                                <th class="text-center">Phone No.</th>
                                <th class="text-center">Status</th>
                            </tr>
                            <?php $i = 1 ?>
                            <?php foreach ($ephone as $value) : ?>
                            <tr>
                                <td class="text-center"><?= $i ?></td>
                                <td class="text-center"><?= $value['Name'] ?></td>
                                <td class="text-center">
                                    <?php 
                                        if($value['Position'] === "0"){
                                            echo "IT Staff";
                                        }else if($value['Position'] === "1"){
                                            echo "IT Manager";
                                        }else if($value['Position'] === "2"){
                                            echo "IT Director";
                                        }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php 
                                        if($value['Ext'] === "0"){
                                            echo "1st Floor";
                                        }else if($value['Ext'] === "1"){
                                            echo "2nd Floor";
                                        }else if($value['Ext'] === "2"){
                                            echo "3nd Floor";
                                        }
                                    ?>
                                </td>
                                <td class="text-center"><?= $value['PhoneNo'] ?></td>
                                <td class="text-center">
                                    <?php 
                                        if($value['Status'] === "1"){
                                            echo "<div class='badge badge-success'>Active</div>";
                                        }else{
                                            echo "<div class='badge badge-danger'>Not Active</div>";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        </section>
    </div>