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
                  <div class="card-header d-block">
                    <h4><?php echo $titulo; ?></h4>
                    <a href="<?php echo base_url('restrita/marcas/core') ?>" class="btn btn-primary float-right">Cadastrar</a>
                  </div>
                  <div class="card-body">

                  
                    <!-- Mensagem de sucesso -->
                    <!-- <?php if($message = $this->session->flashdata('sucesso')): ?>
                      <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="fa fa-check-circle fa-lg"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Perfeito!</div>
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <?php echo $message; ?>
                        </div>
                      </div>                    
                    <?php endif;?> -->

                    <!-- Mensagem de erro -->
                    <!-- <?php if($message = $this->session->flashdata('erro')): ?>
                      <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="fa fa-exclamation-circle fa-lg"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Atenção!</div>
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <?php echo $message; ?>
                        </div>
                      </div>                    
                    <?php endif;?> -->
                    

                    <div class="table-responsive">
                      <table class="table table-striped data-table">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th>Nome da marca</th>
                            <th>Meta link da marca</th>
                            <th>Data de criação</th>
                            <th>Situação</th>
                            <th class="nosort">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($marcas as $marca): ?>
                            <tr>
                                <td><?php echo $marca->marca_id; ?></td>
                                <td><?php echo $marca->marca_nome; ?></td>
                                <td><i data-feather="link-2" class="text-info"></i>&nbsp;<?php echo $marca->marca_meta_link; ?></td>
                                <td><?php echo formata_data_banco_sem_hora($marca->marca_data_criacao); ?></td>
                                <td><?php echo ($marca->marca_ativa == 1 ? '<span class="badge badge-success">Ativo</span>' : '<span class="badge badge-danger">Inativo</span>'); ?></td>                            
                            
                              <td>
                                <a href="<?php echo base_url('restrita/marcas/core/'.$marca->marca_id);?>" class="btn btn-primary btn-icon"><i class= "far fa-edit"></i></a>
                                <a href="<?php echo base_url('restrita/marcas/delete/'.$marca->marca_id); ?>" class="btn btn-danger delete" data-confirm="Tem certeza da exclusão ?"><i class= "fas fa-times"></i></a>
                              </td>                              
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>    
        <?php $this->load->view('restrita/layout/sidebar_settings');?>
</div>