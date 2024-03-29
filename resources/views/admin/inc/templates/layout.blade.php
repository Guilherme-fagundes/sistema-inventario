<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url(mix('bootstrap/css/bootstrap.css')) }}"/>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ url(mix('bootstrap/js/bootstrap.js')) }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <link rel="stylesheet" href="{{ url(mix('admin/css/style.css')) }}"/>
    <link rel="stylesheet" href="{{ url('admin/icomoon/style.css') }}"/>
</head>
<body>

  <section class="sessLayout container-fluid">
    <div class="sessLayoutContent">
        <div class="row">

            <div class="col-1 position-fixed h-100 leftSiderBar">

                <div class="leftDash">
                    <div class="leftDashHeader">
                        <img src="{{ url('storage/imagens/logo2.png') }}" width="90"/>
                    </div>
                    <div class="leftDashContent">
                        <ul class="menuLeftDash">
                            <li class="menuLeftDashItem">
                                <a href="{{ route('admin.home') }}" class="d-block text-center">
                                    <span class="icon icon-home"></span><br>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="menuLeftDashItem">
                                <a href="{{ route('admin.user.profile') }}" class="d-block text-center">
                                    <span class="icon icon-profile"></span><br>
                                    <span>Perfil</span>
                                </a>
                            </li>
                            <li class="menuLeftDashItem">
                                <a href="{{ route('admin.product.index') }}" class="d-block text-center">
                                    <span class="icon-price-tags"></span><br>
                                    <span>Produtos</span>

                                </a>
                            </li>
                        </ul>

                    </div>


                </div>

            </div>

            <div class="col-11 offset-1 dashHeaderBar">
                <div class="dashHeaderBarContent">
                    <span class="icon-menu text-white"></span>
                    <div class="dashHeaderBarNav">
                        <a href="#" class="btn btn-success btn-sm rounded-0 text-white"><span class="icon-exit"></span> sair</a>

                    </div>
                </div>

            </div>

            <div class="col-11 offset-1 main">
                @yield('main')

            </div>

        </div>

    </div>

  </section>

<script src="{{ url(mix('admin/js/jmask.js')) }}"></script>
</body>
</html>
