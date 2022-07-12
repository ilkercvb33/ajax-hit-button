<?php require 'mysql.php';
/*
 * if (isset($_POST['submit'])){
    $id = 1;
    $hit = $db->prepare("UPDATE tablom SET hit = hit +1 WHERE id='".$id ."' ");
    $hit->execute(array($id));
}*/
?>

<script src="jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.map"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.map"></script>
<script src="https://blog.jquery.com/2021/03/02/jquery-3-6-0-released/"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<center>
        <button type="submit" class="ajax_btn" id="ajax_btn">A B C D</button>

</center>
<script>
    $(document).ready(function(){
        $(".ajax_btn").click(function(){
            $.ajax({url: "update.php", success: function(result){
                    console.log(result);
                }});
        });
    });
</script>