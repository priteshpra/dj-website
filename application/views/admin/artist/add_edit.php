<div class="container">
    <h4 class="header m-t-0">
        <a href="<?php echo site_url('admin/artist') ?>"><strong>Artist</strong>
        </a>
    </h4>
    <div class="card-panel col s12">
        <form class="col s12" id="AddForm" method="post" action="<?php echo site_url('admin/artist/' . $page_name) ?>" enctype="multipart/form-data">
            <input id="UserID" name="UserID" value="<?php echo isset($data->UserID) ? $data->UserID : 0; ?>" type="hidden" />
            <div class="row">

                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="FirstName" name="FirstName" type="text" class="empty_validation_class LetterOnly" value="<?php echo @$data->FirstName; ?>" maxlength="100" />
                    <label for="FirstName">First Name</label>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="LastName" name="LastName" type="text" class="empty_validation_class LetterOnly" value="<?php echo @$data->LastName; ?>" maxlength="100" />
                    <label for="LastName">Last Name</label>
                </div>
                <div class="input-field col s6">
                    <?= $artistcategory ?>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="DisplayName" name="DisplayName" type="text" class="empty_validation_class LetterOnly" value="<?php echo @$data->DisplayName; ?>" maxlength="100" />
                    <label for="DisplayName">Display Name</label>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="EmailID" name="EmailID" type="text" class="empty_validation_class LetterOnly" value="<?php echo @$data->EmailID; ?>" maxlength="100" />
                    <label for="EmailID">Email Id</label>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="Password" name="Password" type="password" class="empty_validation_class" value="<?php echo @$data->Password; ?>" maxlength="50" />
                    <label for="Password">Password</label>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="MobileNo" name="MobileNo" type="text" class="empty_validation_class" value="<?php echo @$data->MobileNo; ?>" maxlength="15" />
                    <label for="MobileNo">Mobile No.</label>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="Address" name="Address" type="text" class="empty_validation_class" value="<?php echo @$data->Address; ?>" maxlength="100" />
                    <label for="Address">Address</label>
                </div>
                <div class="input-field col s6">
                    <?= $country ?>
                </div>
                <div class="input-field col s6" id="StateDiv">
                    <?= $state; ?>
                </div>
                <div class="input-field col s6">
                    <?= $city ?>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="Rating" name="Rating" type="text" class="empty_validation_class AmountOnly" value="<?php echo @$data->Rating; ?>" maxlength="100" />
                    <label for="Rating">Rating</label>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="Experience" name="Experience" type="text" class="empty_validation_class AmountOnly" value="<?php echo @$data->Experience; ?>" maxlength="100" />
                    <label for="Experience">Experience</label>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="Languages" name="Languages" type="text" class="empty_validation_class LetterOnly" value="<?php echo @$data->Languages; ?>" maxlength="100" />
                    <label for="Languages">Languages</label>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="Skills" name="Skills" type="text" class="empty_validation_class" value="<?php echo @$data->Skills; ?>" maxlength="100" />
                    <label for="Skills">Skills</label>
                </div>
                <div class="input-field col s12 m6">
                    <a class="tooltipped a-tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo label('msg_lbl_please_enter_brand'); ?>"><i class="<?php echo INFO_ICON_CLASS; ?>"></i></a>
                    <input id="AboutArtist" name="AboutArtist" type="text" class="empty_validation_class" value="<?php echo @$data->AboutArtist; ?>" maxlength="100" />
                    <label for="AboutArtist">About Artist</label>
                </div>
                <div class="clearfix"></div>
                <?php
                if (isset($data->FilePath) && $data->FilePath != "" && (file_exists(str_replace(array('\\', '/system'), array('/', ''), BASEPATH) . JOBPOST_UPLOAD_PATH . $data->FilePath))) {
                    $path = base_url() . JOBPOST_UPLOAD_PATH . $data->FilePath;
                    $cross = "";
                } else {
                    $cross = "hide";
                    $path =  $this->config->item('admin_assets') . 'img/noimage.gif';
                }

                ?>

                <div class="m-t-20">

                    <label class="imageview-label">Artist Video, Enter only .mp4 and .MP4 formats</label>
                    <div class="row">
                        <div class="input-field m-t-0 col s12 m2 imageview1">
                            <img width="150" id="ImagePreivew" src='<?php echo $path; ?>'>
                            <a id="webviewcross" class="cross1 <?= $cross ?>" data-img="ImagePreivew" data-file="userfile" data-edit="editImageURL"><i id="cal" class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        <div class="file-field input-fieldcol col s12 m10 m-t-10">
                            <input tabindex="999" class="file-path validate empty_validation_class" type="text" id="editImageURL" name="editImageURL" value="<?php echo @$data->VideoFileURL; ?>" readonly />
                            <div class="btn">
                                <span>File</span>
                                <input accept="video/*" type="file" name="FilePath" id="FilePath" class="" data-cross="webviewcross" data-img="ImagePreivew" data-edit="editImageURL" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-field col s12 m6">

                    <input type="checkbox" class="" name="IsOpenToTravel" id="IsOpenToTravel" <?php
                                                                                                if (isset($data->IsOpenToTravel) && @$data->IsOpenToTravel == INACTIVE) {
                                                                                                    echo "";
                                                                                                } else {
                                                                                                    echo "checked='checked'";
                                                                                                }
                                                                                                ?>>
                    <label for="IsOpenToTravel">Is Open To Travel</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="" name="Status" id="Status" <?php
                                                                                if (isset($data->Status) && @$data->Status == INACTIVE) {
                                                                                    echo "";
                                                                                } else {
                                                                                    echo "checked='checked'";
                                                                                }
                                                                                ?>>

                    <label for="Status"><?php echo label('msg_lbl_status'); ?></label>
                </div>

                <div class="input-field col s12 m6">
                    <button class="btn waves-effect waves-light right" id="button_submit" name="button_submit" type="button"><?php echo label('msg_lbl_submit'); ?></button>
                    <?php echo $loading_button; ?>
                    <a href="<?php echo site_url('admin/artist') ?>" class="right close-button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>