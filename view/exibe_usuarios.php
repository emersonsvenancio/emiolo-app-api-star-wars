    <div class="col-md-8" align="center">
    <form id="botoes">
          <a class="btn btn-dark" href="customers/addTarefasResponsaveis.php">
            <i class="fa fa-plus"></i> Atualizar</a>           
          <a class="btn btn-dark" href="customers/controledetarefas_gantt.php">
            <i class="fa fa-refresh"></i> Novo</a>
    </form>
    </div> 
 
    <div class="col-md-8" align="center">
    
      <table id="employee_data" class="table table-striped">  
    
      <thead>  
          <tr>  
            <th width="5%" style="vertical-align:middle; text-align:center; color:white; background-color:#300000; font-size: 12px">Cod_Usuario</th>
            <th width="10%" style="vertical-align:middle; text-align:center; color:white; background-color:#300000; font-size: 12px">Usuario</th>   
            <th width="8%" style="vertical-align:middle; text-align:center; color:white; background-color:#300000; font-size: 12px">Senha</th>    
            <th width="5%" style="vertical-align:middle; text-align:center; color:white; background-color:#300000; font-size: 12px">nivelacesso_id</th> 
            <th width="3%" style="vertical-align:middle; text-align:center; color:white; background-color:#300000; font-size: 12px">Botões</th> 
          </tr>  
      </thead>  
      
               <?php if ($result) : ?>   
               <?php foreach ($result as $row12)  : ?>
      <tr >

        <td class="table-text-right tooltip-enable-mandatory" data-toggle="tooltip" data-container="#lista_lancamentos" contenteditable="true" onBlur="saveToDatabase(this,'Cod_Usuario','<?php echo $row12['Cod_Usuario']; ?>')" onClick="showEdit(this);" style="vertical-align:middle; text-align:center; color:white; background-color:#080000; font-size: 12px" ><?php echo $row12['Cod_Usuario']; ?></td>
        <td class="table-text-right tooltip-enable-mandatory" data-toggle="tooltip" data-container="#lista_lancamentos" contenteditable="true" onBlur="saveToDatabase(this,'Usuario','<?php echo $row12['Cod_Usuario']; ?>')" onClick="showEdit(this);" data-placement="bottom" data-html="true" onmouseenter="tooltipEnterEvent($(this))" onmouseleave="tooltipLeaveEvent($(this))" style="vertical-align:middle; text-align:center; font-size: 12px"><?php echo $row12['Usuario']; ?>
        </td>  
        <td class="normal" data-toggle="tooltip" data-container="#lista_lancamentos" contenteditable="true" onBlur="saveToDatabase(this,'Senha','<?php echo $row12['Cod_Usuario']; ?>');window.id = this.id; update();" onClick="showEdit(this);" placement="bottom" data-html="true" onmouseenter="tooltipEnterEvent($(this))" onmouseleave="tooltipLeaveEvent($(this))" style="vertical-align:middle; text-align:center; font-size: 12px"><?php echo $row12['Senha']; ?>
        </td>       
        <td class="table-text-right tooltip-enable-mandatory" data-toggle="tooltip" data-container="#lista_lancamentos" contenteditable="true" onBlur="saveToDatabase(this,'nivelacesso_id','<?php echo $row12['Cod_Usuario']; ?>');window.id = this.id;update();" onClick="showEdit(this);" data-original-title="<?php echo $row12['observacao_3']; ?>" title="<?php echo $row12['observacao_3']; ?>" data-placement="bottom" data-html="true" onmouseenter="tooltipEnterEvent($(this))" onmouseleave="tooltipLeaveEvent($(this))" style="vertical-align:middle; text-align:center; font-size: 12px"><?php echo $row12['nivelacesso_id']; ?></td>       
        
        <td class="actions text-right" style="text-align:middle; vertical-align:middle">  
      
      <form id="menu" action="delete_tarefa_gantt.php?id=<?php echo $row12['Cod_Usuario']; ?>" method="POST">
        
        <a href="customers/editTarefasPostgres.php?id=<?php echo $row12['Cod_Usuario']; ?>" id="<?php echo $row12['Cod_Usuario']; ?>" onclick=" window.id = this.id; document.location.href = 'customers/editTarefasPostgres.php?id=' + id + #conteudo;"><img src="customers/img/ico-editar.png" width="14" height="14" alt="Editar"></a>
        
        <a href="customers/delete_tarefa_gantt.php?id=<?php echo $row12['Cod_Usuario']; ?>" data-toggle="modal"><img src="customers/img/ico-excluir.png" width="14" height="14" alt="Excluir"></a>

         </form>
      </td>
    </tr>
 </div>

                
    <?php endforeach; ?>
    <?php else : ?>     
      <tr>        
        <td colspan="6">Nenhum registro encontrado.</td>      
      </tr>   
    <?php endif; ?> 
 </table>

<script>
    function showEdit(editableObj) {
      //$(editableObj).css("background","#FFF");
    } 
    
    function saveToDatabase(editableObj,column,id) {
      //$(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
      $.ajax({
        url: "../model/database_edit_usuarios.php",
        type: "POST",
        data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
        success: function(data){
        window.location.href = 'usuarios.php';

        }        
       });
    }

</script>