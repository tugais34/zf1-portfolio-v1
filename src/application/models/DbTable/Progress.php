<?php

class Model_DbTable_Progress extends Zend_Db_Table_Abstract
{
	CONST TABLE_NAME = 'progress';
	CONST COL_ID = 'id';
	CONST COL_LABEL = 'label';
	CONST COL_START_DATE = 'start_date';
	CONST COL_END_DATE = 'end_date';
	CONST COL_TYPE = 'type';
	CONST COL_NOW = 'now';
	CONST COL_DESCRIPTION = 'description';
	CONST COL_PLACE = 'place';
}