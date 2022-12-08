<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="row">              

                <div class="col-lg-4 col-12">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $total_fasilitas ?></h3>
                            <p>Peminjaman Fasilitas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-luggage-cart"></i>
                        </div>
                        <a href="<?= base_url('fasilitas')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-12">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $total_warga ?></h3>
                            <p>Jumlah Warga</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-user"></i>
                        </div>
                        <a href="<?= base_url('warga')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-12">

                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?php echo $total_rumah ?></h3>
                            <p>Jumlah Marking Daerah</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-globe"></i>
                        </div>
                        <a href="<?= base_url('rumah')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>


            <div class="row">

                <section class="col-lg-7 connectedSortable">

                    <div class="card scroll">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="far fa-newspaper"></i>
                                News
                            </h3>
                        </div>

                        <div class="card-body scroll">
                            <?php foreach ($news as $news_item) : ?>

                                <article>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4>
                                                <a href="<?= site_url("news/detail/" . $news_item['slug']) ?>">
                                                    <?= $news_item['title']; ?></a>
                                            </h4>
                                            <p class="d-inline-block text-truncate" style="max-width: 85%"><?= $news_item['body']; ?></p>
                                        </div>
                                    </div>
                                </article>

                            <?php endforeach ?>
                        </div>

                        <div class="card-footer clearfix">
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Add news </button>
                        </div>
                    </div>

                </section>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Create News</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= base_url() . 'news/create' ?>">
                                    <div class="form-group">
                                        <label for="title"> Title </label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="title...">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea name="body" class="form-control" id="body" placeholder="body..." rows="3"></textarea>
                                    </div>

                                    <button type="reset" class="btn btn-danger" data-dismiss="modal" onclick="clearInputFields()">Reset</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="col-lg-5 connectedSortable">

                    <div class="card bg-gradient-success">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="far fa-calendar-alt"></i>
                                Calendar
                            </h3>

                            <div class="card-tools">

                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a href="#" class="dropdown-item">Add new event</a>
                                        <a href="#" class="dropdown-item">Clear events</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">View calendar</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body pt-0">

                            <div id="calendar" style="width: 100%"></div>
                        </div>

                    </div>

                </section>

            </div>

        </div>
    </section>

</div>

</body>

</html>