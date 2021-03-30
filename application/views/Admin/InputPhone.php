    <div class="main-content col-lg-2"></div>
    <div class="main-content col-lg-8">
        <section class="section">
        <div class="section-header">
            <h1>Input Phone</h1>
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="<?= base_url() ?>Admin/ephone">E-Phone</a></div>
            <div class="breadcrumb-item active">Input Phone</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                <h4>Input Phone</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('Admin/InsDbPhone') ?>">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Insert your name here" required>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                            <label>Position</label>
                            <select class="form-control select2" id="position" name="position" required>
                                <option value="0">IT Staff</option>
                                <option value="1">IT Manager</option>
                                <option value="2">IT Director</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ext.</label>
                            <select class="form-control select2" id="ext" name="ext" required>
                                <option value="0">1st Floor</option>
                                <option value="1">2nd Floor</option>
                                <option value="2">3rd Floor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="08923xxxx" required>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-success" style="padding: 5px 50px;">Request Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </section>
    </div>
    <div class="main-content col-lg-2"></div>