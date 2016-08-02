<?php

use yii\grid\GridView;
use yii\widgets\DetailView;
/**
 * 
 * @var $this \yii\web\View
 * @var $model \app\models\TimelineEvent
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
$this->title = Yii::t('app', 'প্রজ্ঞাপন টাইমলাইন');
$icons = [
    'user'=>'<i class="fa fa-user bg-blue"></i>'
];
?>
<?php \yii\widgets\Pjax::begin() ?>
<?= GridView::widget([
        'dataProvider' => $dataProvider,        
        'columns' => [
           ['class' => 'yii\grid\SerialColumn',
				 'header' => 'ক্রমিক নং',
			],
			[
				'attribute' => 'key',
				'label' => 'টীকা',
				'value' => 'key',
			],
			[
				'attribute' => 'key_id',
				'label' => 'মামলা নাম্বার',
				'value' => 'key_id',
			],		   
		   //'type',
		  	// [
			//	'attribute' => 'user_id',
			//	'label' => 'দ্বারা সৃষ্টি',
			//	'value' => 'user_id',
			//],	
			[
				'attribute' => 'created_at',
				'label' => 'তারিখ ও সময়',
				'value' => 'created_at',
			],		            
        ],
    ]); 	
?>			
<?php \yii\widgets\Pjax::end() ?>

