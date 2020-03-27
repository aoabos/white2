<section id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <h4><b><?php $this->commentsNum(_t('快抢沙发'), _t('沙发被抢'), _t('已有 %d 条评论')); ?></b></h4>
    <div>
    <?php $comments->listComments(); ?>
      <hr />
    </div>
   <ol class="page-navigator"><li class="current"><?php $comments->pageNav(); ?></li></ol>
    <?php endif; ?>
</section>
  

<section>
  <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
 <p><h4 id="comments" class="subhead"><?php _e('添加新评论'); ?></h4></p>
<hr />                       
<form method="post" action="<?php $this->commentUrl() ?>">    
   <?php if($this->user->hasLogin()): ?>
   <p> 登录为 <a href="<?php $this->options->profileUrl(); ?>" target="_blank"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" ><?php _e('退出'); ?> &raquo;</a></p>
     
  

					<div class="row gtr-uniform">
                       <?php else: ?>
                       <div class="row gtr-uniform">
											<div class="col-4 col-12-xsmall">
												<input type="text" name="author" id="author" value="<?php $this->remember('author'); ?>" placeholder="Name" required />
											</div>
											<div class="col-4 col-12-xsmall">
												<input type="text" name="mail" id="mail" value="<?php $this->remember('mail'); ?>" placeholder="Mail" required />
											</div>
											<div class="col-4 col-12-xsmall">
												<input type="text" name="url" id="url" value="<?php $this->remember('url'); ?>" placeholder="Url" />
											</div>
                  
							<?php endif; ?>
											<div class="col-12">
												<textarea name="text" id="comment" placeholder="Enter your message" required="true" rows="6"><?php $this->remember('text'); ?></textarea>
											</div>
								
							<ul class="actions">
								<li><input class="button fit" type="submit" value="<?php _e('提交评论'); ?>" /></li>
							</ul>
                     </div>
     	
		</form>
  </div>
	
   </section>