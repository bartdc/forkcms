<?php

class SpoonDataGridColumn
{
	/**
	 * Main cell attributes
	 *
	 * @var	array
	 */
	private $attributes = array();


	/**
	 * Confirmation required (via url)
	 *
	 * @var	bool
	 */
	private $confirm = false;


	/**
	 * Custom confirmation script
	 *
	 * @var	string
	 */
	private $confirmCustom;


	/**
	 * Confirmation message
	 *
	 * @var	string
	 */
	private $confirmMesage;


	/**
	 * Is this column hidden
	 *
	 * @var	bool
	 */
	private $hidden = false;


	/**
	 * Image for this column
	 *
	 * @var	string
	 */
	private $image;


	/**
	 * Alt/title tag for the image
	 *
	 * @var	string
	 */
	private $imageTitle;


	/**
	 * Label for the header column
	 *
	 * @var	string
	 */
	private $label;


	/**
	 * Name for this column
	 *
	 * @var	string
	 */
	private $name;


	/**
	 * Does the value overwrite images & url
	 *
	 * @var	bool
	 */
	private $overwriteValue = false;


	/**
	 * Sequence of this column
	 *
	 * @var	int
	 */
	private $sequence = 0;


	/**
	 * Is this column sortable
	 *
	 * @var	bool
	 */
	private $sorting = false;


	/**
	 * The default sorting method for this column
	 *
	 * @var	string
	 */
	private $sortingMethod = 'asc';


	/**
	 * Url for this column
	 *
	 * @var	string
	 */
	private $url;


	/**
	 * Url title tag
	 *
	 * @var	string
	 */
	private $urlTitle;


	/**
	 * The value for this column
	 *
	 * @var	string
	 */
	private $value;


	/**
	 * Class constructor.
	 *
	 * @return	void
	 * @param	string $name
	 * @param	string[optional] $label
	 * @param	string[optional] $value
	 * @param	string[optional] $url
	 * @param	string[optional] $image
	 * @param	string[optional] $sequence
	 */
	public function __construct($name, $label = null, $value = null, $url = null, $title = null, $image = null, $sequence = null)
	{
		// name, label & value
		$this->name = (string) $name;
		$this->label = (string) $label;
		$this->value = (string) $value;

		// url, title & image
		if($url !== null) $this->url = (string) $url;
		if($title !== null) $this->title = (string) $title;
		if($image !== null) $this->image = (string) $image;

		// sequence
		$this->sequence = (int) $sequence;
	}


	/**
	 * Clears the list of attributes for this column
	 *
	 * @return	void
	 */
	public function clearAttributes()
	{
		$this->attributes = array();
	}


	/**
	 * Retrieve the attributes
	 *
	 * @return	array
	 */
	public function getAttributes()
	{
		return $this->attributes;
	}


	/**
	 * Retrieve the confirm setting
	 *
	 * @return	bool
	 */
	public function getConfirm()
	{
		return $this->confirm;
	}


	/**
	 * Fetch the confirm custom script
	 *
	 * @return	string
	 */
	public function getConfirmCustom()
	{
		return $this->confirmCustom;
	}


	/**
	 * Retrieve the confirm message
	 *
	 * @return	string
	 */
	public function getConfirmMessage()
	{
		return $this->confirmMesage;
	}


	/**
	 * Retrieve the hidden status
	 *
	 * @return	bool
	 */
	public function getHidden()
	{
		return $this->hidden;
	}


	/**
	 * Retrieve the image
	 *
	 * @return	string
	 */
	public function getImage()
	{
		return $this->image;
	}


	/**
	 * Retrieve the image title
	 *
	 * @return	string
	 */
	public function getImageTitle()
	{
		return $this->imageTitle;
	}


	/**
	 * Retrieve the label
	 *
	 * @return	string
	 */
	public function getLabel()
	{
		return $this->label;
	}


	/**
	 * Retrieve the label attributes
	 *
	 * @return	array
	 */
	public function getLabelAttributes()
	{
		return $this->labelAttributes;
	}


	/**
	 * Retrieve the name
	 *
	 * @return	string
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * Retrieve the overwrite value setting
	 *
	 * @return	bool
	 */
	public function getOverwrite()
	{
		return $this->overwriteValue;
	}


	/**
	 * Retrieve the sequence
	 *
	 * @return	int
	 */
	public function getSequence()
	{
		return $this->sequence;
	}


	/**
	 * Retrieve the sorting setting
	 *
	 * @return	bool
	 */
	public function getSorting()
	{
		return $this->sorting;
	}


	/**
	 * Retrieve the default sorting method
	 *
	 * @return	void
	 */
	public function getSortingMethod()
	{
		return $this->sortingMethod;
	}


	/**
	 * Retrieve the url
	 *
	 * @return	string
	 */
	public function getURL()
	{
		return $this->url;
	}


	/**
	 * Retrieve the url title tag
	 *
	 * @return	string
	 */
	public function getURLTitle()
	{
		return $this->urlTitle;
	}


	/**
	 * Retrieve the value
	 *
	 * @return	string
	 */
	public function getValue()
	{
		return $this->value;
	}


	/**
	 * Set the attributes
	 *
	 * @return	void
	 * @param	array $attributes
	 */
	public function setAttributes(array $attributes)
	{
		foreach($attributes as $key => $value) $this->attributes[(string) $key] = (string) $value;
	}


	/**
	 * Sets the confirm message
	 *
	 * @return	void
	 * @param	string $message
	 * @param	string[optional] $custom
	 */
	public function setConfirm($message, $custom = null)
	{
		$this->confirm = true;
		$this->confirmMesage = (string) $message;
		$this->confirmCustom = (string) $custom;
	}


	/**
	 * Sets the hidden status
	 *
	 * @return	void
	 * @param	bool[optional] $on
	 */
	public function setHidden($on = true)
	{
		$this->hidden = (bool) $on;
	}


	/**
	 * Sets the image
	 *
	 * @return	void
	 * @param	string $image
	 * @param	string $title
	 */
	public function setImage($image, $title)
	{
		$this->image = (string) $image;
		$this->imageTitle = (string) $title;
	}


	/**
	 * Sets the label
	 *
	 * @return	void
	 * @param	string $label
	 */
	public function setLabel($label)
	{
		$this->label = (string) $label;
	}


	/**
	 * Sets the overwrite status
	 *
	 * @return	void
	 * @param	bool[optional] $on
	 */
	public function setOverwrite($on = true)
	{
		$this->overwriteValue = (bool) $on;
	}


	/**
	 * Sets the sequence
	 *
	 * @return	void
	 * @param	int $sequence
	 */
	public function setSequence($sequence)
	{
		$this->sequence = (int) $sequence;
	}

	/**
	 * Sets the sorting
	 *
	 * @return	void
	 * @param	bool[optional] $on
	 */
	public function setSorting($on = true)
	{
		$this->sorting = (bool) $on;
	}


	/**
	 * Sets the default sorting method for this column
	 *
	 * @return	void
	 * @param	string[optional] $sort
	 */
	public function setSortingMethod($sort = 'asc')
	{
		$this->sortingMethod = SpoonFilter::getValue($sort, array('asc', 'desc'), 'asc');
	}


	/**
	 * Sets the url
	 *
	 * @return	void
	 * @param	string $url
	 * @param	string[optional] $title
	 */
	public function setURL($url, $title = null)
	{
		$this->url = (string) $url;
		$this->urlTitle = (string) $title;
	}


	/**
	 * Sets the value & its overwrite setting
	 *
	 * @return	void
	 * @param	string $value
	 * @param	bool[optional] $overwrite
	 */
	public function setValue($value, $overwrite = false)
	{
		$this->value = (string) $value;
		$this->overwriteValue = (bool) $overwrite;
	}
}

?>