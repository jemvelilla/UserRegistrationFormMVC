<?php 
	if (isset($_SESSION['message'])){
?>			
	<div class="alert">
		<?php 
	  		echo $_SESSION['message'];
	  	?>	
		<span class="closebtn" onclick="<?php unset($_SESSION['message']); ?>">&times;</span> 
	</div>		
<?php 
	}
?>
</div>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        
    }
}
</script>