<?php
/**
 *## BootstrapCode class file.
 *
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('gii.generators.crud.CrudCode');

/**
 *## Class BootstrapCode
 *
 * @package booster.gii
 */
class BootstrapCode extends CrudCode
{
	public function generateActiveRow($modelClass, $column)
	{
		if ($column->name==='active') {
			return "\$form->checkBoxRow(\$model,'{$column->name}')";
		  }
		else if(substr($column->name,0,3)==='tgl'){
            return "\$form->datepickerRow(\$model,'{$column->name}',
			       array(
                      'options' => array('language' => 'en',
					                      'dateFormat'=>'yy-mm-dd',
										  'yearRange'=>'-2',
										  'showOn'=>'button',
					                      'keyboardNavigation'=>true,
										  'autoclose'=>'true',
										  'changeMonth' => 'true',
					                      'changeYear' => 'true',
										  'constrainInput' => 'false', 
					                      'duration'=>'fast', 
					                      'showAnim' =>'slide',
                                          ),
                         									  						  
                        ),
					
				array('hint' => '(Klik untuk pilih tanggal)',
					   'prepend' => '<i class=\"icon-calendar\"></i>',	   
					  ),
				array('themeUrl'=>Yii::app()->request->baseUrl.'/themes/jui',
				         'theme'=>'redmond',
				         'htmlOptions'=>array('size'=>20))	  
		); ";
	        	 		
		} else if (stripos($column->dbType, 'text') !== false) {
			return "\$form->textAreaRow(\$model,'{$column->name}',array('rows'=>4, 'cols'=>50, 'class'=>'span6'))";
		} else {
			if (preg_match('/^(password|pass|passwd|passcode)$/i', $column->name)) {
				$inputField = 'passwordFieldRow';
			} else {
				$inputField = 'textFieldRow';
			}

			if ($column->type !== 'string' || $column->size === null) {
				return "\$form->{$inputField}(\$model,'{$column->name}',array('class'=>'span5'))";
			} else {
				return "\$form->{$inputField}(\$model,'{$column->name}',array('class'=>'span5','maxlength'=>$column->size))";
			}
		}
	}
}
