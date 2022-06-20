
<div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Edit Internet</h4>
                  <p class="card-description text-center">
                    Form Edit Paket <?= $data['paket'] ?>
                  </p>
                  <form action="controllers/internetController.php" method="post">
                  <div class="form-group row">
                    <div class="col">
                      <label>Paket</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="paket" value="<?= $data['paket'] ?>">
                      </div>
                    </div>
                    <div class="col">
                      <label>Kecepatan</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="kecepatan" value="<?= $data['kecepatan'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col">
                      <label>Lama Penggunaan</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="lama_penggunaan" value="<?= $data['lama_penggunaan'] ?>">
                      </div>
                    </div>
                    <div class="col">
                      <label>Harga</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="harga" value="<?= $data['harga'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                  <button type="submit" name="tombol" value="ubah" class="btn btn-primary mr-2">submit</button>
                  <input type="hidden" name="ide" class="form-control mb-30" value="<?= $data['id'] ?>">
                  </div>
                  </form>
                </div>
              </div>
</div>
