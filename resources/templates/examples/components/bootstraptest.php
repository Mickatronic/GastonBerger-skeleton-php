<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");
?>
    <div id="container">
        <div id="content">
            <form class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Form Name</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Text Input</label>
                        <div class="col-md-4">
                            <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                            <span class="help-block">help</span>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
                        <div class="col-md-4">
                            <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="1">Option one</option>
                                <option value="2">Option two</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="button1id">Double Button</label>
                        <div class="col-md-8">
                            <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
                            <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
        <?php
        require_once(TEMPLATES_PATH . "/rightPanel.php");
        ?>
    </div>
<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>