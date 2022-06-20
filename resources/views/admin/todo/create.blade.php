
<div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Internet</h4>
                  <p class="card-description text-center">
                    Form untuk data internet
                  </p>
                  <form action="controllers/todoController.php" method="post">
                  <div class="form-group row">
                    <div class="col">
                      <label>Nama Jadwal</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="text" placeholder="Jadwal yang akan dilaksanankan">
                      </div>
                    </div>
                    <div class="col">
                      <label>Tanggal Jadwal</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="date" name="tanggal" placeholder="Tanggal jadwal">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                  <button type="submit" name="tombol" value="simpan" class="btn btn-primary mr-2">submit</button>
                  </div>
                  </form>
                </div>
              </div>
</div>
