<div class="section">
  <div class="container">
    <div class="card-panel col s12">
      <h4 class="header m-t-0">
        <a href="<?php echo $this->config->item('base_url'); ?>admin/blog"><strong><?php echo label('msg_lbl_title_blog'); ?></strong></a>
      </h4>
      <form class="col s12" id="edit_form" method="post" action="<?php echo $this->config->item('base_url'); ?>admin/blog/<?php echo $page_name; ?>">
        <div class="row">

          <div class="input-field col s12 ">
            <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_category'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
            <input id="BlogTitle" name="BlogTitle" type="text" class="empty_validation_class" value="<?php echo @$cms->BlogTitle; ?>" maxlength="100" />
            <label for="BlogTitle"><?php echo label('msg_lbl_title') ?></label>
          </div>
          <div class="input-field col s12 ">
            <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_category'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
            <input id="AuthorName" name="AuthorName" type="text" class="empty_validation_class" value="<?php echo @$cms->AuthorName; ?>" maxlength="100" />
            <label for="AuthorName"><?php echo label('msg_lbl_authorname') ?></label>
          </div>
          <div class="input-field col s12 ">
            <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_category'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
            <input id="PublishedDate" name="PublishedDate" type="text" class="empty_validation_class datepicker" value="<?php echo @$cms->PublishedDate; ?>" maxlength="100" />
            <label for="PublishedDate"><?php echo label('msg_lbl_publishdate') ?></label>
          </div>
          <div class="input-field col s12">
            <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_content'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
            <div style="padding-top:40px;"></div>
            <label for="Content">Short Content</label>
            <textarea name="ShortContent" maxlength="100" id="ShortContent" class="materialize-textarea"><?php echo @$cms->ShortContent; ?></textarea>
          </div>
          <div class="input-field col s12">
            <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_content'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
            <div style="padding-top:40px;"></div>
            <label for="Content"><?php echo label('msg_lbl_content') ?></label>
            <textarea name="Content" id="Content" class="materialize-textarea"><?php echo @$cms->Content; ?></textarea>
          </div>
        </div>
        <?php
        if (isset($data->Image) && $data->Image != "" && (file_exists(str_replace(array('\\', '/system'), array('/', ''), BASEPATH) . BANNER_UPLOAD_PATH . $data->Image))) {
          $path = base_url() . BANNER_UPLOAD_PATH . $data->Image;
          $cross = "";
        } else {
          $cross = "hide";
          $path =  $this->config->item('admin_assets') . 'img/noimage.gif';
        }

        ?>
        <div class="m-t-20">
          <label class="imageview-label">Website Artist, Enter only .jpg and .png formats and img size 150 * 150</label>
          <div class="row">
            <div class="input-field m-t-0 col s12 m2 imageview1">
              <img width="150" id="ImagePreivew" src='<?php echo $path; ?>'>
              <a id="webviewcross" class="cross1 <?= $cross ?>" data-img="ImagePreivew" data-file="userfile" data-edit="editImageURL"><i id="cal" class="fa fa-times" aria-hidden="true"></i></a>
            </div>
            <div class="file-field input-fieldcol col s12 m10 m-t-10">
              <input tabindex="999" class="file-path validate empty_validation_class" type="text" id="editImageURL" name="editImageURL" value="<?php echo @$data->Image; ?>" readonly />
              <div class="btn">
                <span>File</span>
                <input accept="image/*" type="file" name="Image" id="Image" class="images" data-cross="webviewcross" data-img="ImagePreivew" data-edit="editImageURL" />
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m6">
            <input type="checkbox" class="" name="Status" id="Status" <?php if (isset($cms->Status) && $cms->Status == INACTIVE) {
                                                                        echo "";
                                                                      } else {
                                                                        echo "checked='checked'";
                                                                      } ?> />
            <label for="Status"><?php echo label('msg_lbl_status'); ?></label>
          </div>
          <div class="input-field col s12 m6">
            <button class="btn waves-effect waves-light right" type="button" id="button_submit" name="button_submit"><?php echo label('msg_lbl_submit'); ?>
            </button>
            <?php echo $loading_button; ?>
            <a href="<?php echo $this->config->item('base_url'); ?>admin/blog" class="right close-button"><?php echo label('msg_lbl_cancel'); ?></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>