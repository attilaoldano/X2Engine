<?php
/*****************************************************************************************
 * X2Engine Open Source Edition is a customer relationship management program developed by
 * X2Engine, Inc. Copyright (C) 2011-2014 X2Engine Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY X2ENGINE, X2ENGINE DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact X2Engine, Inc. P.O. Box 66752, Scotts Valley,
 * California 95067, USA. or at email address contact@x2engine.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * X2Engine" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by X2Engine".
 *****************************************************************************************/

?>
<div id='per-stage-view-container-first' class='x2-layout-island x2-layout-island-merge-top-bottom'>
    <?php
    $this->renderFunnelView (
        $model->id, $dateRange, $expectedCloseDateDateRange, $users, null, $modelType);
    //$workflowStatus = Workflow::getWorkflowStatus($model->id, 0, $modelType);	// true = include dropdowns
    //echo Workflow::renderWorkflowStats($workflowStatus, $modelType);
    ?>
    <?php
    $this->renderPartial ('_processStatus', array (
        'dateRange' => $dateRange,
        'expectedCloseDateDateRange' => $expectedCloseDateDateRange,
        'model' => $model,
        'modelType' => $modelType,
        'users' => $users,
    ));
    ?>
</div>
<div id="workflow-gridview" class='x2-layout-island x2-layout-island-merge-top' 
 style="clear:both;">
    <?php
    if(isset($viewStage)){ // display grids for individual stages
    	echo Yii::app()->controller->getStageMembers(
            $model->id,
            $viewStage,
            Formatter::formatDate($dateRange['start']),
            Formatter::formatDate($dateRange['end']),
            $dateRange['range'],
            Formatter::formatDate($expectedCloseDateDateRange['start']),
            Formatter::formatDate($expectedCloseDateDateRange['end']),
            $expectedCloseDateDateRange['range'],
            $users,
            $modelType
        );
    }else { // display information about all stages
    $this->widget('zii.widgets.grid.CGridView', array(
    	// 'id'=>'docs-grid',
    	'baseScriptUrl'=>Yii::app()->request->baseUrl.'/themes/'.Yii::app()->theme->name.
            '/css/gridview',
    	'template'=> '{items}{pager}',
    	'dataProvider'=>X2Model::model('WorkflowStage')->search($model->id),
    	// 'filter'=>$model,
    	'columns'=>array(
    		array(
    			'name'=>'stageNumber',
    			'header'=>'#',
    			'headerHtmlOptions'=>array('style'=>'width:8%;'),
    		),
    		array(
    			'name'=>'name',
    			// 'value'=>'CHtml::link($data->title,array("view","id"=>$data->name))',
    			'type'=>'raw',
    			// 'htmlOptions'=>array('width'=>'30%'),
    		),
    		array(
    			'name'=>'requirePrevious',
    			'value'=>'Yii::t("app",($data->requirePrevious? "Yes" : "No"))',
    			'type'=>'raw',
    			'headerHtmlOptions'=>array('style'=>'width:15%;'),
    		),
    		array(
    			'name'=>'requireComment',
    			'value'=>'Yii::t("app",($data->requireComment? "Yes" : "No"))',
    			'type'=>'raw',
    			'headerHtmlOptions'=>array('style'=>'width:15%;'),
    		),
    		array(
    			'name'=>'conversionRate',
    			// 'value'=>'User::getUserLinks($data->createdBy)',
    			// 'type'=>'raw',
    			'headerHtmlOptions'=>array('style'=>'width:15%;'),
    		),
    		array(
    			'name'=>'value',
    			// 'value'=>'User::getUserLinks($data->createdBy)',
    			// 'type'=>'raw',
    			'headerHtmlOptions'=>array('style'=>'width:15%;'),
    		),
    	),
    ));
    }
    ?>
</div>
