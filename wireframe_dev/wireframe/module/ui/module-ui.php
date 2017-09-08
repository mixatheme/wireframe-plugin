<?php
/**
 * Module_UI is a Wireframe module.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Plugin
 * @author    MixaTheme, Tada Burke
 * @version   0.1.0 Wireframe_Plugin
 * @copyright 2016 MixaTheme
 * @license   GPL-2.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/Wireframe
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Namespaces.
 *
 * @since 5.3.0 PHP
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
namespace MixaTheme\Wireframe\Plugin;

/**
 * No direct access to this file.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
defined( 'ABSPATH' ) or die();

/**
 * Check if the class exists.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin Module_UI' ) ) :
	/**
	 * Module_UI class for wiring front-end presentation styles, scripts and views.
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Plugin
	 * @see   https://developer.wordpress.org/reference/functions/wp_enqueue_script
	 * @see   https://codex.wordpress.org/Javascript_Reference/wp.media
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	class Module_UI extends Core_Module_Abstract implements Module_UI_Interface {
		/**
		 * Enqueue.
		 *
		 * @access private
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 * @var   object $_enqueue
		 */
		private $_enqueue;

		/**
		 * Constructor runs when this class instantiates.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 * @param array $config Config data.
		 */
		public function __construct( $config ) {

			// Declare custom properties required for this class.
			$this->_enqueue = $config['enqueue'];

			// Get parent Constructor.
			parent::__construct( $config );
		}

		/**
		 * Enqueue Styles.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function styles() {
			if ( null !== $this->_enqueue->styles() ) {
				$this->_enqueue->styles();
			}
		}

		/**
		 * Enqueue Scripts.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function scripts() {
			if ( null !== $this->_enqueue->scripts() ) {
				$this->_enqueue->scripts();
			}
		}

		/**
		 * Enqueue Media Modal.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function mediamodal() {
			if ( null !== $this->_enqueue->mediamodal() ) {
				$this->_enqueue->mediamodal();
			}
		}

	} // Module_UI.

endif; // Thanks for using MixaTheme products!
