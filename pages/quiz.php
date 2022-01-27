<?php require_once('libs/app.php') ?>
<h1>Викторина!!!</h1>

<?php
    $content = file_get_contents('quiz.json');
    $json_data = json_decode($content);
?>


<div style="border: 1px solid red;">
    <form method="POST" action="post/quiz.php">
        <?php foreach ($json_data as $key => $item) : ?>

        <h2><?php echo $item->question; ?> </h2>
        <ul>
            <?php if (array_key_exists('answers', $item)) : ?>
            <?php foreach ($item->answers as $a) : ?>


            <?php if ($item->type == 'radio') : ?>
            <div class="mdc-touch-target-wrapper">
                <div class="mdc-radio mdc-radio--touch">
                    <input class="mdc-radio__native-control" type="radio" value="<?php echo $a->text ?>"
                        name="<?php echo $item->name ?>" checked>
                    <div class="mdc-radio__background">
                        <div class="mdc-radio__outer-circle"></div>
                        <div class="mdc-radio__inner-circle"></div>
                    </div>
                    <div class="mdc-radio__ripple"></div>
                </div>
            </div>
            <?php echo $a->text ?>
            <br>
            <?php endif ?>

            <?php if ($item->type == 'checkbox') : ?>
            <div class="mdc-form-field">
                <div class="mdc-checkbox">
                    <input type="checkbox" name="<?php echo $item->name ?>[]" value="<?php echo $a->value ?>"
                        class="mdc-checkbox__native-control">
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                    <div class="mdc-checkbox__ripple"></div>
                </div>
                <label for="checkbox-1"><?php echo $a->text ?></label>
            </div>
            <br>
            <?php endif ?>

            <?php endforeach ?>
            <?php endif ?>





            <?php if ($item->type == 'select') : ?>
            <select name="<?php echo $item->name ?>">
                <?php foreach ($item->answers as $ans) : ?>
                <option value="<?php echo $ans->text ?>"><?php echo $ans->text ?></option>
                <?php endforeach ?>
            </select>
            <br>
            <?php endif ?>



            <?php if ($item->type == 'input') : ?>
            <label class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea mdc-text-field--no-label">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                    <span class="mdc-notched-outline__trailing"></span>
                </span>
                <input class="mdc-text-field__input" name="<?php echo $item->name ?>" type="text" aria-label="Label">
            </label>
            <?php endif ?>
        </ul>
        <?php endforeach ?>

        <div style="padding: 10px">
            <input class="mdc-button mdc-button--raised" type="submit" name="Отправить" />
        </div>

    </form>
</div>