<form class="form-horizontal" action="<?php echo base_url(); ?>Action_berita/inputdataberita" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Judul Berita</label>
                      <div class="col-sm-10">
                        <input id="jdl-berita" name="berita-name" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">slug berita</label>
                      <div class="col-sm-10">
                        <input id="slg-berita" name="slug-name" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Thumbnail (.jpg .mp4 .png)</label>
                      <div class="col-sm-10">
				            <input name="myFile" class="file" type="file">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kategori Berita (pake select)</label>
                      <div class="col-sm-10">
                        <select id="ktgr" name="kategoris" class="form-control select2" data-placeholder="Select a Kategory" style="width: 100%">
                          <option>Politik</option>
                          <option>Budaya</option>
                          <option>Hukum</option>
                          <option>Kesehatan</option>
                          <option>Kriminal</option>
                          <option>Lifestyle</option>
                          <option>Olahraga</option>
                          <option>Pemerintah</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Author</label>
                      <div class="col-sm-10">
                        <input id="auth" name="berita-author" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Konten Berita</label>
                      <div class="col-sm-10">
                        <textarea id="goreadme" name="kontens" class="textarea" placeholder="Place some text here"></textarea>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button id="clear-form" type="submit" class="btn btn-secondary">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>