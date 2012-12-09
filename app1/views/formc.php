







<style>



















/********************************************************************************************* 

Comments

*********************************************************************************************/
/*** Tabs ***/
ul.tabs-menu {
background:url(images/comments_tab_bg.png) no-repeat;
width:618px;
height:57px;
font-size:20px;
font-weight:normal;
margin:0 0 30px 0;
}

.tabs-menu li {
float:left;
margin:15px 0 0 15px;
}

ul.tabs-menu li a {
text-decoration:none;
color:#4C4C4C;
}

ul.tabs-menu li.active a {
color:#fff;
}

.tabs-menu span {
background:url(images/rss_comm.png) no-repeat;
width:24px;
height:24px;
float:right;
margin:17px 33px 0 0;
}


.comments-wrapper {
width:89%;
margin:0 4.5% 30px 5.5%;
padding:0 0 10px 0;
}

.comments-title {
margin: 0 0 20px 0;
font-size: 22px;
font-weight: normal;
line-height: 32px;
border-bottom: 3px solid #5BC4BE;
padding-bottom: 12px;
color: #5BC4BE;
}

.comments-title a {
text-decoration:none;
color: #5BC4BE;
}

#comments {

}

#comments .children {
margin-top:10px;
}

.nocomments {
font-size:25px;
text-align:center;
padding:20px 0 0 0;
}

.comment-author  {
margin:50px 0 50px 0;
position:relative;
clear:both;
overflow:hidden;
}

.comment-author .vote { float:right;}
.comment-author .rating {
font-size:30px !important;
font-family:'Varela Round', sans-serif;
color:#B4B4B4;
padding-left:20px;
}
.comment-author .rating.positive {color:#3e783a;}
.comment-author .rating.negative {color:#E2435A;}


.comment-author .rate { 
color: #B4B4B4;
padding: 5px;
position: relative;
top: -5px;
cursor:pointer;
cursor:hand;
-webkit-transition: all 0.2s ease-out;
-moz-transition: all 0.2s ease-out;
-ms-transition: all 0.2s ease-out;
-o-transition: all 0.2s ease-out;
}
.comment-author .rate.like:hover {color:#3e783a;}
.comment-author .rate.unlike:hover {color:#E2435A;}




.data-container h5 {
color: black;
font-size: 24px;
margin: 0 0 0 105px;
font-family: 'Open Sans', sans-serif;
letter-spacing: -1px;
text-transform: capitalize;
position: relative;
top: 5px;
font-weight: 600;
margin-bottom: 30px;
}

.thumblock  {display:none;}

.data-container h5 span { float: right; }

.data-container h5 span a {
color: #B4B4B4;
font-size: 13px;
text-transform: uppercase;
font-family: 'Open Sans', sans-serif;
position: relative;
top: 6px;
letter-spacing: 0px;
}

.data-container h5 a {
text-decoration:none;
color:#4c4c4c;
}

.data-container h5 a:hover {
color:#446DB2;
}

.data-container h6 {
margin:0 0 10px 105px;
font-size:10px;
font-weight:normal;
}

.data-container h6 a {
text-decoration:none;
color:#888;
}

.data-container h6 a:hover {
color:#446DB2;
}

.data-container p {
padding: 0 0 5px 0;
margin: 0 0 10px 105px;
line-height: 25px;
}

.data-container p a {
text-decoration:none;
color:#888;
}

.data-container p a:hover {
text-decoration:underline;
}

.reply {
margin: 20px 0 5px 105px;
}

.reply a {
font-size:13px;
text-transform:uppercase;
font-weight:bold;
color:#446DB2;
text-decoration:none;
}

.reply a:hover {
color:#446DB2;
}

.commentlist .children li {
border: none;
margin:0 0 0 5.5% !important;
}


/*** edit comment ***/
.edit-comment-admin-links {
margin-left:105px !important;
width:350px !important;
float:left !important;
}

.edit-comment-admin-links a{
text-transform:uppercase !important;
color:#333333 !important;
font-size:10px !important;
padding-top:3px !important;
}

.edit-comment-admin-links a:hover {
color:#446DB2 !important;
}

.ajax-edit-time-left {
width:161px !important;
font-size:10px !important;
color:#333 !important;
text-transform:uppercase !important;
padding-top:3px !important;
}


/*** level 6-10 ***/


.commentlist .children li.depth-7 {
margin-left:0px !important;
}

.commentlist .children li.depth-8 {
margin-left:0px !important;
}

.commentlist .children li.depth-9 {
margin-left:0px !important;
}

.commentlist .children li.depth-10 {
margin-left:0px !important;
}
/*** end level 6-10 ***/

.commentlist li.comment {
border-bottom: 1px dotted #CCC;
line-height: 20px;
margin: 0 0 33px 0;
position: relative;
}

.commentlist li:last-child {
border-bottom: none;
margin-bottom: 0;
}

h3#reply-title {
margin-bottom:30px;
font-size: 22px !important;
font-weight: normal;
line-height: 32px;
border-bottom: 3px solid #5BC4BE;
padding-bottom: 12px;
color: #5BC4BE !important;
width: 98%;
}


#respond {
    margin: 24px 0;
    overflow: hidden;
    position: relative;

}

#respond em {
font-style: normal !important;
float: right;
font-size: 12px;
margin-right: 2%;
}

#cancel-comment-reply-link {
    border-left: 1px dotted #CCCCCC;
    color: #4C4C4C;
    font-size: 23px;
    font-weight: normal;
    line-height: 18px;
    margin: 0 0 0 20px;
    padding: 0 0 0 20px;
    text-decoration: none;
    text-transform: capitalize;
}

#cancel-comment-reply-link:hover {
color:#446DB2;
}

.logged {
margin:0 0 7px 0;
}

.logged a {
text-decoration:none;
color:#446DB2;
}

.logged a:hover {
color:#4c4c4c;
}

#respond textarea {
   width: 97%;
   margin-top:6px;
}

#respond textarea:focus {
    outline:none;
    background:#fff;
}

#respond input {
    width: 97.3%;
}


#respond input.txt {
background-color:#f8f8f8;
height:35px !important;
border:1px solid #dadada !important;
padding:0 0 0 1%;
color:#586470;
font-size:14px !important;
width:97%;
display:block;
margin-top:6px;
}
#respond input.txt:focus {
outline:none;
background:#fff;
}

.comment-form-author {
padding-bottom:20px;
}

#respond label {font-weight: bold;}

.comment-form-email {
padding-bottom:20px;
}

.comment-form-url {
width:48%;
float:right;
}


.second-border2 {
margin:10px 0 15px 0;
padding:10px 0 10px 0;
}

.comm-txt {
border: none !important;
background-color:#f8f8f8;
border:1px solid #dadada !important;
padding:10px 0 10px 1% !important;
color:#586470;
font-size:14px !important;
}


#respond .form-submit input {
font-weight:400;
font-size: 14px;
text-decoration: none;
color: #fff;
padding: 9px 12px;
border-radius: 5px;
background: #5BC4BE;
border: 1px solid #5BC4BE;
width:auto;
margin:20px 0 0;
}

#respond .form-submit input:hover {
color:#ffffff;
border: 1px solid #446DB2;
background: #446DB2;
}



#commentform input.error {
padding:0 3px 0 9px !important;

}

.required {
color:#E2435A;
}

.bypostauthor {

}


.button, a.button, a.more-link {
background-color: #222;
color: #fff;
cursor: pointer;
display: inline-block;
font-style: normal;
font-weight: bold;
letter-spacing: normal;
line-height: 1;
padding: 8px 10px 9px;
position: relative;
text-decoration: none;
font-size:10px;
border:none;
}

.button:hover, a.button:hover, a.more-link:hover {
background:#446DB2 !important;
}




</style>















<div id="respond">
	<h3 id="reply-title">
	   Leave a Reply       <small><a rel="nofollow" id="cancel-comment-reply-link" href="/twitter-bootstrap/#respond" style="display:none;">Cancel Reply</a></small>
    </h3>
	
	
	    <form action="http://designmodo.com/wp-comments-post.php" method="post" id="commentform">
         
    
    <div class="mail-web-container">
	
		<div class="comment-form-author">
			<span class="required">*</span> <label for="author">Name</label>
			<input type="text" placeholder="Name" name="author" class="txt" id="author" value="" size="15" tabindex="1" />
			<div style="clear:both;"></div>
		</div>

		<div class="comment-form-email">
			<span class="required">*</span> <label for="email">Email</label>
			<input type="text" placeholder="E-mail" name="email" class="txt" id="email" value="" size="22" tabindex="2" />
		</div>


                <div style="clear:both;"></div>
    </div>            
                
                
            
            <!--<p><strong>XHTML:</strong> You can use these tags: &lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </p>-->
    
            <div class="comment-form-comment">
              <span class="required">*</span> <label for="comment">Comment</label> <em>Minimum length: 20 characters</em>
              <textarea name="comment" placeholder="Leave a comment please..." id="comment" class="comm-txt" rows="10" cols="50" tabindex="4"></textarea>
            </div>
            
            <div class="form-submit">
              <input type="submit" id="submit" class="button" tabindex="5" value="Submit Comment" />
              <input type="hidden" name="comment_post_ID" value="83850" />
            </div>
            
            <input type='hidden' name='comment_post_ID' value='83850' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
            <p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="b29e5931bc" /></p><p style="display:none;"><input type="text" name="nxts" value="1355078167" /><input type="text" name="nxts_signed" value="660d8c51f67b6293e686176fcd831e5dca3cb332" /><input type="text" name="ba67ea39c15a3358d4fe4" value="" /><input type="text" name="f9d786d302efbd" value="918637302d91e" /></p><!-- BEGIN: subscribe to comments reloaded --><br><p><input style='width:30px' type='checkbox' name='subscribe-reloaded' id='subscribe-reloaded' value='yes' checked='checked' /> Notify me of followup comments via e-mail. You can also <a href='http://designmodo.com/comment-subscriptions?srp=83850&amp;sra=s'>subscribe</a> without commenting.</p><!-- END: subscribe to comments reloaded -->    </form><!--end #commentform -->
    
        <div class="fix"></div>
</div><!--end #respond -->



