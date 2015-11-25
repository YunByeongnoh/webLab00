<?php include 'base.php' ?>
<?php startblock('body') ?>
       

<div id="question-header" style="clear: both; padding: 5px 0; border-bottom: 1px solid #e5e5e5; margin-bottom: 1em; ">
    <h1 itemprop="name" style="font-size: 22px; line-height: 1.3;"><a href="/questions/3782632/google-map-display-from-a-hidden-area" class="question-hyperlink">Google map display from a hidden area</a></h1>
</div>

<div id="mainbar">

<div class="question" data-questionid="3782632"  id="question">
    <table>
        <tr>
            <!-- 질문 포스트 부분 -->            
            <td class="postcell">
            <div>
                <div class="post-text" itemprop="text">
                    <p>I really hope someone can advise on displaying a google map from a hidden div.(question part)</p>


                </div>
            <!--태그부분-->    
            <div class="post-taglist">
                <a href="/questions/tagged/google-maps" class="post-tag" title="show questions tagged &#39;google-maps&#39;" rel="tag"><img src="//i.stack.imgur.com/uE37r.png" height="16" width="18" alt="" class="sponsor-tag-img">google-maps</a> <a href="/questions/tagged/hidden" class="post-tag" title="show questions tagged &#39;hidden&#39;" rel="tag">hidden</a> 
            </div>
        <!--작성자 정보 부분-->    
        <table class="fw">
            <tr>
                
            <td class="post-signature owner">
            <div class="user-action-time">
        asked <span title="2010-09-23 21:21:52Z" class="relativetime">Sep 23 '10 at 21:21</span>
            </div>
            <div class="user-details">
                <a href="/users/99877/lee">Lee</a><br>
                <span class="reputation-score" title="reputation score " dir="ltr">3,799</span><span title="16 gold badges"><span class="badge1"></span><span class="badgecount">16</span></span><span title="46 silver badges"><span class="badge2"></span><span class="badgecount">46</span></span><span title="83 bronze badges"><span class="badge3"></span><span class="badgecount">83</span></span>
            </div>
            </td>
            </tr>
        </table>
            </div>
            </td>
        </tr>
    </table>
</div>

<div id="answers">
    <a name="tab-top"></a>
		<div id="answers-header">
			<div class="subheader answers-subheader" style="    border-bottom: 1px solid #e0e0e0;">
			<h2>3 Answers<span style="display:none;" itemprop="answerCount">3</span></h2>
			<div>
				<div id="tabs">
                    <a href="/questions/3782632/google-map-display-from-a-hidden-area?answertab=active#tab-top" data-nav-xhref="" title="Answers with the latest activity first" data-value="active">active</a>
                    <a href="/questions/3782632/google-map-display-from-a-hidden-area?answertab=oldest#tab-top" data-nav-xhref="" title="Answers in the order they were provided" data-value="oldest">oldest</a>
                    <a class="youarehere" href="/questions/3782632/google-map-display-from-a-hidden-area?answertab=votes#tab-top" data-nav-xhref="" title="Answers with the highest score first" data-value="votes">votes</a>
                </div>
			</div>
		    </div>    
		</div>    
        <a name="3782805"></a>
        <div id="answer-3782805" class="answer accepted-answer" data-answerid="3782805"  itemscope itemtype="http://schema.org/Answer" itemprop="acceptedAnswer">
            <table>
                <tr>
                <!-- 답변1 포스트 부분 -->
                    <td class="answercell" style="border-bottom: 1px solid #e0e0e0;">
                    <div class="post-text" itemprop="text">
                        <p>You needn't bother with the absolute position and all that. Let the div be hidden until necessary, then show it and call <code>google.maps.event.trigger(map, 'resize')</code>(v3) or <code>map.checkResize()</code>(v2)</p>
                    </div>
                    <table class="fw">
                        <tr>
                            <td align="right" class="post-signature">   
                            <div class="user-info user-hover">
                            <div class="user-action-time">answered <span title="2010-09-23 21:51:25Z" class="relativetime">Sep 23 '10 at 21:51</span>
                            </div>
                            <div class="user-details">
                                <a href="/users/73831/sudhir-jonathan">Sudhir Jonathan</a><br>
                                <span class="reputation-score" title="reputation score " dir="ltr">8,078</span><span title="5 gold badges"><span class="badge1"></span><span class="badgecount">5</span></span><span title="37 silver badges"><span class="badge2"></span><span class="badgecount">37</span></span><span title="67 bronze badges"><span class="badge3"></span><span class="badgecount">67</span></span>
                            </div>
                            </div>
                            </td>
                        </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td>
	                <div id="comments-3782805" class="comments ">
		                <table>
                        <tbody data-remaining-comments-count="1" data-canpost="false" data-cansee="true" data-comments-unavailable="false" data-addlink-disabled="true">
                            <tr id="comment-4006859" class="comment ">
                                <td>
                                    <table>
                                        <tbody>
                                        </tbody>
		                              </table>
                                </td>
                            </tr>    
                        </table>
                    </div>
                        <div id="answer-3782712" class="answer" data-answerid="3782712"  itemscope itemtype="http://schema.org/Answer" style="border-bottom: 1px solid #f0f0f0;">
                        <table>
                            <tr style="border-bottom: 1px solid #e0e0e0;">
           
            

<!-- 답변2 포스트 부분 -->
<td class="answercell">
    <div class="post-text" itemprop="text">
<p>Have you tried calling the resize event of the map?</p>

<p><a href="http://code.google.com/apis/maps/documentation/javascript/reference.html#Map" rel="nofollow">Google Maps API - Map</a></p>
    </div>
    <table class="fw">
    <tr>
    <td align="right" class="post-signature">   
       

    <div class="user-info ">
    <div class="user-action-time">
        answered <span title="2010-09-23 21:35:28Z" class="relativetime">Sep 23 '10 at 21:35</span>
    </div>
    
    <div class="user-details">
        <a href="/users/443496/cyrena">Cyrena</a><br>
        <span class="reputation-score" title="reputation score " dir="ltr">640</span><span title="5 silver badges"><span class="badge2"></span><span class="badgecount">5</span></span><span title="17 bronze badges"><span class="badge3"></span><span class="badgecount">17</span></span>
    </div>
</div>
    </td>
    </tr>
    </table>
</td>
        </tr>
            
<tr>
    <td>
	    <div id="comments-3782712" class="comments  dno">
		    <table>
                <tbody data-remaining-comments-count="0"
                       data-canpost="false"
                       data-cansee="true"
                       data-comments-unavailable="false"
                       data-addlink-disabled="true">

                        <tr><td></td><td></td></tr>
                </tbody>
		    </table>
	    </div>

        
    </td>
</tr>    </table>
</div>

  
<a name="3907234"></a>
<div id="answer-3907234" class="answer" data-answerid="3907234"  itemscope itemtype="http://schema.org/Answer" style="border-bottom: 1px solid #f0f0f0;">
    <table>
        <tr>
           

<!-- 답변3 포스트 부분 -->
<td class="answercell">
    <div class="post-text" itemprop="text">
<p>Why not defer rendering of the map until the div is shown?</p>

<p>rough code:</p>

<pre><code>$("button").click(function() {
   $(mapDiv).show();
   new google.maps.Map(mapDiv, opts);
});
</code></pre>
    </div>
    <table class="fw">
    <tr>
            


    <td align="right" class="post-signature">   
       

    <div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title="2010-10-11 14:41:24Z" class="relativetime">Oct 11 '10 at 14:41</span>
    </div>

    <div class="user-details">
        <a href="/users/3947/chris-broadfoot">Chris Broadfoot</a><br>
        <span class="reputation-score" title="reputation score " dir="ltr">3,875</span><span title="1 gold badge"><span class="badge1"></span><span class="badgecount">1</span></span><span title="16 silver badges"><span class="badge2"></span><span class="badgecount">16</span></span><span title="32 bronze badges"><span class="badge3"></span><span class="badgecount">32</span></span>
    </div>
</div>
    </td>
    </tr>
    </table>
</td>
        </tr>
            

                </tbody>
		    </table>
	    </div>

       
    </td>
</tr>    </table>
</div>
						
<!--Answer Editor부분-->			

    <h2 class="space">Your Answer</h2>
    <textarea class="ckeditor" cols="1" id="editor1" name="editor1" rows="15">
    </textarea>

                <div id="Answer-only-section">



                <div class="form-submit cbt">
                    <input id="submit-button" type="submit" value="Post Your Answer" tabindex="120">
                    
                    
                </div>
            </div>


<?php endblock() ?>