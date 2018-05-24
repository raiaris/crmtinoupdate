<div class="modal fade in" id="modal-detalhes" style="display: none; padding-right: 15px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="tituloChamado"></h4>
        <span class="pull-right" id="statusChamado"></span>
        <p>Responsável: João da Silva</p>
      </div>
      <div class="modal-body">
        <h4>Descrição:</h4>
        <p id="descChamado"></p>
        <i class="fa fa-arrow-up"> <span id="upvotesChamado"></span></i>
        <div class="comentarios">
          <div class="direct-chat-msg">
            <div class="direct-chat-info clearfix">
              <span class="direct-chat-name pull-left">Gilson Souza</span>
              <span class="direct-chat-timestamp pull-right">23 Jun 14:00</span>
            </div>
            <img class="direct-chat-img" src="dist/img/avatar.png" alt="message user image">
            <div class="direct-chat-text">
              Isso é um comentário!
            </div>
          </div>
          <div class="direct-chat-msg right">
            <div class="direct-chat-info clearfix">
              <span class="direct-chat-name pull-right">Simone Ferreira</span>
              <span class="direct-chat-timestamp pull-left">24 Jun 16:05</span>
            </div>
            <img class="direct-chat-img" src="dist/img/avatar2.png" alt="message user image">
            <div class="direct-chat-text">
              Isso também é um comentário!
            </div>
          </div>
          <form action="#" method="post">
            <div>
              <textarea type="text" name="message" placeholder="Inserir comentário ..." class="form-control"></textarea>
            </div>
              
            <div class="custom-select" >
                <label>Status</label>
                <select class="form-control select2" id="selectStatus" style="width: 50%;">
                  <option selected="selected">Selecione</option>
                  <option value="1">Aberto</option>
                  <option value="2">Em andamento</option>
                  <option value="3">Em andamento (tercerizado)</option>
                  <option value="4">Aguardando aluno</option>
                  <option value="5">Fechado</option> 
                </select>
                <input id="statusButton" type="button" style="margin-top: -7%;" class="btn btn-default pull-right" value="Alterar e Concluir">
              </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>