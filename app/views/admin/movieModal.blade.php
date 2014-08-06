

<!-- Modal -->
<div class="modal fade" data-backdrop="static" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> -->
        <h4 class="modal-title" id="myModalLabel">{{ $Movie->name }}</h4>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>Character</th>
              <th>Actor</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Movie->actors as $actor )
              <tr>
                <td>{{ $actor->pivot->character_name }}</td>
                <td>{{ $actor->name }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <form class="form-inline">
          <div class="form-group">
            <input type='text' class='forms' id='character' placeholder='Character'>
          </div>
          <div class="form-group">
            <input type='text' class='forms' id='actor' placeholder='Actor'>
          </div>
          <button type="button" class="btnAdd" disabled>Add</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btnCancel" data-dismiss="modal">Cancel</button>
        <button type="button" class="btnSave">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<script>
  $('#actor, #character').on('keyup change',function()
  {
    var input = $(this).val();

    if(input==''){
      $('.btnAdd').prop('disabled', true);
    }else{
      $('.btnAdd').prop('disabled', false);
    }

  });
</script>