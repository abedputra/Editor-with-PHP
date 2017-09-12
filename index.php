<?php
include once "header.php";
?>
<div class="container">
        <div class="page-header">
            <h1>Editor <small>for PHP</small></h1>
        </div>
        <h3>For file: <a href="http://abedputra.com/<?php echo $file; ?>" target="_blank"><?php echo $file; ?></a>
        </h3>
        <!-- HTML form -->
        <form action="" method="post" class="form-group">
            <div class="form-group">
                <textarea name="text" id="editor"  rows="20" class="form-control"><?php echo htmlspecialchars($text) ?></textarea>
            </div>
            <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Save"/>
              </div>
        </form>
<?php
include once "footer.php";
?>
