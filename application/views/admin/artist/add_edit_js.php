<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#FirstName').focus();
        }, 1100);
        <?php if (isset($this->session->userdata['posterror'])) {
            echo "setTimeout(function(){ alertify.error('" . $this->session->userdata['posterror'] . " ')}, 2000);";
        }
        ?>
        <?php if (isset($this->session->userdata['postsuccess'])) {
            echo "setTimeout(function(){ alertify.success('" . $this->session->userdata['postsuccess'] . " ')}, 2000);";
        }
        ?>
    })

    window.submitflag = 1;
    $('#button_submit').on('click', function() {
        var error = checkValidations();
        var ID = $('#cid').val();
        if (error === 'yes') {
            alertify.error("<?php echo label('required_field'); ?>");
            return false;
        } else {
            var id = $('#UserID').val();
            var FirstName = $('#FirstName').val();

            if (submitflag == 0) {
                return false;
            }
            submitflag == 0;
            $.ajax({
                type: "post",
                url: base_url + "admin/artist/checkDuplicate",
                data: {
                    table_name: 'sssm_user',
                    field_name: 'FirstName',
                    data_value: FirstName,
                    ufield: 'UserID',
                    ID: id,
                },
                success: function(data) {
                    submitflag = 1;
                    var obj = JSON.parse(data);

                    if (obj.result == 'Success') {
                        $('#button_submit').addClass('hide');
                        $('#button_submit_loading').removeClass('hide');
                        alertify.success("<?php echo label('please_wait'); ?>");
                        $('form').submit();

                    } else {
                        $('form').submit();
                        alertify.error("<?php echo label('msg_lbl_category_exist'); ?>");
                        return false;
                    }
                }
            });
        }
        return false;
    });
    $(document).keypress(function(e) {
        if (e.which == 13) {
            $("#button_submit").click();
            return false;
        }
    });

    function LoadStatesBasedCountry() {
        if ($("#StateDiv").length != 0) {
            $.ajax({
                type: "POST",
                url: base_url + "common/GetState/0/" + $('#CountryID').val(), //"<?php echo site_url(); ?>common/GetCountry",
                data: {
                    country: $('#CountryID').val()
                },

                success: function(result) {
                    $('#StateDiv').html(result);
                    $('#StateDiv').show();
                    $('#StateID').material_select();
                },
                error: function(result) {
                    console.log("error" + result);
                }
            });
        }
    }
</script>