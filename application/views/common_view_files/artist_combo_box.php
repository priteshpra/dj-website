<label for="PageID" class="active">Artist Name</label>

<select id="ArtistCategoryID" name="ArtistCategoryID" class="select2_class" style="width:100%;display: none;">
    <?php
    if ($Selected === 0) {
    ?>
        <option value="" selected="selected">Category Artist</option>
    <?php
    }
    foreach ($all_data as $key => $value) {
        if ($value->ArtistCategoryID === $Selected) {
            $sel = "selected=selected";
        } else {
            $sel = "";
        }
    ?>
        <option value='<?php echo $value->ArtistCategoryID; ?>' <?php echo $sel; ?>> <?php echo $value->SubCategoryName; ?></option>
    <?php
    }
    ?>
</select>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>