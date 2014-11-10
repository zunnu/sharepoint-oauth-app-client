<?php
/**
 * This file is part of the SharePoint OAuth App Client package.
 *
 * @author     Quetzy Garcia <qgarcia@wearearchitect.com>
 * @copyright  2014 Architect 365
 * @link       http://architect365.co.uk
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */

namespace WeAreArchitect\SharePoint;

trait SPObjectTrait
{
	use SPHydratorTrait;

	/**
	 * SharePoint Type
	 *
	 * @access  private
	 */
	private $type = null;

	/**
	 * SharePoint ID
	 *
	 * @access  private
	 */
	private $id = null;

	/**
	 * SharePoint GUID
	 *
	 * @access  private
	 */
	private $guid = null;

	/**
	 * Get SharePoint Type
	 *
	 * @access  public
	 * @return  string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Get SharePoint ID
	 *
	 * @access  public
	 * @return  int
	 */
	public function getID()
	{
		return $this->id;
	}

	/**
	 * Get SharePoint GUID
	 *
	 * @access  public
	 * @return  string
	 */
	public function getGUID()
	{
		return $this->guid;
	}
}
