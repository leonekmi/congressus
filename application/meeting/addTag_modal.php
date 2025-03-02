<?php /*
	Copyright 2019 Cédric Levieux, Parti Pirate

	This file is part of Congressus.

    Congressus is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Congressus is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Congressus.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<style>
@media (min-width: 1024px) {
    #add-tag-modal .modal-dialog {
        width: 900px;
    }
}

@media (min-width: 1600px) {
    #add-tag-modal .modal-dialog {
        width: 1300px;
    }
}
</style>

<div class="modal fade" tabindex="-1" role="dialog" id="add-tag-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo lang("common_close"); ?>"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo lang("addTag_title"); ?></h4>
                <input type="hidden" value="" name="motionId">

            </div>
            <div class="modal-body">

            <?php
                foreach($tags as $tag) {

                    ?>
                        <div class="col-md-4">
                            <input type="checkbox" value="<?php echo $tag["tag_id"]; ?>" id="tag-<?php echo $tag["tag_id"]; ?>"><label for="tag-<?php echo $tag["tag_id"]; ?>"><?php echo $tag["tag_label"]; ?></label>
                        </div>
                    <?php

                }
            ?>
				<div class="clearfix"></div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang("common_close"); ?></button>
                <button type="button" class="btn btn-primary btn-modify-tags"><?php echo lang("common_modify"); ?></button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
