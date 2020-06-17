<?php //application/views/pics/index.php

$this->load->view($this->config->item('theme') . 'header');

?>
<body>
    <br>
        <input id="txt"/>
        <input type="button" value="search" onclick="sub()">
    </body>
    <script>
            function sub(){
                var content = document.getElementById("txt")
                window.open("pics/"+content.value)
            }
    </script>
    <br>
    <br>
    <h3><?php echo $tag1; ?></h3>
    <a href="<?php echo site_url('pics/'.$tag1); ?>">View photos</a>
    <h3><?php echo $tag2; ?></h3>
    <a href="<?php echo site_url('pics/'.$tag2); ?>">View photos</a>
    <h3><?php echo $tag3; ?></h3>
    <a href="<?php echo site_url('pics/'.$tag3); ?>">View photos</a>
 
</body>

<? 

$this->load->view($this->config->item('theme') . 'footer');

?>


