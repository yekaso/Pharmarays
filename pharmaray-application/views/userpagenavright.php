<div class="news_section_right">
    <div class="drugcategories" id="articlesandjournal">
        <div class="alert alert-info alert-login heading">
            Related articles and journals...<br/>
        </div>
         <?php
        $errors = array_filter($news);

        if (!empty($errors)) {
            foreach ($news as $columnName => $columnData) {

                $newsletters_title = $columnData['news_title'];
                $newsletters_description = $columnData['news_description'];
                $newsletters_id = $columnData['id'];
                ?>
                <div class='eventslist'>
                    <ul>

                        <li><a class="news_title article_title" id="<?php echo $newsletters_id ?>" target="_top" href="#"><?php echo word_trim($newsletters_title, 42, true) ?></a>
                            <div class="comment-description">
                                <?php echo word_trim($newsletters_description, 147, true) ?>
                            </div></li>

                    </ul></div>
                <?php
            }
        } else {
            ?><div class='eventslist'>
                <ul>
                    <li><a class="news_title" target="_top" href="#">No related news</a></li>

                </ul></div>
            <?php
        }
        ?>
        
    </div>
    <br/>
    <div class="drugcategories">
        <div class="alert alert-info alert-login heading">
            Most commented articles and journals...<br/>
        </div>
       
        <?php
        $errors = array_filter($toptenreadarticle);

        if (!empty($toptenreadarticle)) {
            foreach ($toptenreadarticle as $columnName => $columnData) {

                $newsletters_title = $columnData['news_title'];
                $newsletters_description = $columnData['news_description'];
                $newsletters_id = $columnData['id'];
                ?>
                <div class='eventslist'>
                    <ul>

                        <li><a class="news_title article_title" id="<?php echo $newsletters_id ?>" target="_top" href="#"><?php echo word_trim($newsletters_title, 42, true) ?></a>
                            <div class="comment-description">
                                <?php echo word_trim($newsletters_description, 147, true) ?>
                            </div></li>

                    </ul></div>
                <?php
            }
        } else {
            ?><div class='eventslist'>
                <ul>
                    <li><a class="news_title" target="_top" href="#">No searched articles</a></li>

                </ul></div>
            <?php
        }
        ?>
        
    </div>
</div>