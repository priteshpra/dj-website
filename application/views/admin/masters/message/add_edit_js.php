<script>
     $(document).ready(function () {
      <?php if($page_name == 'add'){?>
         setTimeout(function(){ $('.select2_class .select-dropdown').first().click(); }, 1100);
        <?php
       }?>
    <?php
    if (isset($this->session->userdata['posterror'])) {
        echo "setTimeout(function(){ alertify.error('" . $this->session->userdata['posterror'] . " ')}, 2000);";
    }?>
    <?php if (isset($this->session->userdata['postsuccess'])) {
     echo "setTimeout(function(){ alertify.success('" . $this->session->userdata['postsuccess'] . " ')}, 2000);"; } 
    ?>
            });

/*Function For Buutoon click event */

    $('#button_message_submit').on('click', function ()
    {
        var field_ids = ['Language'];
        var combo_box_error = checkComboBox(field_ids);
        var error = checkValidations();
        if (error === 'yes' || combo_box_error === 'yes')
        {
            alertify.error("<?php echo label('required_field'); ?>");
            return false;
        }
        else
        {
            $('#button_message_submit').addClass('hide');
            $('#button_submit_loading').removeClass('hide');
            alertify.success("Please wait....");
            $('form').submit();
        }
    });
     $(document).keypress(function (e) {
        if (e.which == 13) {
            $("#button_message_submit").click();
            return false;
        }
    });
    //End
</script>