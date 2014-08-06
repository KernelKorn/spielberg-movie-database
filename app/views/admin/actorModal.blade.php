

<!-- Modal -->
<div class="modal fade" data-backdrop="static" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> -->
        <h4 class="modal-title" id="myModalLabel">{{ $Actor->name }}</h4>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>Movie</th>
              <th>Character</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Actor->movies as $movie )
              <tr>
                <td>{{ $movie->name }}</td>
                <td>{{ $movie->pivot->character_name }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btnCancel btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>