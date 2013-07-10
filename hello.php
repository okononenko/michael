<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        if(jQuery(".form").val() == "michael") {
            jQuery("#par1").html("Hello, Michael Jackson");
        }
        else {
            jQuery("#par1").html("you are not Michael");
        }
    });
</script>

