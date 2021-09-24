<script>
    function refresh(){
        window.location.reload(0);
    }
</script>

<div class="modal-header">
    <button onclick="refresh()" type="button"
            class="close"
            data-dismiss="modal"
            aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel"> <?=$title?> </h4>
</div>

<div class="modal-body">

    <form enctype="multipart/form-data" method="post" >

        <?php $data['imageName']=$imageName; $data['title']=$title; $this->load->view('project_view', $data); ?>

    </form>

</div>

<div class="modal-footer">
   <form action="projects" method="POST">
   <button onclick="refresh()" data-dismiss="modal" class="btn btn-default" name="submit" type="submit">Close</button>
   </form>
</div>