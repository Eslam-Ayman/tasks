<!DOCTYPE html>
<html >

    <head>
        <title>Tasks</title>
        <?php $this->load->view('partial/_links'); ?>



    </head>
    <body style="margin-top:58px">

        <div >

            <?php $this->load->view($nav); ?>
            <?php $this->load->view($content); ?>

        </div>

        <?php $this->load->view('partial/_scripts'); ?>

    </body>
</html>

