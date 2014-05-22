<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

/**
 * @var yii\web\View $this
 * @var common\models\Thread $model
 */

//$this->params['breadcrumbs'][] = ['label' => $currentBoard['name'], 'url' => ['index&board='.$currentBoard['id']]];
$this->title = $thread->title;
$this->params['breadcrumbs'][] = ['label' => $currentBoard['name'], 'url' => ['index&boardid='.$currentBoard['id']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thread-view">

<?php echo date('Y-m-d H:i:s',time())?>
	<div class="tbox">
		<div class="floatl">
			<?= Html::a('����', ['create&boardid='.$currentBoard['id']], ['class' => 'btn btn-success']) ?>
		        <?= Html::a('����', ['update', 'id' => $thread->id], ['class' => 'btn btn-primary']) ?>
		        <?= Html::a('ɾ��', ['delete', 'id' => $thread->id], [
		            'class' => 'btn btn-danger',
		            'data' => [
		                'confirm' => 'Are you sure you want to delete this item?',
		                'method' => 'post',
		            ],
		        ]) ?>
		</div>
		<div class="floatr">
			<?php echo LinkPager::widget([
		   		'pagination' => $pages,
		   	]);?>
		</div>
	</div>
	
    <div class="tbox post-list">
	    <table class="post border">
	    	<tr>
	    		<td class="post-left-column header">
	    			<div>
		    			�鿴��<span><?php echo $thread['views'];?></span>�ظ���<span><?php echo $thread['posts'];?></span>
		    		</div>
	    		</td>
	    		<td class="post-right-column header">
	    			<div>
		    				<b><?= Html::encode($thread['title']) ?></b>
	    			</div>
	    		</td>
	    	</tr>	    		    	
	    </table>
	    
	    <?php 
	    	$floor=0;
	    	foreach ($rows as $row)
	    	{
	    		$floor+=1;
	    ?>
	    <div id="post_<?php echo $row['id'];?>">
		    <table class="post border">
		    	<tr>
		    		<td class="post-left-column header">
		    			<div class="dashed-border-b padding-b8">
		    				<span><?php echo $row['user_name'];?></span>
		    			</div>
		    		</td>
		    		<td class="post-right-column header">
		    			<div class="dashed-border-b padding-b8">
		    				�����ڣ�<span><?php echo $row['create_time'];?></span> <span class="floatr"><?php echo $floor;?>¥</span>
		    			</div>
		    		</td>
		    	</tr>
		    	<tr style="height: 80px;">
		    		<td class="post-left-column body">
		    			<div>
		    				<span></span>
		    			</div>
		    		</td>
		    		<td class="post-right-column body content">
		    			<div>
	    					<?php echo $row['body'];?>
	    				</div>
		    		</td>
		    	</tr>
		    	<tr>
		    		<td class="post-left-column footer">
		    		</td>
		    		<td class="post-right-column footer">
		    			<div class="dashed-border-t padding-t8">
	    					<span>�ظ�</span><span>�༭</span><span>֧��</span><span>����</span>
	    				</div>
		    		</td>
		    	</tr>
		    </table>
	    </div>
	    <?php }?>
    </div>
   	<div class="tbox">
		<div class="floatl">
			<?= Html::a('����', ['create&boardid='.$currentBoard['id']], ['class' => 'btn btn-success']) ?>
		        <?= Html::a('����', ['update', 'id' => $thread->id], ['class' => 'btn btn-primary']) ?>
		        <?= Html::a('ɾ��', ['delete', 'id' => $thread->id], [
		            'class' => 'btn btn-danger',
		            'data' => [
		                'confirm' => 'Are you sure you want to delete this item?',
		                'method' => 'post',
		            ],
		        ]) ?>
		</div>
		<div class="floatr">
			<?php echo LinkPager::widget([
		   		'pagination' => $pages,
		   	]);?>
		</div>
	</div>
   <div class="tbox">
       <?php $form = ActiveForm::begin([
				'id'=>'newPost',
	    		'action' => $this->homeUrl.'?r=thread/new-post&thread='.$thread['id'],
		]); ?>
	
	    	<input type="hidden" id="post-thread_id" name="Post[thread_id]" value="<?php echo $thread['id']?>"/>
	    	
	    	<?= $form->field($newPost, 'body',['template'=>"����\n{input}\n{hint}\n{error}"])->textarea(['rows' => 6]) ?>
	    	
		    <div class="form-group">
		        <?= Html::submitButton('����', ['class' => 'btn btn-success']) ?>
		    </div>
	
	    <?php ActiveForm::end(); ?>
   </div>

    

</div>
