<?php
    include 'inc/header.php';

    if (isset($_GET['submit_post'])) {
      if (!isset($_GET['title']) || trim($_GET['title']) == '') {
        echo 'fill inputs';
      }else{
        submitPost();
        header('Location:/____/');
        exit;
      }
    }
    if(!$_SESSION['username']){
      header('Location:/____/');
      echo 'You need to log in!';
    }
?>

<script>
    tinymce.init({
      selector:'textarea',
      statusbar: false,
      height: 500,
      width:900,
      plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table paste imagetools wordcount"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tiny.cloud/css/codepen.min.css'
      ],
      images_upload_url: 'postAcceptor.php',
      images_upload_credentials: true,
    });
    </script>

<div class="test_textarea">

  <form class="" method="get">
    <input type="text" name="title" value="" placeholder="Title" require>
    <textarea name="text_msg" rows="5" cols="50" style="width:700px; height:100px;" require></textarea>
    <div class="button">
      <input type="submit" name="submit_post" value="Post">
    </div>
  </form>

</div>

<?php include 'inc/footer.php'; ?>
