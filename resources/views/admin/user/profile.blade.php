@extends('admin.inc.templates.layout')

@section('main')
<section class="sessProfile">
    <div class="py-2 profile-header">
        <h3><span class="icon-profile"></span> Meu perfil</h3>

    </div>

    <div class="profile-content">

        <div class="dadosPerfil">
            <p class="dadosperfilTitle">Meus dados</p>

            <form class="formEditMyProfile">
                <div class="mb-3">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control" />

                        </div>
                        <div class="col">
                            <label class="form-label">Sobrenome</label>
                            <input type="text" name="lastname" class="form-control" />

                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label">E-mail</label>
                            <input type="text" name="email" class="form-control" />

                        </div>

                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success"><span class="icon-plus"></span> salvar meus dados</button>

                </div>
            </form>


        </div>

        <div class="alteraSenhaPerfil">
            <p class="alteraSenhaPerfilTitle">Alterar minha senha</p>

            <form class="formEditMyPass">
                <div class="mb-3">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Senha</label>
                            <input type="password" name="pass" class="form-control" />

                        </div>
                        <div class="col">
                            <label class="form-label">Confirmar senha</label>
                            <input type="password" name="cPass" class="form-control" />

                        </div>

                    </div>

                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success"><span class="icon-plus"></span> Alterar senha</button>

                </div>
            </form>


        </div>
    </div>
</section>
@endsection
