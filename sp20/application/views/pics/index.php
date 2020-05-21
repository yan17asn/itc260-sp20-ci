<?php //application/views/pics/index.php

$this->load->view($this->config->item('theme') . 'header');

?>
 <body>
        <input id="txt"/>
        <input type="button" value="search" onclick="sub()">
    </body>
    <script>
            function sub(){
                var content = document.getElementById("txt")
                window.open("pics/"+content.value)
            }
    </script>



<p><a href="<?php echo site_url('pics/'.$tag1); ?>"><?php echo $tag1; ?></a></p>
<p><a href="<?php echo site_url('pics/'.$tag2); ?>"><?php echo $tag2; ?></a></p>
<p><a href="<?php echo site_url('pics/'.$tag3); ?>"><?php echo $tag3; ?></a></p>
</body>

<? 

$this->load->view($this->config->item('theme') . 'footer');

?>


