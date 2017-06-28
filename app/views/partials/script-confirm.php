<script>
function confirmDelete() {
    var r = confirm("Are you sure you want to delete all records?");
    if (r == true) {
    	window.location.href = '/deleteall'; 
    } else {
    	window.location.href = '/view'; 
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>