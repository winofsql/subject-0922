<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>スニペットテスト</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<style>
.left {
    width: 100px;
}
.right {
    width: 300px;
}
.entry {
    display: inline-block;
    margin-bottom: 20px;
}    
</style>
<script>
// ******************************
// jQuery onload イベント
// ******************************
$(function(){

    $("#frm").on( "submit", function(event) {

        if ( false ) {
            event.preventDefault();
            return;
        }

        if ( !confirm("更新してもよろしいですか?") ) {
            event.preventDefault();
            return;
        }

    });

});

</script>
</head>
<body>
<h3 class="alert alert-primary">スニペットテスト</h3>
<div id="message" class="ms-3 mb-3"></div>
<div id="content" class="p-4">

    <form id="frm" method="post">
        <section class="mt-2">
            <input type="submit" name="send" id="send" value="更新" class="btn btn-primary">
        </section>
    </form>

    <div class="table-responsive">
    <table class="table table-hover">
    <?= $html ?>
    </table>

</div>
</body>
</html>