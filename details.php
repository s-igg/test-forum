<?php
include 'inc/header.php';

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    $query = "SELECT * FROM posts WHERE id='$id'";
    $result = mysqli_query($conn, $query) or die ($query);

    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['button'])){
  if (!isset($_POST['comment']) ||  !isset($_SESSION['username'])) {
    echo "plz log in first!";
  }elseif (trim($_POST['comment'])=='') {
    echo "plz write message first!";
  }else {
    AddCommentToDB();
  }
}

if (isset($_POST['replyy'])) {
  if (!isset($_POST['reply_text']) ||  !isset($_SESSION['username'])) {
    echo "plz log in first!";
  }elseif (trim($_POST['reply_text'])=='') {
    echo "plz write message first!";
  }else {
    AddReplyToDB();
  }
}
?>
<div class="title">
  <h1><?php echo $row['title']; ?></h1>
</div>
<div class="content" >
  <p><?php echo $row['post_content']; ?></p>
</div>

<div class='comment_form_class'>
  <form class="" action="" id="frm-comm" method="post">
    <textarea name="comment" id="texta" cols="30" rows="10" style='width:500px;'></textarea>
    <button type="submit" id='submitComm' name="button">Test</button>
  </form>
</div>

<h3>---------------------------------------------------------------------------------------------------</h3>

<div class='comment_class'>
  <?php comment_tree(); ?>
</div>

<?php include 'inc/footer.php' ?>