    <div class="main-content col-lg-2"></div>
    <div class="main-content col-lg-8">
        <section class="section">
        <div class="section-header">
            <h1>Change Phone</h1>
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="<?= base_url() ?>Admin/ephone">E-Phone</a></div>
            <div class="breadcrumb-item active">Change Phone</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                <h4>Change Phone</h4>
                </div>
                <div class="card-body">
                    <?php foreach ($ephone as $value) : ?>
                    <form method="post" action="<?= base_url('Admin/ChangeDbPhone');  ?>/<?= $value['ID']; ?>">
                        <div class="form-group">
                            <label>Name</label>
                            <input value="<?= $value['Name'] ?>" type="text" id="name" name="name" class="form-control" placeholder="Insert your name here" required>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                            <label>Position</label>
                            <select value="<?= $value['Position'] ?>" class="form-control select2" id="position" name="position" required>
                                <option value="0">IT Staff</option>
                                <option value="1">IT Manager</option>
                                <option value="2">IT Director</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ext.</label>
                            <select value="<?= $value['Ext'] ?>" class="form-control select2" id="ext" name="ext" required>
                                <option value="0">1st Floor</option>
                                <option value="1">2nd Floor</option>
                                <option value="2">3rd Floor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone No.</label>
                            <input value="<?= $value['PhoneNo'] ?>" type="text" id="phone" name="phone" class="form-control" placeholder="08923xxxx" required>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-success" style="padding: 5px 50px;">Change Now</button>
                        </div>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        </section>
    </div>
    <div class="main-content col-lg-2"></div>