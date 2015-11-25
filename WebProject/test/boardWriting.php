<?php include 'base.php' ?>
<?php startblock('body') ?>

        <div id="content" class="snippet-hidden">
            


<div id="mainbar" class="ask-mainbar">
    
    <form id="post-form" class="post-form" action="/questions/ask/submit" method="post">
        <input type="hidden" name="qualityBanWarningShown" value="False"/>
        <input type="hidden" name="priorAttemptCount" value="0"/> 
        <input type="hidden" name="warntags" />
        <div id="question-form">
            <div style="position: relative;"> 
                <div class="form-item ask-title">
                    <table class="ask-title-table">
                        <tr>
                            <td class="ask-title-cell-key">
                                <label for="title">Title</label>
                            </td>
                            <td class="ask-title-cell-value">
                                <input name="title" type="text" maxlength="300" tabindex="100" placeholder="What&#39;s your programming question? Be specific." class="ask-title-field" data-min-length="15" data-max-length="150">                        
                            </td>
                        </tr>
                    </table>
                    <div id="question-suggestions">
                    </div>
                </div>
            </div>         

<div id="ck_editor" class="ck_editor">
    <textarea class="ckeditor" cols="1" id="editor1" name="editor1" rows="15">
    </textarea>

</div>
        
            <div style="position: relative;"> 



<div style="position: relative;"> 
<div class="form-item">
    <label>Tags</label>
    <input id="tagnames" name="tagnames" type="text" size="60" value="" tabindex="103">
</div>
</div>

                    <div id="tag-suggestions"></div>


                

            </div>
        
            <div id="question-only-section">



                <div class="form-submit cbt">
                    <input id="submit-button" type="submit" value="Post Your Question" tabindex="120">
                    
                    
                </div>
            </div>
        </div>

    </form>
</div>

<!--sidebar 관련부분-->

    </div>


<?php endblock() ?>