<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\search\ThreadSearch $searchModel
 */

$this->title = $currentBoard['name'];
$this->params['breadcrumbs'][] = ['label' => $currentBoard['name'], 'url' => ['index&boardid='.$currentBoard['id']]];
?>
<div class="thread-index">


    <p>
        <?= Html::a('����', ['create&boardid='.$currentBoard['id']], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="thread-list border">
    	<tr>
    		<th>����</th>
    		<th width="120px">����</th>
    		<th width="120px">�ظ�/�鿴</th>
    		<th width="120px">��󷢱�</th>
    	</tr>
    	<?php foreach ($threads as $row ):?>
    	<tr>
    		<td><a href="<?php echo $this->homeUrl.'?r=thread/view&id='.$row['id']?>"><?php echo $row['title'];?></a></td>
    		<td class="author"><?php echo $row['user_name'];?><br/><?php $this->showTime($row['create_time']);?></td>
    		<td><?php echo $row['posts'];?>/<?php echo $row['views']?></td>
    		<td class="last-author"><?php echo $row['user_name'];?><br/><?php echo $this->showTime($row['create_time'],'Y-m-d H:i');?></td>
    	</tr>
    	<?php endforeach;?>
    </table>
   

</div>
