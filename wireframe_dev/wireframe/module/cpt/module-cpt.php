<?php
/**
 * Module_CPT is a Wireframe module.
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
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Module_CPT' ) ) :
	/**
	 * Module_CPT class for registering Custom Post Types.
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Plugin
	 * @see   https://codex.wordpress.org/Post_Types
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	class Module_CPT extends Core_Module_Abstract implements Module_CPT_Interface {
		/**
		 * Defaults array
		 *
		 * @access private
		 * @since  0.1.0 Wireframe
		 * @since  0.1.0 Wireframe_Plugin
		 * @var    array $_defaults Config array to register default custom post types.
		 */
		private $_defaults;

		/**
		 * Unregister array.
		 *
		 * @access private
		 * @since  0.1.0 Wireframe
		 * @since  0.1.0 Wireframe_Plugin
		 * @var    array $_unregister Config array to unregister custom post types.
		 */
		private $_unregister;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 * @param array $config Required array of config arguments.
		 * @see   cfg-cpt.php The config file for this module.
		 */
		public function __construct( $config ) {

			// Declare custom properties required for this class.
			$this->_defaults   = $config['defaults'];
			$this->_unregister = $config['unregister'];

			// Get parent Constructor.
			parent::__construct( $config );
		}

		/**
		 * Get array of default custom post types to register.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function get_defaults() {
			if ( isset( $this->_defaults ) ) {
				return $this->_defaults;
			}
		}

		/**
		 * Get array of custom post types to unregister.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function get_unregister() {
			if ( isset( $this->_unregister ) ) {
				return $this->_unregister;
			}
		}

		/**
		 * Register custom post type(s).
		 *
		 * @since 2.9.0 WordPress
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 * @see   https://developer.wordpress.org/reference/functions/register_post_type/
		 *
		 * @todo Maybe use wp_parse_args().
		 * @todo Maybe use apply_filters().
		 */
		public function register() {
			if ( $this->get_defaults() ) {
				foreach ( $this->get_defaults() as $post_type => $args ) {
					register_post_type( $post_type, $args );
				}
			}
		}

		/**
		 * Unregister custom post type(s).
		 *
		 * @since 4.5.0 WordPress
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 * @see   https://developer.wordpress.org/reference/functions/unregister_post_type/
		 */
		public function unregister() {
			if ( $this->get_unregister() ) {
				foreach ( $this->get_unregister() as $post_type ) {
					unregister_post_type( $post_type );
				}
			}
		}

	} // Module_CPT.

endif; // Thanks for using MixaTheme products!
