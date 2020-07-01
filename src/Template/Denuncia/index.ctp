<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Denuncium[]|\Cake\Collection\CollectionInterface $denuncia
 */

?>

<div class="denuncia index large-9 medium-8 columns content">
    <h3 class="text-center"><?= __('Denuncias') ?></h3><hr>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-responsive table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Número de caso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_atencion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Víctima') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Agresor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forma_ingreso_servicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipologia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agresion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('testimonio_denunciante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion_denuncia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parentesco_agresor') ?></th>
                
                <th scope="col" class="actions"><?= __('Acciones:') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($denuncia as $denuncium): ?>
            <tr>
                <td><?= h($denuncium->id) ?></td>
                <td><?= h($denuncium->fecha_atencion) ?></td>
                <td><?= h($denuncium['victima']->nombres.' '.$denuncium['victima']->ap_paterno.' '.$denuncium['victima']->ap_materno) ?></td>
                <td><?= h($denuncium['agresor']->nombres.' '.$denuncium['agresor']->ap_paterno.' '.$denuncium['agresor']->ap_materno) ?></td>
                <td><?= h($denuncium->forma_ingreso_servicio) ?></td>
                <td><?= h($denuncium->tipologia) ?></td>
                <td><?= h($denuncium->agresion) ?></td>
                <td><?= h($denuncium->testimonio_denunciante) ?></td>
                <td><?= h($denuncium->descripcion_denuncia) ?></td>
                <td><?= h($denuncium->parentesco_agresor) ?></td>
                
                
                <td class="actions">
                    <?= $this->Html->link(__('Ver'),['action' => 'view', $denuncium->id],['class'=>'btn btn-primary btn-sm', 'id' => 'btn-view']); 
                    echo $this->Html->link(__('Editar'),['action' => 'edit', $denuncium->id],['class'=>'btn btn-info btn-sm', 'id' => 'btn-edit']) ?>
                  <!--   <?//= $this->Form->postLink(__('Delete'), ['action' => 'delete', $denuncium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $denuncium->id)]) ?> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Inicio')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p class="alert alert-warning"><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} dato(s) de {{count}} en total')]) ?></p>
    </div>
</div>
<script type="text/javascript">
     $('#btn-view, #btn-edit').click(function() {
        $('#processing').modal('show');
        $('div#loading').removeClass('invisible'); 
    })
    
 </script>

   <div class="modal fade" data-backdrop="static" id="processing">
    <div class="modal-dialog">
        <div class="text-center modal-content">
            <span><strong>Procesando...</strong></span><br>
            <?php echo $this->Html->image('loading.gif');?>
        </div>
    </div>
</div>