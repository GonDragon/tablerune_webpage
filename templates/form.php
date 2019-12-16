<?php

class SmallForm
{
    // $fields is an array of arrays. Each array represents a field in the form. Each field should have it's name on
    // field[0] and it's type on field[1].
    // $destination is the action of the form.
    function __construct($title, $fields, $destination, $submitname) {
        $this->title = $title;
        $this->fields = $fields;
        $this->destination = $destination;
        $this->submitname = $submitname;
    }

    public function build() {
        ?>

    <div class="p-3 d-flex flex-column align-items-center">
    <h3><?php echo($this->title) ?></h3>

    <?php echo("<form id='$this->submitname' class='card col-12 col-md-6 col-xl-3 p-3 m-auto' action='$this->destination' method='post'>");

        foreach($this->fields as &$field) {
            ?>
        <div class="form-group">
        <?php
        echo("<input class='form-control form-control-lg' type='$field[1]' name='$field[0]' placeholder='$field[0]' />");
        ?>
        </div>
            <?php
        }
        echo("<input class='btn btn-primary' type='submit' value='$this->submitname'>");
        ?>

        </form>
        </div>

        <?php
    }
}
