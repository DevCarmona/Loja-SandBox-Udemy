<?php $this->load->view('restrita/layout/navbar');?>
<?php $this->load->view('restrita/layout/sidebar');?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <!-- add content here -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $titulo; ?></h4>
                  </div>

                  <form name="form_core">
                    <div class="card-body">

                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Nome</label>
                          <input type="text" name="first_name" class="form-control" placeholder="Nome" value="<?php echo (isset($usuario) ? $usuario->first_name : ''); ?>">
                        </div>

                        <div class="form-group col-md-4">
                          <label>Sobrenome</label>
                          <input type="text" name="last_name" class="form-control" placeholder="Sobrenome" value="<?php echo (isset($usuario) ? $usuario->last_name : ''); ?>">
                        </div>

                        <div class="form-group col-md-4">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php echo (isset($usuario) ? $usuario->email : ''); ?>">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Usuario</label>
                          <input type="text" name="username" class="form-control" placeholder="Usuário" value="<?php echo (isset($usuario) ? $usuario->username : '') ?>">
                        </div>

                        <div class="form-group col-md-4">
                          <label>Senha</label>
                          <input type="password" name="password" class="form-control" placeholder="Senha">
                        </div>

                        <div class="form-group col-md-4">
                          <label>Confirma</label>
                          <input type="password" name="confirma" class="form-control" placeholder="Confirmação da senha">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputState">Ativo</label>
                          <select id="inputState" class="form-control" name="active">

                          <?php if(isset($usuario)): ?>
                            <option value="1" <?php echo ($usuario->active == 1 ? 'selected' : ''); ?>>Sim</option>
                            <option value="0" <?php echo ($usuario->active == 0 ? 'selected' : ''); ?>>Não</option>

                          <?php else: ?>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>

                          <?php endif;?>

                          </select>
                        </div>

                        <div class="form-group col-md-4">
                          <label>Perfil de acesso</label>
                          <select class="form-control" name="perfil">

                            <?php foreach($grupos as $grupo): ?>

                              <?php if(isset($usuario)): ?>
                                <option value="<?php echo ($grupo->id); ?>" <?php echo ($grupo->id == $perfil->id ? 'selected' : ''); ?>><?php echo ($grupo->name); ?></option>
                                <?php else: ?>
                                  <option value="<?php echo ($grupo->id); ?>"><?php echo ($grupo->name); ?></option>
                              <?php endif; ?>


                            <?php endforeach; ?>


                          </select>
                        </div>
                      </div>

                    </div>

                    <div class="card-footer">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form> 

                </div>
              </div>
            </div>
        </div>
    </section>    
        <?php $this->load->view('restrita/layout/sidebar_settings');?>
</div>