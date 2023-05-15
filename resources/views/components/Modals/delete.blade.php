@props(['title'=>$title]);

<div class="modal fade-in" tabindex="-1" role="dialog" id="DeleteConfirmation">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Delete {{ $title }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" class="formDelete">
            @csrf
            @method('DELETE')
            <p>Are you sure you want to delete this?</p>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Yes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>