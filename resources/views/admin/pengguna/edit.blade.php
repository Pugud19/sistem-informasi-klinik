<?php 
require_once 'models/member.php';
// tangkap url request 
$id = $_REQUEST['id'];
$obj = new Member();
// panggil fungsi detail
$data = $obj->getId($id);

 
if (isset($user)) {
  if ($role != 'Pengguna') {
?>
<div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Edit User</h4>
                  <p class="card-description text-center">
                    Form Edit Paket <?= $data['fullname'] ?>
                  </p>
                  <form action="controllers/memberController.php" method="post">
                  <div class="form-group row">
                    <div class="col">
                      <label>Fullname</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="fullname" value="<?= $data['fullname'] ?>">
                      </div>
                    </div>
                    <div class="col">
                      <label>username</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="username" value="<?= $data['username'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col">
                      <label>email</label>
                      <div id="the-basics">
                        <input class="typeahead" type="email" name="email" value="<?= $data['email'] ?>">
                      </div>
                    </div>
                    <div class="col">
                      <label>Password</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="password" name="password" value="<?= $data['password'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col">
                      <label>Role</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="role" value="<?= $data['role'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                  <button type="submit" name="proses" value="ubah" class="btn btn-primary mr-2">submit</button>
                  <input type="hidden" name="ide" class="form-control mb-30" value="<?= $data['id'] ?>">
                  </div>
                  </form>
                </div>
              </div>
</div>
<?php }} ?>