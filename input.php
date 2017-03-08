<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#status" aria-controls="status" role="tab" data-toggle="tab">Share an update</a></li>
    <li role="presentation"><a href="#job" aria-controls="job" role="tab" data-toggle="tab">Post a job</a></li>
    <li role="presentation"><a href="#link" aria-controls="link" role="tab" data-toggle="tab">Share a job URL</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="status"><?php include 'status.php'; ?></div>
    <div role="tabpanel" class="tab-pane" id="job"><?php include 'postajob.php'; ?></div>
    <div role="tabpanel" class="tab-pane" id="link"><?php include 'droplink.php'; ?></div>
  </div>

</div>