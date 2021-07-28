<?php
helper('date');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GenPI.co Recruitment</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        nav>.nav.nav-tabs {
            border: none;
            color: #fff;
            background: #272e38;
            border-radius: 0
        }

        nav>div a.nav-item.nav-link {
            border: none;
            padding: 18px 25px;
            color: #fff;
            background: #272e38;
            border-radius: 0
        }

        .tab-content {
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid #88c53f;
            border-bottom: 5px solid #88c53f;
            padding: 30px 25px
        }

        nav>div a.nav-item.nav-link:hover,
        nav>div a.nav-item.nav-link:focus,
        nav>div a.nav-item.nav-link.active {
            border: none;
            background: #88c53f;
            color: #fff;
            border-radius: 0;
            transition: background 0.20s linear
        }

        .logo {
            padding: 2em 0;
            text-align: center
        }

        .text-center {
            text-align: center
        }
    </style>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="logo">
                    <img src="https://www.genpi.co/assets/icon/favicon.png" alt="GenPI.co" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-news-tab" data-toggle="tab" href="#nav-news" role="tab" aria-controls="nav-news" aria-selected="true">Latest News</a>
                        <?php if (session()->has('email')) : ?>

                        <?php else : ?>
                            <a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">Registers</a>
                        <?php endif; ?>
                        <a class="nav-item nav-link" id="nav-user-tab" data-toggle="tab" href="#nav-user" role="tab" aria-controls="nav-user" aria-selected="false">List User</a>
                        <?php if (session()->has('email')) : ?>
                            <a class="nav-item nav-link" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="false">Profile</a>
                        <?php else : ?>
                            <a class="nav-item nav-link" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="false">Login</a>
                        <?php endif; ?>

                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-news" role="tabpanel" aria-labelledby="nav-news-tab">
                        <ul class="list-unstyled">
                            <?php
                            foreach ($data->items as $datas) { ?>
                                <li class="media">
                                    <img src="<?php echo $datas->news_image_full ?>" class="mr-3" alt="title" style="width: 200px">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1"><?php echo $datas->news_title ?></h5>
                                        <small class="text-muted"><i class="fa fa-calendar-alt" aria-hidden="true"></i> <?php echo format_indo($datas->news_publish) ?></small>
                                        <p><?php echo $datas->news_teaser ?></p>
                                    </div>
                                </li>
                                <br>
                            <?php } ?>

                            <li class="media">
                                <img src="https://www.genpi.co/timthumb.php?src=https://photo.jpnn.com/arsip/watermark/2020/08/13/jerinx-sid-foto-instagramjrx-92.jpg&w=232&h=150&zc=1&q=80" class="mr-3" alt="title">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                            <li class="media my-4">
                                <img src="https://www.genpi.co/timthumb.php?src=https://photo.jpnn.com/arsip/watermark/2020/08/26/lionel-messi-foto-fcb-72.jpg&w=232&h=150&zc=1&q=80" class="mr-3" alt="title">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                            <li class="media">
                                <img src="https://www.genpi.co/timthumb.php?src=https://photo.jpnn.com/galeri/watermark/2020/02/18/IMG_20200218_122448.jpg&w=232&h=150&zc=1&q=80" class="mr-3" alt="title">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                        <div class="col-sm-6 ofwwwet-3">
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form class="form-signin text-center" method="POST" action="<?= base_url(); ?>/regist" enctype="multipart/form-data">
                                <h1 class=" h3 mb-3 font-weight-normal">Register</h1>
                                <input type="text" class="form-control" placeholder="Nama" name="name" required autofocus>
                                <input type="email" class="form-control" placeholder="Email address" name="email" required autofocus>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                <textarea class="form-control" placeholder="Alamat" name="alamat" required></textarea>
                                <input type="file" class="form-control" placeholder="foto" name="foto" required>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                        <ul class="list-unstyled">
                            <?php
                            foreach ($user as $user) { ?>
                                <li class="media">
                                    <img src="/images/profile/<?php echo $user->foto ?>" class="mr-3" alt="title" style="width:200px">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1"><a href="javascript:;" data-toggle="modal" data-target="#profile" id="details" data-id="<?php echo $user->id ?>" class="details"><?php echo $user->name ?></a></h5>
                                        <p><?php echo $user->alamat ?></p>
                                        <?php if (session()->has('email')) : ?>
                                            <a href="#" class="btn btn-secondary">Following</a>
                                        <?php else : ?>
                                            <a href="/" class="btn btn-secondary">Following</a>
                                        <?php endif; ?>
                                    </div>
                                </li><br>
                            <?php }
                            ?>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                        <div class="row">
                            <div class="col-sm-6 ofwwwet-3">
                                <?php if (session()->has('email')) : ?>
                                    <p class="text-center">
                                        <!-- comment sudah login -->
                                        <img src="/images/profile/<?php echo session()->get('foto') ?>" alt="profile" srcset="" style="width:200px"><br>
                                        Anda sudah login sebagai <?php echo session()->get('name') ?>. <br /> <a href="/logout">Logout</a>
                                    </p>
                                <?php else : ?>
                                    <p class="text-center">
                                        <!-- comment belum login -->
                                        Anda belum login, cek user anda.
                                    </p>
                                    <form class="form-signin text-center" method="POST" action="<?= base_url(); ?>/login">
                                        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                                        <label for="inputEmail" class="sr-only">Email address</label>
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                                        <label for="inputPassword" class="sr-only">Password</label>
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="profile" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <?php if (session()->has('email')) : ?>
                        <div class="media">
                            <img src="#" class="mr-3 foto_view" alt="title" style="width:200px">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="javascript:;" data-toggle="modal" data-target="#profile" class="name_view"></a></h5>
                                <p class="alamat_view">Alamat 3, sCras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.ssssssssssssssss</p>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="media">
                            Maaf anda tidak punya akses, harap follow terlebih dahulu
                        </div>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".details").click(function() {
            var id = $(this).data('id');

            $.ajax({
                method: "GET",
                url: "/details/" + id,
                dataType: 'json',
                success: function(response) {
                    var data = (response);
                    // console.log(data.user[0].name);
                    $('.name_view').text(data.user[0].name);
                    $('.alamat_view').text(data.user[0].alamat);
                    $('.foto_view').attr("src", "/images/profile/" + data.user[0].foto);
                    $('modal').modal('show');
                }
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>

</html>