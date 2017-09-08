<?php
/**
 * Core_Language is a Wireframe core class.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Plugin
 * @author    MixaTheme, Tada Burke
 * @version   0.1.0 Wireframe
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
use WP_Error;

/**
 * No direct access to this file.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Theme
 * @since 0.1.0 Wireframe_Plugin
 */
defined( 'ABSPATH' ) or die();

/**
 * Check if the class exists.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Core_Language' ) ) :
	/**
	 * Core_Language icore Wireframe class for wiring i18n & l10n translation.
	 *
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Theme
	 * @since 0.1.0 Wireframe_Plugin
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	final class Core_Language extends Core_Module_Abstract implements Core_Language_Interface {
		/**
		 * Component.
		 *
		 * Is the component a theme or a plugin?
		 *
		 * @access private
		 * @since  0.1.0 Wireframe
		 * @since  0.1.0 Wireframe_Theme
		 * @since  0.1.0 Wireframe_Plugin
		 * @var    string $_component The component type. Default: plugin
		 */
		private $_component = 'plugin';

		/**
		 * Path.
		 *
		 * @access private
		 * @since  0.1.0 Wireframe
		 * @since  0.1.0 Wireframe_Theme
		 * @since  0.1.0 Wireframe_Plugin
		 * @var    array $_path Path to language file.
		 */
		private $_path;

		/**
		 * Deprecated path.
		 *
		 * @access private
		 * @since  0.1.0 Wireframe
		 * @since  0.1.0 Wireframe_Theme
		 * @since  0.1.0 Wireframe_Plugin
		 * @var    bool $_deprecated Use the $plugin_rel_path parameter instead.
		 */
		private $_deprecated = false;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Theme
		 * @since 0.1.0 Wireframe_Plugin
		 * @param array $config Data via config file.
		 */
		public function __construct( $config ) {

			// Declare custom properties required for this class.
			$this->_component  = $config['component'];
			$this->_path       = $config['path'];
			$this->_deprecated = $config['deprecated'];

			// Get parent Constructor.
			parent::__construct( $config );
		}

		/**
		 * Get component.
		 *
		 * @since  0.1.0 Wireframe
		 * @since  0.1.0 Wireframe_Theme
		 * @since  0.1.0 Wireframe_Plugin
		 * @return string The component type.
		 */
		public function get_component() {
			if ( isset( $this->_component ) ) {
				return $this->_component;
			}
		}

		/**
		 * Get path.
		 *
		 * @since  0.1.0 Wireframe
		 * @since  0.1.0 Wireframe_Theme
		 * @since  0.1.0 Wireframe_Plugin
		 * @return string Path to language file.
		 */
		public function get_path() {
			if ( isset( $this->_path ) ) {
				return $this->_path;
			}
		}

		/**
		 * Get deprecated.
		 *
		 * @since  0.1.0 Wireframe
		 * @since  0.1.0 Wireframe_Theme
		 * @since  0.1.0 Wireframe_Plugin
		 * @return bool Use the $plugin_rel_path parameter instead.
		 */
		public function get_deprecated() {
			if ( isset( $this->_deprecated ) ) {
				return $this->_deprecated;
			}
		}

		/**
		 * Load theme textdomain.
		 *
		 * @since 3.1.0 WordPress
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Theme
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function textdomain() {

			// Check for required properties.
			if ( isset( $this->_prefix ) && isset( $this->_path ) ) :

				// Allow properties to be filtered.
				$filterable = apply_filters(
					$this->_prefix . '_' . __FUNCTION__,
					$this->_path
				);

				// Switch module type.
				switch ( strtolower( $this->_component ) ) {
					case 'theme':
						load_theme_textdomain( $this->_prefix, $filterable );
						break;
					case 'plugin':
						load_plugin_textdomain( $this->_prefix, $this->_deprecated, $filterable );
						break;
				}

			endif;
		}

	} // Core_Language.

endif; // Thanks for using MixaTheme products!
