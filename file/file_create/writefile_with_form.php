<form action="" method="post"> 

<input type="text" placeholder="Enter File Name " name="fileName"> 
<br><br><br>
<textarea
rows="8"
name="content" id="content" placeholder="Write Your Contant"></textarea>
<br><br><br>

<button>Create Your File </button>
</form>

<?php
if(isset($_POST['fileName'])){
    $fileName = "myFiles/".$_POST['fileName']; 
    $content = $_POST['content'] ; 
    $file = fopen($fileName , 'w') or die("unable to create file") ; 
    fwrite($file , $content) ; 
    echo "File Created" ; 
}
?>