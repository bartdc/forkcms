<?php

/**
 * UsersIndex
 *
 * This is the index-action (default), it will display the users-overview
 *
 * @package		backend
 * @subpackage	users
 *
 * @author 		Tijs Verkoyen <tijs@netlash.com>
 * @since		2.0
 */
class UsersIndex extends BackendBaseActionIndex
{
	/**
	 * Datagrid instance
	 *
	 * @var	BackendDataGridDB
	 */
	private $dgUsers;


	/**
	 * Execute the action
	 *
	 * @return	void
	 */
	public function execute()
	{
		// call parent, this will probably add some general CSS/JS or other required files
		parent::execute();

		// load the datagrid
		$this->loadDatagrid();

		// parse the datagrid
		$this->parse();

		// display the page
		$this->display();
	}


	/**
	 * Load the datagrids
	 *
	 * @return	void
	 */
	private function loadDatagrid()
	{
		// create datagrid with an overview of all active and undeleted users
		$this->dgUsers = new BackendDataGridDB(BackendUsersModel::QRY_BROWSE, array('Y', 'N'));

		// hide id
		$this->dgUsers->setColumnsHidden('id');

		// add edit column
		$this->dgUsers->addColumn('edit', null, BL::getLabel('Edit'), BackendModel::createURLForAction('edit') .'?id=[id]', BL::getLabel('Edit'));

		// set id on rows, we will need this for the hilighting
		$this->dgUsers->setRowAttributes(array('id' => 'userid-[id]'));
	}


	/**
	 * Parse the datagrid and the reports
	 *
	 * @return	void
	 */
	private function parse()
	{
		// is there a report to show?
		if($this->getParameter('report') !== null)
		{
			// show the report
			$this->tpl->assign('report'. SpoonFilter::toCamelCase($this->getParameter('report')), true);

			// if we have data to use it will be passed as the var-parameter, if so assign it
			if($this->getParameter('var') !== null) $this->tpl->assign('var', $this->getParameter('var'));

			// hilight an element with the given id if needed
			if($this->getParameter('hilight')) $this->tpl->assign('hilight', $this->getParameter('hilight'));
		}

		$this->tpl->assign('dgUsers', ($this->dgUsers->getNumResults() != 0) ? $this->dgUsers->getContent() : false);
	}


}
?>