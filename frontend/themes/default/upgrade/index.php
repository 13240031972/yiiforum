<?php
/**
 * @var yii\web\View $this
 */
$this->title = 'My Yii Forum';
?>
<div class="site-index">


    <div class="body-content">
    
       <?php 
       		if(empty($needUpgradeSqls))
       		{
       			echo '����Ҫ����sql<br>';
       			echo '<a href="'.$this->homeUrl.'">������ҳ</a>';
       		}
       		else 
       		{
       			echo '�ϴ���������sqlΪ��'.$lastSql.'<br>';
       			
       			echo '��Ҫ��������sql�ļ���(����֮ǰǿ�ҽ����㱸�����ݿ�)<br>';
       			foreach ($needUpgradeSqls as $sql)
       			{
       				echo '<font color="red">'.$sql.'</font><br>';
       			}
       			
       			echo '<a class="btn btn-success" href="/yiiforum/frontend/web/index.php?r=upgrade/do">����</a>';
       		}
       ?>
    </div>
</div>
